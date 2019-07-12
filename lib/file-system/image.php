<?php
/**
 * Created by Ahmad.
 * User: uu103087
 * Date: 2019-07-12
 * Time: 17:19
 */

namespace Jsys\FileSystem;


interface Image
{

    public function width(): int;

    public function height(): int;

    public function exif(): string;

}
