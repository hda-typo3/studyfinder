<?php

declare(strict_types=1)

namespace Hda\Studyfinder\Domain\Repository;

use Hda\Studyfinder\Domain\Model\Category;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Category>
 */

class CategoryRepository extends Repository
{
	protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
}