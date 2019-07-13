<?php
/**

 

 * Time: 17:08
 */

namespace Jsys\FileSystem;


interface File
{

    public function dir(): string;

    public function name(): string;

    public function fullPath(): string;

    public function size(): int;

    public function extension(): string;

    public function mime(): string;

}
