<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Enums\MessageTypeEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()
            ->route('auth.view')
            ->with('message', [
                'type' => MessageTypeEnum::Info,
                'body' => 'Logout Success',
            ]);
    }
}
