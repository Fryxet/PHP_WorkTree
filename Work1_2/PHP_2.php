<?php
$str = file_get_contents("JSON.json");
$obj = json_decode($str);
$toCheckLogin = readline("Введите логин");
$toCheckLogin = "/".$toCheckLogin."/";
$toCheckPwd = readline("Введите пароль");
$toCheckPwd = "/".$toCheckPwd."/";
$login = false;
foreach ($obj->{'users'} as $object) {
    if (preg_match($toCheckLogin, $object->{'login'}) == true) {
        if (preg_match($toCheckPwd, $object->{'password'}) == true) {
            print("Вход разрешен");
            $login = true;
        }
    }
}
if ($login == false) print("Проверьте введенные данные");
?>