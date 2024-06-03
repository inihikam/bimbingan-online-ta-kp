<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Spatie\Permission\Exceptions\UnauthorizedException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof UnauthorizedException) {
            $user = auth()->user();

            if ($user->hasRole('mahasiswa')) {
                return redirect()->route('mahasiswa-dashboard');
            } elseif ($user->hasRole('dosen')) {
                return redirect()->route('dosen-dashboard');
            } elseif ($user->hasRole('koordinator')) {
                return redirect()->route('koor-dashboard');
            } elseif ($user->hasRole('administrator')) {
                return redirect()->route('admin-dashboard');
            }

            auth()->logout();
            return redirect('/login')->withErrors(['email' => 'Unauthorized access.']);
        }

        return parent::render($request, $exception);
    }
}
