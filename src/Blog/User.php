<?php
namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Name;


class User {
    private int $id;
    private Name $username;
    private string $login;

    public function __construct(int $id, Name $username, string $login)
    {
        $this->id = $id;
        $this->username = $username;
    }

    public function __toString(): string
    {
        return "Юзер $this->id c именем $this->username и логином $this->login." . PHP_EOL;
    }

};

