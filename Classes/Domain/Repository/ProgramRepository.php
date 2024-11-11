<?php

declare(strict_types=1)

namespace Hda\Studyfinder\Domain\Repository;

use Hda\Studyfinder\Domain\Model\Category;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @extends Repository<Program>
 */

 class ProgramRepository extends Repository
{
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];

	public function findSearchForm(
        SearchFormDto $searchFormDto,
        $constraints = []
    ): QueryResultInterface
    {
	    
	    
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->setOrderings([
            'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        ]);

        if ($searchFormDto) {
            if ($category) {
                $constraints[] = $query->like('category', '%' . $category . '%');
            }
            
            if ($degree) {
                $constraints[] = $query->equals('degree', $degree);
            }        
            
            if ($programtype) {
                $constraints[] = $query->contains('programtypes', $programtype);
            }
            
            if ($targetgroup) {
                $constraints[] = $query->equals('targetgroup', $targetgroup);
            }        
            
            if ($search) {
                $constraints[] = $query->logicalOr(
                    $query->like('title', '%' . $search . '%'),
                    $query->like('comment', '%' . $search . '%')
                );
            }	
        }

		if (count($constraints)) {
		    $query->matching($query->logicalAnd(...array_values($constraints)));
		}
		return $query->execute();
    }
    
    /**
    * Returns all objects of this selected Category.
    *
    * @return QueryResultInterface|array
    */
        
    public function findCategory($cat)
    {
        $query = $this->createQuery();
        $query->like('category', '%' . $cat . '%');
        return $query->execute();
    }
    

    /**
    * Returns all objects of this selected Programtype.
    *
    * @return QueryResultInterface|array
    */
    
    public function findProgramtype($programtype) 
    {
        
        $query = $this->createQuery();
	    $query->matching($query->contains('programtypes', $programtype));
        return $query->execute();
    }
	
    /**
    * Returns all objects of this selected Degree.
    *
    * @return QueryResultInterface|array
    */
    
    public function findDegree($degree){
    	
        $query = $this->createQuery();
	    $query->matching($query->equals('degree',$degree));
        return $query->execute();
    }

    /**
     * Returns all objects matching the given uid no matter their enablefields
     *
     * @param integer $uid
     * @return array An array of objects, empty if no objects found
     */
    public function findAnyByUid($uid) 
    {
        $query = $this->createQuery();
        if (TYPO3_MODE === 'BE') {
            $query->getQuerySettings()->setIgnoreEnableFields(true);
        }
        return $query
            ->matching(
                $query->equals('uid', $uid)
            )
            ->execute()
            ->current();
    }
 
}