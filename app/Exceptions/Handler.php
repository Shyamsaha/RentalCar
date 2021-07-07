<?php

namespace App\Exceptions;

use Throwable;
use PayPal\Exception\PayPalConnectionException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Redirect;
use Input;
use Session;

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
        //check the specific exception
        if ($exception instanceof PayPalConnectionException) {
            //return with errors and with at the form data
            Session::flash('message',__('messages.error_in_paypal')); 
        Session::flash('alert-class', 'alert-danger');
            return Redirect::back();
        } 

        return parent::render($request, $exception);
    } 
    
    
}
