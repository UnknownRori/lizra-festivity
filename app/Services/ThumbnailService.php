<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ThumbnailService
{
    const DEFAULT_PATH = 'public/thumbnail';

    public function save(UploadedFile $file): string|bool
    {
        return $file->store(self::DEFAULT_PATH);
    }

    public function delete(string $filepath): bool
    {
        return Storage::delete($filepath);
    }
}
