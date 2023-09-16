<?php

session_start();
require_once __DIR__ . '/incs/config.php';
require_once ROOT . '/incs/db.php';
require_once ROOT . '/incs/functions.php';

if (!check_auth()) {
    redirect('login.php');
}

$title = 'Secret';

require_once VIEWS . '/secret.tpl.php';
