<?php

class Login {

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    public function __construct() {
        if (isset($_GET["logout"])) {
            $this->doLogout();
        } elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    private function dologinWithPostData() {
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            /* if (!$this->db_connection->set_charset("utf8")) {
              $this->errors[] = $this->db_connection->error;
              } */
            if (!$this->db_connection->connect_errno) {

                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);
                $user_password = $this->db_connection->real_escape_string($_POST['user_password']);
                $pwd = md5($user_password);
                $sql = "SELECT *
                        FROM admin_profile
                        WHERE user_name = '" . $user_name . "' ;";
                $result_of_login_check = $this->db_connection->query($sql);

                if ($result_of_login_check->num_rows == 1) {

                    $result_row = $result_of_login_check->fetch_object();
                    //echo $result_row->password;
                    //die();
                    $row_pwd = $result_row->password;
                    if ($pwd == $row_pwd) {
						//echo "Test"; die();
                        $_SESSION['admin_id'] = $result_row->admin_id;
                        $_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['email'] = $result_row->email;
                        $_SESSION['password'] = $result_row->password;
                        $_SESSION['user_type'] = $result_row->user_type;                        

                        $_SESSION['user_login_status'] = 1;
                    } else {
                        $this->errors[] = "Wrong password. Try again.";
                    }
                } else {
                    $this->errors[] = "This user does not exist.";
                }
            } else {
                $this->errors[] = "Database connection problem.";
            }
        }
    }

    public function doLogout() {

        $_SESSION = array();
        session_destroy();
        $this->messages[] = "You have been logged out.";
    }

    public function isUserLoggedIn() {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        return false;
    }

}
