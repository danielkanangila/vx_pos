<?php

namespace App\Model;

class Invoice
{
    private $id;
    private $delivery_id;
    private $sales_invoice_number;
    private $status;
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
    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    /**
     * @param mixed $delivery_id
     */
    public function setDeliveryId($delivery_id)
    {
        $this->delivery_id = $delivery_id;
    }

    /**
     * @return mixed
     */
    public function getSalesInvoiceNumber()
    {
        return $this->sales_invoice_number;
    }

    /**
     * @param mixed $sales_invoice_number
     */
    public function setSalesInvoiceNumber($sales_invoice_number)
    {
        $this->sales_invoice_number = $sales_invoice_number;
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
