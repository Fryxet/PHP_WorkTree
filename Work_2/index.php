<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use Farfels\work2\User;
use Farfels\work2\UserService;

$users = [
    new User("C", "123", "01-01-1990"),
    new User("B", "123", "01-01-2000"),
    new User("A", "123", "01-01-2010")
];
$users = UserService::sortByUsername($users, true);
foreach ($users as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$users = UserService::sortByUsername($users, false);
foreach ($users as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$users = UserService::sortByBirthday($users, true);
foreach ($users as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$users = UserService::sortByBirthday($users, false);
foreach ($users as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}