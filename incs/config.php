<?php

if (version_compare(phpversion(), '8.2.0', '<')) {
    exit('Check PHP version, please. PHP 8.2+ Required');
}

define("ROOT", dirname(__DIR__));
const VIEWS = ROOT . '/views';
