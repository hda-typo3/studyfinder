<?php

declare(strict_types=1);

namespace Hda\Studyfinder\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Program extends AbstractEntity
{

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $title = '';
    
    /** @var int */
    protected $language = 0;

    /** @var int */
    protected $nc = 0;

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $prePracticalTraining = '';

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $additionalAdminissionRequirements = '';

    /** @var bool */
    protected $consecutive = false;

    /** @var bool */
    protected $discontinued = false;

    /** @var int */
    protected $startyear = 0;

    /** @var int */
    protected $location = 0;

    /** @var int */
    protected $department = 0;

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $comment = '';
    
    /** @var bool */
    protected $dual = false;

    
    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Studyfinder\Domain\Model\Semester> */
    #[Lazy]
    protected $semester = null;

    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Studyfinder\Domain\Model\Category> */
    #[Lazy]
    protected $category = null;

    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Studyfinder\Domain\Model\Degree> */
    #[Lazy]
    protected $degree = null;

    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Studyfinder\Domain\Model\Targetgroup> */
    #[Lazy]
    protected $targetgroup = null;
    
    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Studyfinder\Domain\Model\Programtype> */
    #[Lazy]
    protected $programtype = null;

    /**
     * __construct
     */
    public function __construct()
    {
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->semester = new ObjectStorage();
        $this->category = new ObjectStorage();
        $this->degree = new ObjectStorage();
        $this->targetgroup = new ObjectStorage();
        $this->programtype = new ObjectStorage();
    }
    
    
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * get language
     */
    public function getLanguage(): int
    {
        return $this->language;
    }

    /**
     * Set $language language
     */
    public function setLanguage($language): void
    {
        $this->language = $language;
    }

    /**
     * get nc
     */
    public function getNc(): int
    {
        return $this->nc;
    }

    /**
     * @param int $nc nc
     */
    public function setNc($nc):void
    {
        $this->nc = $nc;
    }

    /**
     * getg prePracticalTraining
     */
    public function getPrePracticalTraining(): string
    {
        return $this->prePracticalTraining;
    }

    /**
     * @param string $prePracticalTraining prePracticalTraining
     */
    public function setPrePracticalTraining(string $prePracticalTraining): void
    {
        $this->prePracticalTraining = $prePracticalTraining;
    }

    /**
     * get additionalAdminissionRequirements
     */
    public function getAdditionalAdminissionRequirements(): string
    {
        return $this->additionalAdminissionRequirements;
    }

    /**
     * @param string $additionalAdminissionRequirements additionalAdminissionRequirements
     */
    public function setAdditionalAdminissionRequirements(string $additionalAdminissionRequirements): void
    {
        $this->additionalAdminissionRequirements = $additionalAdminissionRequirements;
    }

    /**
     * get consecutive flag
     */
    public function getConsecutive():bool
    {
        return $this->consecutive;
    }

    /**
     * @param bool $consecutive consecutive flag
     */
    public function setConsecutive(bool $consecutive): void
    {
        $this->consecutive = $consecutive;
    }

    /**
     * get dual flag
     */
    public function getDual():bool
    {
        return $this->dual;
    }

    /**
     * @param bool $dual flag
     */
    public function setDual(bool $dual): void
    {
        $this->dual = $dual;
    }
  
    /**
     * get discontinued flag
     */
    public function getDiscontinued(): bool
    {
        return $this->discontinued;
    }

    /**
     * @param bool $discontinued flag
     */
    public function setDiscontinued(bool $discontinued): void
    {
        $this->discontinued = $discontinued;
    }

    /**
     * get startyear
     */
    public function getStartyear(): int
    {
        return $this->startyear;
    }

    /**
     * @param int $startyear startyear
     */
    public function setStartyear(int $startyear): void
    {
        $this->startyear = $startyear;
    }

    /**
     * get location
     */
    public function getLocation(): int
    {
        return $this->location;
    }

    /**
     * @param int $location location
     * @return void
     */
    public function setLocation(int $location): void
    {
        $this->location = $location;
    }

    /**
     * get department
     */
    public function getDepartment(): int
    {
        return $this->department;
    }

    /**
     * @param int $department
     */
    public function setDepartment(int $department): void
    {
        $this->department = $department;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * Get semester
     * 
     * @return ObjectStorage<semester>|null
     */
    public function getSemester(): ?ObjectStorage
    {
        return $this->semester;
    }

    /**
     * Set semester
     *
     * @param ObjectStorage $semester semester
     */
    public function setSemester($semester): void
    {
        $this->semester = $semester;
    }

    /**
     * Get category
     * 
     * @return ObjectStorage<category>|null
     */
    public function getCategory(): ?ObjectStorage
    {
        return $this->category;
    }

    /**
     * Set category
     *
     * @param ObjectStorage $category category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * Get programtype
     * 
     * @return ObjectStorage<programtype>|null
     */
    public function getProgramtype(): ?ObjectStorage
    {
        return $this->programtype;
    }

    /**
     * Set programtype
     *
     * @param ObjectStorage $programtype programtype
     */
    public function setProgramtype($programtype): void
    {
        $this->programtype = $programtype;
    }

    /**
     * Get degree
     * 
     *  @return ObjectStorage<degree>|null
     */
    public function getDegree(): ?ObjectStorage
    {
        return $this->degree;
    }

    /**
     * Set degree
     *
     * @param ObjectStorage $degree degree
     */
    public function setDegree($degree): void
    {
        $this->degree = $degree;
    }

    /**
     * Get targetgroup
     * 
     *  @return ObjectStorage<targetgroup>|null
     */
    public function getTargetgroup(): ?ObjectStorage
    {
        return $this->targetgroup;
    }
    /**
     * Set targetgroup
     *
     * @param ObjectStorage $targetgroup targetgroup
     */
    public function setTargetgroup($targetgroup): void
    {
        $this->targetgroup = $targetgroup;
    }
}
