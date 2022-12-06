<?php
include_once 'includes/database.class.php';
include_once 'includes/user.class.php';
include_once 'includes/session.class.php';

Sessions::start_session();

function load_templates($name)
{
    include_once $_SERVER['DOCUMENT_ROOT']."/ecommerce/_templates/$name.php";
}

?>