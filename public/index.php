<?php 
// Composerオートローダを読み込む
require_once '../vendor/autoload.php';

$groupsApi = (new \MailerLiteApi\MailerLite(API_KEY))->groups();

$groups = $groupsApi->get(); // returns array of groups

$groupList = $groups->toArray();

foreach($groupList as $key => $group){
    echo '[id]:'.$group->id.'<br>';
    echo '[name]:'.$group->name.'<br>';
    echo '[date_created]:'.$group->date_created.'<br>';
    echo '[date_updated]:'.$group->date_updated.'<br>';
}

// var_dump($groupList);
exit;