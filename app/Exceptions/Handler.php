<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
        ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
        ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Spatie\Permission\Exceptions\UnauthorizedException)
        {
            return response()->json([__('auth.noAccess') ]);
        }
        elseif ($exception instanceof ModelNotFoundException)
        {
            return response()->json(['error' => 'Entry for '.str_replace('App\\', '', $exception->getModel()).' not found'], 404);
        }
        else if ($exception instanceof ApiException)
        {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
        else if ($exception instanceof RequestException)
        {
            return response()->json(['error' => 'External API call failed.'], 500);
        }
        return parent::render($request, $exception);
    }
}