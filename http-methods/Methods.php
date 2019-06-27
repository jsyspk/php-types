<?php
/**
 * Created by PhpStorm.
 * User: Hussnain Shahid
 * Date: 6/27/2019
 * Time: 1:00 PM
 */

namespace HTTPMethod;


class Methods
{
    public const GET = 'GET';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const HEAD = 'HEAD';
    public const DELETE = 'DELETE';
    public const CONNECT = 'CONNECT';
    public const OPTIONS = 'OPTION';
    
    public function Methods(){
        $method= [self::GET, self::POST,self::PUT,self::HEAD,self::DELETE,self::CONNECT,self::OPTIONS];
        return json_encode($method);
    }
}
