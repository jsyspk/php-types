<?php
/**
 * Created by Ahmad.
 * User: uu103087
 * Date: 2019-07-12
 * Time: 17:28
 */

namespace Jsys\FileSystem;


interface Uploaded
{
    public function tempName(): string;

    public function originalName(): string;

    public function size(): int;

}
