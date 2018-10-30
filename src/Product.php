<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 18.10.18
 * Time: 17:21
 */

/**
 * @Entity @Tablename(name ="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * @Column(type="string")
     **/
    protected $name;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

