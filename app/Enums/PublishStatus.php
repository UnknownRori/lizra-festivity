<?php

namespace App\Enums;

use App\Traits\EnumToArray;

enum PublishStatus: string
{
    use EnumToArray;

    case Draft = "Draft";
    case Published = "Published";

    public function isDraft(): bool
    {
        return $this == self::Draft;
    }

    public function isPublished(): bool
    {
        return $this == self::Published;
    }
}
