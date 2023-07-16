<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum Role: string
{
    use EnumToArray;

    case Admin  = "Admin";
    case Editor = "Editor";

    public function isAdmin(): bool
    {
        return $this == Role::Admin;
    }

    public function isEditor(): bool
    {
        return $this == Role::Editor;
    }
}
