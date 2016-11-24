<?php

/**
 * Description of Signup
 *
 * @author moyo
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/class.pdo.database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/signup/classes/Mailer.php';

class Signup {

    public $db;
    public $student_role = 5;
    public $courseid = 4;
    public $coursename = 'Curso de Reciclagem para Condutores Infratores';
    public $amount = '270';
    public $signup_url;

    function __construct() {
        $this->db = new pdo_db();
        $this->signup_url = 'http://' . $_SERVER['SERVER_NAME'] . '/login/my_signup.php';
    }

    function getUserId($email) {
        $query = "select id from mdl_user where username='" . $email . "'";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $userid = $row['id'];
        }
        return $userid;
    }

    function getCourseContext($courseid) {
        $query = "select id from mdl_context
                     where contextlevel=50
                     and instanceid='" . $courseid . "' ";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $contextid = $row['id'];
        }
        return $contextid;
    }

    function getEnrolId($courseid) {
        $query = "select id from mdl_enrol
                     where courseid=" . $courseid . " and enrol='manual'";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $enrolid = $row['id'];
        }
        return $enrolid;
    }

    function assign_roles($userid, $courseid) {
        $roleid = $this->student_role;
        $enrolid = $this->getEnrolId($courseid);
        $contextid = $this->getCourseContext($courseid, $roleid);

        // 1. Insert into mdl_user_enrolments table
        $query = "insert into mdl_user_enrolments
             (enrolid,
              userid,
              timestart,
              modifierid,
              timecreated,
              timemodified)
               values ('" . $enrolid . "',
                       '" . $userid . "',
                        '" . time() . "',   
                        '2',
                         '" . time() . "',
                         '" . time() . "')";
        //echo "Query: ".$query."<br/>";
        $this->db->query($query);

        // 2. Insert into mdl_role_assignments table
        $query = "insert into mdl_role_assignments
                  (roleid,
                   contextid,
                   userid,
                   timemodified,
                   modifierid)                   
                   values ('" . $roleid . "',
                           '" . $contextid . "',
                           '" . $userid . "',
                           '" . time() . "',
                            '2'         )";
        // echo "Query: ".$query."<br/>";
        $this->db->query($query);
    }

    function update_user_data($user) {
        $query = "update mdl_user "
                . "set 	gender='$user->sex', "
                . "cpf='$user->cpf', "
                . "rg='$user->rg', "
                . "uf='$user->orgao_expedidor', "
                . "birth='$user->birth', "
                . "license='$user->license_no ', "
                . "category='$user->drive_category', "
                . "code='$user->license_no', "
                . "phone1='$user->phone', "
                . "phone2='$user->cell_phone' "
                . "where username='$user->email'";
        //echo "Query: " . $query . "<br>";
        $this->db->query($query);
    }

    function create_user_account($user) {

        $encoded_user = base64_encode(json_encode($user));
        $data = array('user' => $encoded_user);

        // 1. Signup user into moodle    
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );

        $context = stream_context_create($options);
        $response = @file_get_contents($this->signup_url, false, $context);
        //$response = file_get_contents($this->signup_url, false, $context);
        //print_r($response);
        //die();
        if ($response !==false) {
            // 2. Enroll user into course
            $userid = $this->getUserId($user->email);
            $this->assign_roles($userid, $this->courseid);
            $this->update_user_data($user);
            $mail = new Mailer();
            //$mail->send_signup_confirmation($user);
            return TRUE;
        }  // end if $response !== false        
        else {
            return FALSE;
        }
    }

    function get_paypal_button($user) {
        $list = "";

        $list.="<form action='https://www.sandbox.paypal.com/cgi-bin/webscr' method='post'>
        <input type='hidden' name='cmd' value='_xclick'>
        <INPUT TYPE='hidden' name='charset' value='utf-8'>
        <input type='hidden' name='business' value='sirromas@ukr.net'>
        <input type='hidden' name='item_name' value='$this->coursename'>
        <input type='hidden' name='amount' value='$this->amount'>
        <input type='hidden' name='custom' value='$user->email/$user->pwd'>    
        <INPUT TYPE='hidden' NAME='currency_code' value='BRL'>    
        <input type='hidden' name='first_name' value='$user->first_name'>
        <input type='hidden' name='last_name' value='$user->last_name'>
        <input type='hidden' name='address1' value='$user->address'>
        <input type='hidden' name='city' value='$user->city'>
        <input type='hidden' name='state' value='$user->state'>
        <input type='hidden' name='zip' value='$user->zip'>
        <input type='hidden' name='night_phone_a' value='$user->phone'>
        <input type='hidden' name='night_phone_b' value='$user->cell_phone'>
        <input type='hidden' name='email' value='$user->email'>
        <INPUT TYPE='hidden' NAME='return' value='http://ead.iprovida.org.br/custom/signup/paypal_success.php'>
        

        <input type='image' name='submit'
          src='https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif'
          alt='PayPal - The safer, easier way to pay online'>
      </form>
      ";

        return $list;
    }

    function get_user_data($email) {
        $query = "select * from mdl_user where username='$email'";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $user = new stdClass();
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
        }
        return $user;
    }

    function add_user_payment($payment) {
        $userid = $this->getUserId($payment->email);
        $user = $this->get_user_data($payment->email);
        $user->amount = $this->amount;
        $user->coursename = $this->coursename;
        $user->pwd = $payment->pwd;
        $date = time();
        $orderid = 'ref_' . $date;
        $query = "insert into mdl_paypal_payments "
                . "(userid,"
                . "courseid,"
                . "transid,"
                . "currency,"
                . "orderid,"
                . "amount,"
                . "added) "
                . "values($userid,"
                . "'$this->courseid',"
                . "'$payment->transid',"
                . "'$payment->currency',"
                . "'$orderid',"
                . "'$payment->amount',"
                . "'$date')";
        $this->db->query($query);

        $mail = new Mailer($payment->email);
        $mail->send_payment_confirmation_message($user);
    }

}
