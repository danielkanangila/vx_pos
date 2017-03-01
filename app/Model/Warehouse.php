<?php

namespace App\Model;

class Warehouse
{
    private $id;
    private $name;
    private $wh_Code;
    private $sales_site;
    private $created_at;
    private $updated_at;

    protected $guarded = ['id'];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * @return mixed
     */
    public function getWhCode()
    {
        return $this->wh_Code;
    }

    /**
     * @param mixed $wh_Code
     */
    public function setWhCode($wh_Code)
    {
        $this->wh_Code = $wh_Code;
    }

    /**
     * @return mixed
     */
    public function getSalesSite()
    {
        return $this->sales_site;
    }

    /**
     * @param mixed $sales_site
     */
    public function setSalesSite($sales_site)
    {
        $this->sales_site = $sales_site;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }


}
