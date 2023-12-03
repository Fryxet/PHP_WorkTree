<?php
namespace Farfels\work2;

class User
{
    public string $username;
    public string $password;
    public \DateTime $birthday;
    public function __construct($username, $password, $birthday)
    {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = $birthday;
    }
}