<?php
namespace Farfels\Work2;

use Farfels\Work2\User;

class UserService
{
    protected static function build_sorter_un($a, $b): int
    {
        return strcmp($a->username, $b->username);
    }
    protected static function build_sorter_un_down($a, $b): int
    {
        return strcmp($b->username, $a->username);
    }
    protected static function build_sorter_dt($a, $b): int
    {
        if ($a->birthday == $b->birthday) {
            return 0;
        }
        return ($a->birthday < $b->birthday) ? -1 : 1;
    }
    protected static function build_sorter_dt_down($a, $b): int
    {
        if ($b->birthday == $a->birthday) {
            return 0;
        }
        return ($b->birthday == $a->birthday) ? -1 : 1;
    }
    public static function sortByUsername(array $users, bool $type): array
    {
        if ($type == true) {
            usort($users, "self::build_sorter_un");
            return $users;
        } else {
            usort($users, "self::build_sorter_un_down");
            return $users;
        }
    }
    public static function sortByBirthday(array $users, bool $type): array
    {
        if ($type == true) {
            usort($users, "self::build_sorter_dt");
            return $users;
        } else {
            usort($users, "self::build_sorter_dt_down");
            return $users;
        }
    }
}