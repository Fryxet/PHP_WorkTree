<?php
$str = file_get_contents("JSON.json");
$obj = json_decode($str);
$toCheckLogin = readline("Введите логин");
$toCheckLogin = "/".$toCheckLogin."/";
$toCheckPwd = readline("Введите пароль");
$toCheckPwd = "/".$toCheckPwd."/";
$Login = false;
foreach ($obj->{'users'} as $object) {
    if (preg_match($toCheckLogin, $object->{'login'}) == true) {
        if (preg_match($toCheckPwd, $object->{'password'}) == true) {
            print("Вход разрешен");
            $Login = true;
        }
    }
}
if ($Login == false) print("Проверьте введенные данные");
?>
