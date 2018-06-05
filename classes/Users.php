<?php
require ('config/config.php');
//session_start();
//error_reporting(0);
class users {
    public $username;
    public $login_user;
    public $login_pass;
    public $get_user_query;
    public $logged_in;
    public $login_submit;
    public $password;
    public $user_id;
    public $url;
    public $password_again;
    public $submit;
    public $errors = array();
    public $dbc;

    public $errMsg = "<div class=\"alert alert-danger\">
                      <strong>Foutmelding:
                      </strong> 
                      Alle velden zijn verplicht, wachtwoord moet minimaal 8 tekens zijn.
                      </div>";

    public $succMsg = "<div class=\"alert alert-success\">
                      <strong>Gebruiker toegevoegd</strong>
                       </div>";

    public $loginSuccMsg = "<div class=\"alert alert-success\">
                      <strong>U bent ingelogd</strong>
                       </div>";

    public $faultLoginMsg = "<div class=\"alert alert-danger\">
                      <strong>Foutmelding:
                      </strong> 
                      Verkeerde inlog-gegevens.
                      </div>";

    public function __construct()
    {
        session_start();
        $this->dbc = new mysqli("localhost", "root", '', "spotitube");
        if ($this->dbc->connect_errno){
            die($this->dbc->connect_error);
        }
    }

    public function getPlaylist(){
        
        $query = "SELECT playlist_url from playlist where user_id = $this->user_id";
        $result = $this->dbc->query($query);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
             echo   '            <iframe width="560" height="315" src='.$row['playlist_url'] .'frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
            }
        } else {
            echo "0 results";
        }
    }

    public function register(){

        $this->username = htmlspecialchars($_POST['username']);
        $this->password = md5(htmlspecialchars($_POST['password']));
        $this->password_again =  md5(htmlspecialchars($_POST['password2']));
        $this->submit = $_POST['submit'];

        if (isset($this->submit)){
            if ($this->validate_registration() > 0){
                echo $this->errMsg;
            }
        }

    }
    public function login(){
        $this->login_user = htmlspecialchars($_POST['login_username']);
        $this->login_pass = md5(htmlspecialchars($_POST['login_password']));
        $this->login_submit = $_POST['login_submit'];
        $this->get_user_query = "SELECT username, password from users WHERE username = '$this->login_user' AND password = '$this->login_pass'";
        $this->validate_login();
    }
    public function validate_registration(){

        if (strlen($this->password) < 8
            || empty($this->username)
            || empty($this->password)
            || empty($this->password_again)
            || $this->password !== $this->password_again
        ){

            $this->errors[] = $this->errMsg;
            return $this->errors;
        }else{
            echo $this->succMsg;
            $query = "INSERT INTO users (user_id, username, password) VALUES (null, '$this->username', '$this->password')";
            $this->dbc->query($query);
        }

    }

public function validate_login(){
    if (isset($this->login_submit)) {

        $result = $this->dbc->query($this->get_user_query);

        if ($result->num_rows > 0) {
            $_SESSION['user_id'] = $this->user_id;
            header("location: loginredirect.php");
        } else {
            echo $this->faultLoginMsg;
        }
    }
}
}
?>