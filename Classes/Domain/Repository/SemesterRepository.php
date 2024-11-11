<?php

declare(strict_types=1)

namespace Hda\Studyfinder\Domain\Repository;

use Hda\Studyfinder\Domain\Model\Semester;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Semester>
 */

class SemesterRepository extends Repository
{
	protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
}