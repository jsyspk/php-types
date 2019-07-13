<?php
declare(strict_types=1);

/**

 

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
