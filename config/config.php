<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 1-6-2018
 * Time: 09:28
 */

class config{
    public $dbc;
    public function __construct()
    {
        $this->dbc = new mysqli("localhost", "root", '', "spotitube");
        if ($this->dbc->connect_errno){
            die($this->dbc->connect_error);
        }
    }
    public function session(){
        if ($_SESSION['logged_in'] = true){
            $logged_username = $_SESSION['ussername'];
        }
    }
}
$db = new config();
$conn = $db->dbc;