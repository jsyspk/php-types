<?php
declare(strict_types=1);

/**

 

 * Time: 17:17
 */

namespace Jsys\FileSystem;

use \ArrayIterator;

class UploadedFiles implements \IteratorAggregate
{
    private $files;

    public function __construct(UploadedFile ...$uploadedFiles)
    {
        $this->files = $uploadedFiles;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->files);
    }
}
