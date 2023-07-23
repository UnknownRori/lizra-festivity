<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
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
    public function post(LoginRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            return redirect()
                ->route('app.dashboard');
        }

        session()->flash('error', [
            'body' => 'Invalid password or username',
        ]);
    }
}
