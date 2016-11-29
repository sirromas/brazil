<?php

set_time_limit(0);
error_reporting('all');

require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/certificates/pdf/mpdf/mpdf.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/class.pdo.database.php';

class Certificate {

    public $db;
    public $path;
    public $html_css_path;
    public $pdf_css_path;

    function __construct() {
        $this->db = new pdo_db();
        $this->path = $_SERVER['DOCUMENT_ROOT'] . "/custom/certificates/files";
        $this->html_css_path = 'http://ead.iprovida.org.br/custom/certificates/css/cert.css';
        $this->pdf_css_path = $_SERVER['DOCUMENT_ROOT'] . "/custom/certificates/css/cert.css ";
    }

    function get_course_name($courseid) {
        $query = "select * from mdl_course where id=$courseid";
        //echo "Query: " . $query . "<br>";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $name = $row['fullname'];
        }
        return $name;
    }

    function get_student_details($id) {
        $query = "select * from mdl_user where id=$id";
        //echo "Query: " . $query . "<br>";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $user = new stdClass();
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
        }
        return $user;
    }

    function is_certificate_exists($userid, $courseid) {
        $query = "select * from mdl_certificates "
                . "where userid=$userid "
                . "and courseid=$courseid";
        $num = $this->db->numrows($query);
        return $num;
    }

    function create_user_certificate($userid, $courseid) {
        $list = "";
        $list2 = "";
        $coursename = $this->get_course_name($courseid);
        $user = $this->get_student_details($userid);
        $list.="<!DOCTYPE HTML SYSTEM>";
        $list.="<head>";
        $list.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
        $list.="<link rel='stylesheet' type='text/css' href='$this->html_css_path'>";
        $list.="</head>";
        $list.="<body>";
        $list.="<div class='cert'>";
        $list.="<div class='text' style='width: 70%;
            height: 21%;
            display: inline-block;
            margin-left: 2px;
            margin-top: 277px;
            font-size: 16px;
            text-align: center;'><br><br>Conferimos ao Aluno <b>$user->firstname $user->lastname</b>  "
                . "o presente certificado, referente a sua participa&ccedil;&atilde;o e conclus&atilde;o <br>"
                . "do Curso de <b>" . strtoupper($coursename) . "</b>, com carga horria de 30 "
                . "horas conforme legisla&ccedil;&atilde;o de transito.</div>";
        $list.="</div>";
        $list.="</body>";
        $list.="</html>";

        // ****** Because of mPDF limitations we use online css styles *******/

        $list2.="<!DOCTYPE HTML SYSTEM>";
        $list2.="<head>";
        $list2.="<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
        $list2.="</head>";
        $list2.="<body>";
        $list2.="<div class='cert' style='background-image: url(http://ead.iprovida.org.br/custom/certificates/img/certificado_bg.jpg);
            background-repeat: no-repeat;
            background-size:100% auto;
            text-align:center;
            width:100%;
            height: 100%;
            margin:auto;'>";
        $list2.="<div class='text'><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conferimos ao Aluno <b>$user->firstname $user->lastname</b>  "
                . "o presente certificado, referente a sua participa&ccedil;&atilde;o e conclus&atilde;o <br>"
                . "do Curso de <b>" . strtoupper($coursename) . "</b>, com carga horria de 30 <br>"
                . "horas conforme legisla&ccedil;&atilde;o de transito.";
        $list2.="</div>";
        $list2.="</div>";
        $list2.="</body>";
        $list2.="</html>";
        $pdf = new mPDF('utf-8', 'A4-L');
        //$stylesheet = file_get_contents($this->html_css_path);
        //$pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($list2, 2);
        $dir_path = $this->path . "/$userid/$courseid";
        //echo "Dir path: " . $dir_path . "<br>";
        if (!is_dir($dir_path)) {
            //echo "Dir does not exist ...<br>";
            if (!mkdir($dir_path, 0777, true)) {
                print_r(error_get_last());
                //die('Could not write to disk');
            } // end if !mkdir($dir_path)
        } // end if !is_dir($dir_path)
        $path = $dir_path . "/certificate.pdf";
        $path2 = $dir_path . "/certificate.html";
        file_put_contents($path2, $list);
        $pdf->Output($path, 'F');

        $date = time();
        $status = $this->is_certificate_exists($userid, $courseid);
        if ($status == 0) {
            $query = "insert into mdl_certificates "
                    . "(userid, "
                    . "courseid, "
                    . "issue_date) values($userid,$courseid,$date)";
            $this->db->query($query);
        }

        return "Certificate has been created";
    }

}
