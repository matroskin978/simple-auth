<?php

session_start();
require_once __DIR__ . '/incs/config.php';
require_once ROOT . '/incs/db.php';
require_once ROOT . '/incs/functions.php';

if (check_auth()) {
    redirect('secret.php');
}

$title = 'Login';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = load(['email', 'password']);
    if (true === ($validate = check_required_fields($data))) {
        if (login($data)) {
            redirect('secret.php');
        }
    } else {
        $_SESSION['errors'] = get_errors($validate);
    }
}

require_once VIEWS . '/login.tpl.php';
