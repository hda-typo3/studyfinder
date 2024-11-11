<?php

declare(strict_types=1);

namespace Hda\Studyfinder\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Programtype extends extends AbstractEntity
{

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
