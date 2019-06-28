<?php
/**
 * Created by PhpStorm.
 * User: Hussnain Shahid
 * Date: 6/27/2019
 * Time: 1:00 PM
 */

namespace Jsys\Http;

class Method extends \SplEnum
{
    const __default = self::January;
    public const GET = 'GET';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const HEAD = 'HEAD';
    public const DELETE = 'DELETE';
    public const CONNECT = 'CONNECT';
    public const OPTIONS = 'OPTIONS';
    public const TRACE = 'TRACE';
    public const PATCH = 'PATCH';

    public function all(){
        return json_encode([self::GET, self::POST,self::PUT,self::HEAD,self::DELETE,self::CONNECT,self::OPTIONS,self::TRACE,self::PATCH]);
    }
}
