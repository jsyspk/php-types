<?php
declare(strict_types=1);

/**
 * Created by Ahmad.
 * User: uu103087
 * Date: 2019-07-12
 * Time: 18:26
 */

namespace Jsys\FileSystem;


class TempFile extends EveryFile
{

    public function __construct(string $file)
    {
        parent::__construct($file);
    }
}
