<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {

    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    die( header( 'location: error.php' ) );

}
require '../inc/Database.php';
require '../inc/Newsletter.php';

if (!empty($_POST)) {
    $email = $_POST['signup-email'];
    Newsletter::sendEmail($email);
    Newsletter::register($email);
}
