<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 22.10.18
 * Time: 13:27
 */

use Doctrine\ORM\Mapping;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="BugRepository") @Table(name="bugs")
 */
class Bug
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $description;

    /**
     * @var DateTime
     * @Column(type="datetime")
     */
    protected $created;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $status;

    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     */
    protected $engineer;
    /**
     * @ManyToOne(targetEntity="User", inversedBy="reportedBugs")
     */
    protected $reporter;
    /**
     * @ManyToMany(targetEntity="Product")
     */
    protected $products = null;

    /**
     * Bug constructor.
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function assignToProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * @return ArrayCollection|null
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getEngineer()
    {
        return $this->engineer;
    }

    /**
     * @param mixed $engineer
     */
    public function setEngineer(User $engineer)
    {
        $engineer->assignedToBug($this);
        $this->engineer = $engineer;
    }

    /**
     * @return mixed
     */
    public function getReporter(User $reporter)
    {
        $reporter->addReportedBug($this);
        return $this->reporter;
    }

    /**
     * @param mixed $reporter
     */
    public function setReporter($reporter)
    {
        $this->reporter = $reporter;
    }

}