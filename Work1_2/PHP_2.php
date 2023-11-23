<?php
$str = file_get_contents("JSON.json");
$obj = json_decode($str);
$toCheckLogin = "Temp1";//$toCheckLogin = readline("Введите логин");
$toCheckLogin = "/".$toCheckLogin."/";
$toCheckPwd = "Aa123456";//$toCheckPwd = readline("Введите пароль");
$toCheckPwd = "/".$toCheckPwd."/";
$Login = false;
// print $obj->{'users'}[0]->{'login'}; --> Вывод Temp1
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
