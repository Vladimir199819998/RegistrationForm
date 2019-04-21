<?php

mb_internal_encoding('utf-8');

function generate_unique_file($name, $surname)
{
    $filename = '../requests/' . $name . '_' . $surname . '_' . rand(1, 1000) . '_' . date('d-m-Y_H:i:s') . '.json';
    return $filename;
}

$wallet_means = [
    'WebMoney',
    'Яндекс Деньги',
    'PayPal',
    'Credit Card'
];

$topics = [
    'Business',
    'Tech',
    'Marketing and Advertising'
];

$error_message = '';
$name = '';
$surname = '';
$email = '';
$topic = '';
$wallet = '';
$subscription = false;

if (empty($_POST['name'])) {
    $error_message .= '<li>Name field is required</li>';
} else {
    $name = trim($_POST['name']);
}

if (empty($_POST['surname'])) {
    $error_message .= '<li>Surname field is required!';
} else {
    $surname = trim($_POST['surname']);
}

if (empty($_POST['email'])) {
    $error_message .= '<li>Email field is required!</li>';
} else {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error_message .= '<li>Email has an invalid format!</li>';
    } else {
        $email = trim($_POST['email']);
    }
}

if (empty($_POST['topic']) || !in_array($_POST['topic'], $topics)) {
    $error_message .= '<li>Category field is required!</li>';
} else {
    $topic = trim($_POST['topic']);
}

if (empty($_POST['wallet']) || !in_array($_POST['wallet'], $wallet_means)) {
    $error_message .= '<li>Payment field is required!</li>';
} else {
    $wallet = $_POST['wallet'];
}

if (isset($_POST['subscription'])) {
    $subscription = 'true';
}

if (empty($error_message)) {
    $file_name = generate_unique_file($name, $surname);
    $data = json_encode([
        'Name' => $name,
        'Surname' => $surname,
        'Email' => $email,
        'Topic' => $topic,
        'Wallet' => $wallet,
        'Subscription' => $subscription
    ], true);
    file_put_contents($file_name, $data);


    echo json_encode([
        'code' => "200"
    ]);
} else {
    echo json_encode([
        'code' => "404",
        'msg' => $error_message
    ]);
}


