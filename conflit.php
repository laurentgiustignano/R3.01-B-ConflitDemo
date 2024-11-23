<?php

require_once 'Visa/Authentification.php';
require_once 'Paypal/Authentification.php';

$connexionVisa = new \Visa\Authentification();
$connexionPaypal = new \Paypal\Authentification();

