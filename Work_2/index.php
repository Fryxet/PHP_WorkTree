<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use Farfels\Work2\User;
use Farfels\Work2\UserService;

$dt1 = new DateTime("01-01-1990");
$dt2 = new DateTime("01-01-2000");
$dt3 = new DateTime("01-01-2010");
$users = [
    new User("C", "123", $dt1),
    new User("B", "123", $dt2),
    new User("A", "123", $dt3)
];
$users = UserService::sortByUsername($users, true);
foreach ($users as $sorted) {
    print($sorted->username . "\n");
    print($sorted->birthday->format("Y/m/d") . "\n");
}
$users = UserService::sortByUsername($users, false);
foreach ($users as $sorted) {
    print($sorted->username . "\n");
    print($sorted->birthday->format("Y/m/d") . "\n");
}
$users = UserService::sortByBirthday($users, true);
foreach ($users as $sorted) {
    print($sorted->username . "\n");
    print($sorted->birthday->format("Y/m/d") . "\n");
}
$users = UserService::sortByBirthday($users, false);
foreach ($users as $sorted) {
    print($sorted->username . "\n");
    print($sorted->birthday->format("Y/m/d") . "\n");
}