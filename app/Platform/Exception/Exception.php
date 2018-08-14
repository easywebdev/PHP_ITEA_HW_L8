<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 20:26
 */

namespace App\Platform\Exception;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

abstract class Exception extends HttpException
{
    public $statusCode = Response::HTTP_CONFLICT;
    public $message = null;

    public function __construct(int $statusCode, string $message = null, \Exception $previous = null, array $headers = array(), ?int $code = 0)
    {
        parent::__construct($this->statusCode, $this->message, $previous, $headers, $code);
    }
    public function debug($exception)
    {
        if($exception instanceof \Exception)
        {

        }
    }
}