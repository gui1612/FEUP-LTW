<?php
    declare(strict_types = 1);
    session_start();

    include_once('templates/common/common.php');
    include_once('templates/users/register.php');

    outputHeader();
    displayRegisterForm();
    outputFooter();
?>