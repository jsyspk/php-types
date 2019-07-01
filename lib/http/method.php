<?php
declare(strict_types = 1);

namespace Jsys\Http;
use \SplEnum;

class Method extends SplEnum
{
    public const __default = self::GET;

    public const GET = 'GET';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const HEAD = 'HEAD';
    public const DELETE = 'DELETE';
    public const CONNECT = 'CONNECT';
    public const OPTIONS = 'OPTIONS';
    public const TRACE = 'TRACE';
    public const PATCH = 'PATCH';
}
