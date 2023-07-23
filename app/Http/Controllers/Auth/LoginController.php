<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Enums\MessageTypeEnum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function view(Request $request): Response
    {
        return inertia('LoginPage');
    }

    /**
     * Handle the incoming request.
     */
    public function post(LoginRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            return redirect()
                ->route('app.dashboard');
        }

        return redirect()
            ->route('auth.view')
            ->with('message', [
                'type' => MessageTypeEnum::Error,
                'body' => 'Invalid password or username',
            ]);
    }
}
