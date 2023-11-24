<?php
require_once "User.php";
class UserService {
    protected function build_sorter_un($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($a[$key], $b[$key]);
        };
    }
    protected function build_sorter_un_down($key) {
        return function ($a, $b) use ($key) {
            return strnatcmp($b[$key], $a[$key]);
        };
    }
    protected function build_sorter_dt($key) {
        return function ($a, $b) use ($key) {
            if ($a[$key] == $b[$key]){
                return 0;
            }
            return ($a[$key] < $b[$key]) ? -1 : 1;
        };
    }
    protected function build_sorter_dt_down($key) {
        return function ($a, $b) use ($key) {
            if ($a[$key] == $b[$key]){
                return 0;
            }
            return ($a[$key] > $b[$key]) ? -1 : 1;
        };
    }
    public function sortByUsername(array $users, bool $type) {
        if ($type == true){
            usort($users, UserService::build_sorter_un('username'));
            return $users;
        }
        else{
            usort($users, UserService::build_sorter_un_down("username"));
            return $users;
        }
    }
    public function sortByBirthday(array $users, bool $type){
        if ($type == true){
            usort($users, UserService::build_sorter_dt('birthday'));
            return $users;
        }
        else {
            usort($users, UserService::build_sorter_dt_down('birthday'));
            return $users;
        }
    }
}