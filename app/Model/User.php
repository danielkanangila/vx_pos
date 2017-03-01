<?php

namespace App\Model;

class User
{
    private $id;
    private $sales_site_id;
    private $name;
    private $email;
    private $password;
    private $remember_token;
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
    public function getSalesSiteId()
    {
        return $this->sales_site_id;
    }

    /**
     * @param mixed $sales_site_id
     */
    public function setSalesSiteId($sales_site_id)
    {
        $this->sales_site_id = $sales_site_id;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * @param mixed $remember_token
     */
    public function setRememberToken($remember_token)
    {
        $this->remember_token = $remember_token;
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
