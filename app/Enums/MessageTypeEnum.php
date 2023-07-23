<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum MessageTypeEnum: string
{
    use EnumToArray;

    case Error = "Error";
    case Warning = "Warning";
    case Info = "Info";
}
