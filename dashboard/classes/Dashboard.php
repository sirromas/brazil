<?php

/**
 * Description of Dashboard
 *
 * @author moyo
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/signup/classes/Signup.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/certificates/classes/Certificate.php';

class Dashboard extends Signup {

    public $cert;
    public $contextlevel;
    public $passing_grade = 7;
    public $courseid = 4;

    function __construct() {
        parent::__construct();
        $this->cert = new Certificate();
        $this->contextlevel = 50;
    }

    function get_course_context($id) {
        $query = "select * from mdl_context "
                . "where instanceid=$id "
                . "and contextlevel=$this->contextlevel";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
        }
        return $id;
    }

    function get_user_role($userid, $courseid) {
        $contextid = $this->get_course_context($courseid);
        $query = "select * from mdl_role_assignments "
                . "where userid=$userid and contextid=$contextid";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $roleid = $row['roleid'];
        }
        return $roleid;
    }

    function get_user_data() {
        global $USER;

        $query = "select * from mdl_user where id='$USER->id'";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $user = new stdClass();
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
        }
        // Add additional properties to the class
        $user->userid = $USER->id;
        $user->courseid = $this->courseid;
        $user->roleid = $this->get_user_role($USER->id, $this->courseid);

        return $user;
    }

    function get_quizes_list($id) {
        $query = "select * from mdl_grade_items "
                . "where courseid=$id "
                . "and itemmodule='quiz' "
                . "and itemname like '%Prova%'";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $ids[] = $row['id'];
        }
        $ids_list = implode(",", $ids);
        return $ids_list;
    }

    function is_user_paid($userid, $courseid, $date = NULL) {
        if ($date == null) {
            $query = "select * from mdl_paypal_payments "
                    . "where userid=$userid "
                    . "and courseid=$courseid";
        } // end if
        else {
            $query = "select * from mdl_paypal_payments "
                    . "where userid=$userid "
                    . "and courseid=$courseid "
                    . "and added>$date";
        } // end else
        $num = $this->db->numrows($query);
        return $num;
    }

    function get_user_taken_quizes($userid, $courseid) {
        $list = $this->get_quizes_list($courseid);
        $query = "select * from mdl_grade_grades "
                . "where userid=$userid "
                . "and rawgrade is not null and itemid in ($list) "
                . "order by timecreated";
        //echo "Query: ".$query."<br>";
        $num = $this->db->numrows($query);
        if ($num > 0) {
            $result = $this->db->query($query);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $q = new stdClass();
                foreach ($row as $key => $value) {
                    $q->$key = $value;
                } // end foreach
                $quizes[] = $q;
            } // end while
            return $quizes;
        } // end if
        else {
            return FALSE;
        }
    }

    function is_user_has_certificate($userid, $courseid) {
        $query = "select * from mdl_certificates "
                . "where userid=$userid "
                . "and courseid=$courseid";
        $num = $this->db->numrows($query);
    }

    function is_user_passed($userid, $courseid) {
        $score = 0;
        $list = $this->get_quizes_list($courseid);
        $quizes = explode(",", $list);
        foreach ($quizes as $item) {
            $query = "select * from mdl_grade_grades "
                    . "where userid=$userid "
                    . "and itemid=$item and rawgrade is not null";
            $num = $this->db->numrows($query);
            if ($num > 0) {
                $result = $this->db->query($query);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $score = $score + $row['rawgrade'];
                } // end while
            } // end if $num>0
        } // end foreach
        if ($score >= $this->passing_grade * 4) {
            $status = 1;
        } // end if
        else {
            $status = 0;
        } // end else
        return $status;
    }

    function create_user_certificate($userid, $courseid) {
        $status = $this->cert->is_certificate_exists($userid, $courseid);
        if ($status == 0) {
            $this->cert->create_user_certificate($userid, $courseid);
        }
    }

    function get_non_paid_message($user) {
        $list = "";
        $button = $this->get_paypal_button($user);

        $list.="<div class='container-fluid' style='font-weight:bold;'>";
        $list.="<span class='span12'>Prezado. Você não atingiu a nota mínima requerida para o curso. Para continuá-lo precisará efetuar um novo pagamento: </span>";
        $list.="</div>";

        $list.="<div class='container-fluid' style=''>";
        $list.="<span class='span8'>$this->coursename</span>";
        $list.="<span class='span1'>$button</span>";
        $list.="</div><br><br>";

        return $list;
    }

    function get_low_score_message($user) {
        $list = "";
        $button = $this->get_paypal_button($user);

        $list.="<div class='container-fluid' style='font-weight:bold;'>";
        $list.="<span class='span12'>Prezado. Você não atingiu a nota mínima requerida para o curso. Para continuá-lo precisará efetuar um novo pagamento. </span>";
        $list.="</div>";

        $list.="<div class='container-fluid' style=''>";
        $list.="<span class='span8'>$this->coursename</span>";
        $list.="<span class='span1'>$button</span>";
        $list.="</div><br><br>";

        return $list;
    }

    function get_certificate_message($user) {
        $list = "";
        $link = "http://" . $_SERVER['SERVER_NAME'] . "/custom/certificates/files/$user->userid/$user->courseid/certificate.pdf";

        $list.="<div class='container-fluid' style='font-weight:bold;'>";
        $list.="<span class='span9'><a href='$link' target='_blank'>Course Certificado</a></span>";
        $list.="</div><br><br>";

        return $list;
    }

    // ********* Entry point ***************

    function get_user_course_access() {

        $user = $this->get_user_data();

        // ************ The workflow is next: ***************
        // 1. Once user login check user payment, if ok:
        // a. Check did user take quizes
        // b. If user taken quizes check user score
        // c. If user scrore low - user get redirected to payment page
        // d. If user score is ok - check did user take all quizes?
        // e  If ok - create user certificate
        // 2. If not ok user get redirected to payment page

        $paid_status = $this->is_user_paid($user->userid, $user->courseid);
        if ($paid_status > 0) {
            
        } // end if $paid_status>0
        else {
            
        }
    }

}
