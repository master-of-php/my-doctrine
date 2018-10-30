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
    protected $products;
    /**
     * @Id @Column(type="integer") @GeneratedValue()
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
     * @Mapping\Column(type="datetime")
     */
    protected $created;

    /**
     * @var string
     * @Mapping\Column(type="string")
     */
    protected $status;

    /**
     * Bug constructor.
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
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
}