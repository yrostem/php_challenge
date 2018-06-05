<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 1-6-2018
 * Time: 09:23
 */
class auth{
    public function __construct()
    {
        include('inc/pages/login_page.php');
    }
}
$auth = new auth();
?>