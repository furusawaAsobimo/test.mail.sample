<?php 
// Composerオートローダを読み込む
require_once '../vendor/autoload.php';

$groupsApi = (new \MailerLiteApi\MailerLite(API_KEY))->groups();

//$subscriber = [
//    'email' => $_GET['email'],
//    'fields' => [
//        'name' => $_GET['name'],
//        'last_name' => $_GET['last_name'],
//        'company' => $_GET['company'],
//    ]
//];

$subscriber = [
    'email' => 'john@example.com',
    'fields' => [
        'name' => 'John',
        'last_name' => 'Doe',
        'company' => 'John Doe Co.'
    ]
];

$response = $groupsApi->addSubscriber(GROUP_ID, $subscriber);

echo $response;
exit;