<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ThumbnailService
{
    const DEFAULT_PATH = 'thumbnail';
    const VISIBILITY = 'public';

    public function save(UploadedFile $file): string|bool
    {
        $defaultpath = self::DEFAULT_PATH;

        $path = "{$defaultpath}";
        return Storage::putFile($path, $file, self::VISIBILITY);
    }
}
