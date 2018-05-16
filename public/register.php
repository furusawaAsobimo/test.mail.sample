<?php 
// Composerオートローダを読み込む
require_once '../vendor/autoload.php';

$groupsApi = (new \MailerLiteApi\MailerLite(API_KEY))->groups();

$subscriber = [
    'email' => $_GET['email'],
    'fields' => [
        'name' => $_GET['name'],
        'last_name' => $_GET['last_name'],
        'company' => $_GET['company'],
    ]
];

$response = $groupsApi->addSubscriber(GROUP_ID, $subscriber);
var_dump($response);
exit;