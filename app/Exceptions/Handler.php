<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Log;
use Mail;
use App\Mail\ExceptionOccured;
use Illuminate\Http\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */

     public function report(Throwable $exception)
     {
        $this->sendEmail($exception);

        parent::report($exception);
     }

    public function sendEmail(Throwable $exception)
    {
       try {
            $data = [
                'message' => $exception->getMessage(),
                'code' => $exception->getCode(),
                'status_code' => app('Illuminate\Http\Response')->status(),
                'string' => $exception->__toString(),
                'file' => $exception->getFile(),
                'trace' => $exception->getTraceAsString(),
                'url' => request()->fullUrl(),
                'body' => json_encode(request()->all()),
                'ip' => request()->ip(),
            ];
            $userdata = session('userdata');
            if (is_array($userdata) && isset($userdata['username'])) {
                // Add username to $data
                $data['username'] = $userdata['username'];
            }
            // Log::info('User Data:', $userdata);
            if(config('app.env') == 'local'){
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->send(new ExceptionOccured($data));
            }else{
                $email_cc = 'dev8@scube.net.in,tester2@scube.net.in,software@scube.net.in';
                $cc = explode(',', $email_cc);
                // \Mail::mailer('smtp')->to('dev5@scube.net.in')->cc($cc)->send(new ExceptionOccured($data));
            }
        } catch (Throwable $exception) {
            // Log::error($exception);
            logger()->error($exception);
        }
    }
}
