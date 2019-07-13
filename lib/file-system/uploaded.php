<?php
/**

 

 * Time: 17:28
 */

namespace Jsys\FileSystem;


interface Uploaded
{
    public function tempName(): string;

    public function originalName(): string;

    public function size(): int;

}
