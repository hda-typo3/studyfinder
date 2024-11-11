<?php

declare(strict_types=1);

namespace Hda\Studyfinder\Controller;

use Hda\Studyfinder\Domain\Model\Program;
use Hda\Studyfinder\Domain\Model\Dto\SearchFormDto;
use Hda\Studyfinder\Domain\Repository\ProgramRepository;
use Hda\Studyfinder\Domain\Repository\DegreeRepository;
use Hda\Studyfinder\Domain\Repository\SemesterRepository;
use Hda\Studyfinder\Domain\Repository\TargetgroupRepository;
use Hda\Studyfinder\Domain\Repository\ProgramtypeRepository;
use Hda\Studyfinder\Domain\Repository\CategoryRepository;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\SlidingWindowPagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;

use TYPO3\CMS\Core\Utility\GeneralUtility;

namespace Hda\Studyfinder\Controller;

class StudyfinderController extends ActionController
{

    protected ProgramRepository $programRepository;
    protected DegreeRepository $degreeRepository; 
    protected SemesterRepository $semesterRepository;
    protected TargetgroupRepository $targetgroupRepository; 
    protected ProgramtypeRepository $programtypeRepository;
    protected CategoryRepository $categoryRepository; 

    public function __construct(
        ProgramRepository $programRepository,
        DegreeRepository $degreeRepository,
        SemesterRepository $semesterRepository,
        TargetgroupRepository $targetgroupRepository,
        ProgramtypeRepository $programtypeRepository,
        CategoryRepository $categoryRepository
    ){
        $this->programRepository = $programRepository;
        $this->degreeRepository = $degreeRepository;
        $this->semesterRepository = $semesterRepository;
        $this->targetgroupRepository = $targetgroupRepository;
        $this->programtypeRepository = $programtypeRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action category list
     *
     * @return void
     */
    public function categoryAction()
    {
        $cat = $this->settings["category"];
        $target = $this->settings["target"];
        if ($cat){
            $categorys = $this->programRepository->findCategory($cat,$target);
            $this->view->assign('categorys', $categorys);
        }
    }
    
    /**
     * action programtype list
     *
     * @return void
     */
    public function programtypeAction()
    {
        $programtype = $this->settings['programtype'];
        $target = $this->settings['target'];
        if ($programtype) {
            $programs = $this->programRepository->findProgramtype($programtype, $target);
            $this->view->assign('programs', $programs);
        }
    }
     
    /**
     * action degree list
     *
     * @return void
     */ 
    public function degreeAction()
    {
        $degree = $this->settings["degree"];
        $target = $this->settings["target"];
        if ($degree){
            $degrees = $this->programRepository->findDegree($degree,$target);
            $this->view->assign('degrees', $degrees);
        }
    }
    
   /**
     * action all
     *
     * @return void
     */
    public function allAction(): ResponseInterface
    {
        $se = $this->settings["search"];
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($se);
               
        if ($se > '0') {

            /*
            $arguments = $this->request->getArguments();
            $noTitle = \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('tx_hdaacademicprogram_domain_model_program.search.choose','HdaAcademicprogram');
            
            $categories =  $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\ObjectStorage');
            $noCategory = $this->objectManager->get('Hda\HdaAcademicprogram\Domain\Model\Category');
            $noCategory->setTitle($noTitle);
            $categories->attach($noCategory);
            foreach ($this->categoryRepository->findAll() as $category) {
                $categories->attach($category);
            }
            
            $degrees =  $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\ObjectStorage');
            $noDegree = $this->objectManager->get('Hda\HdaAcademicprogram\Domain\Model\Degree');
            $noDegree->setTitle($noTitle);
            $degrees->attach($noDegree);
            foreach ($this->degreeRepository->findAll() as $degree) {
                $degrees->attach($degree);
            }
            
            $targetgroups =  $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\ObjectStorage');
            $noTargetgroup = $this->objectManager->get('Hda\HdaAcademicprogram\Domain\Model\Targetgroup');
            $noTargetgroup->setTitle($noTitle);
            $targetgroups->attach($noTargetgroup);
            foreach ($this->targetgroupRepository->findAll() as $targetgroup) {
                $targetgroups->attach($targetgroup);
            }
            
            $programtypes =  $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\ObjectStorage');
            $noProgramtype = $this->objectManager->get('Hda\HdaAcademicprogram\Domain\Model\Programtype');
            $noProgramtype->setTitle($noTitle);
            $programtypes->attach($noProgramtype);
            foreach ($this->programtypeRepository->findAll() as $programtype) {
                $programtypes->attach($programtype);
            }
    
            // orderDirection flipping
            if (!isset($arguments['orderDirection'])) {
                $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING;
            } else {
                if ($arguments['orderDirection'] == \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING) {
                    $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING;
                } else {
                    $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING;
                }
            }
            */


            $programs = $this->programRepository->findSearchForm(
                $arguments['search'], 
                $arguments['category'], 
                $arguments['degree'], 
                $arguments['targetgroup'],
                $arguments['programtype'], 
                (isset($arguments['orderField'])) ? $arguments['orderField'] : 'title',
                $arguments['orderDirection']
            );
		
            
            $this->view->assign('programs', $programs);
            $this->view->assign('degrees', $degrees);
            $this->view->assign('categories', $categories);
            $this->view->assign('programtypes', $programtypes);
            $this->view->assign('targetgroups', $targetgroups);
            $this->view->assign('arguments', $arguments);	
        }
        else {
            
            // orderDirection flipping
            if (!isset($arguments['orderDirection'])) {
                $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING;
            } else {
                if ($arguments['orderDirection'] == \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING) {
                    $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING;
                } else {
                    $arguments['orderDirection'] = \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING;
                }
            }
    
            $programs = $this->programRepository->findSearchForm(
                $arguments['search'], 
                $arguments['category'], 
                $arguments['degree'], 
                $arguments['programtype'], 
                $arguments['targetgroup'],
                (isset($arguments['orderField'])) ? $arguments['orderField'] : 'title',
                $arguments['orderDirection']
            );
            
            $this->view->assignMultiple([
                'programs' =>  $programs,
                'degrees' =>  $degrees,
                'targetgroups' =>  $targetgroups,
                'categories' =>  $categories,
                'programtypes' =>  $programtypes,
                'arguments' =>  $arguments, 
            ]);     
        }

        return $this->htmlResponse();
    }
  
    /**
     * action show single
     * @return void
     */ 
    public function showAction(): ResponseInterface
    {
        $program = (int)$this->settings['program'];
        if ($program) {
            $program = $this->programRepository->findByUid($program);
            $this->view->assign('program',$program);
        }
        return $this->htmlResponse();
    }

}