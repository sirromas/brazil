<?php

/**
 * Description of Signup
 *
 * @author moyo
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/custom/class.pdo.database.php';

class Signup {

    public $db;

    function __construct() {
        $this->db = new pdo_db();
    }

    function test_db_connection() {
        $query = "select * from mdl_user";
        $result = $this->db->query($query);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $email = $row['email'];
            echo "User email: " . $email . "<br>";
        }
    }

}
