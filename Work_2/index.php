<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$users = [
    new User("C", "123", "01-01-1990"),
    new User("B", "123", "01-01-2000"),
    new User("A", "123", "01-01-2010")
];
$userService = new UserService;
$userService->sortByUsername($users, true);
foreach ($userService as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$userService->sortByUsername($users, false);
foreach ($userService as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$userService->sortByBirthday($users, true);
foreach ($userService as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}
$userService->sortByBirthday($users, false);
foreach ($userService as $sorted) {
    print $sorted->username;
    print $sorted->birthday;
}