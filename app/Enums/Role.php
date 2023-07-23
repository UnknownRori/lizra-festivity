<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum Role: string
{
    use EnumToArray;

    case Admin  = "Admin";
    case Editor = "Editor";
    case User = "User";

    public function isAdmin(): bool
    {
        return $this == Role::Admin;
    }

    public function isEditor(): bool
    {
        return $this == Role::Editor;
    }

    public function isUser(): bool
    {
        return $this == Role::User;
    }
}
