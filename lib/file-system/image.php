<?php
/**

 

 * Time: 17:19
 */

namespace Jsys\FileSystem;


interface Image
{

    public function width(): int;

    public function height(): int;

    public function exif(): string;

}
