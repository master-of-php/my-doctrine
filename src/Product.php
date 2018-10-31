<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 18.10.18
 * Time: 17:21
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity @Table(name ="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;


    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

