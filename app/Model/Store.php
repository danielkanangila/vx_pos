<?php

namespace App\Model;

class Store
{
    private $id;
    private $product_id;
    private $warehouse_id;
    private $quantity;
    private $start_serial;
    private $end_serial;
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
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getWarehouseId()
    {
        return $this->warehouse_id;
    }

    /**
     * @param mixed $warehouse_id
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getStartSerial()
    {
        return $this->start_serial;
    }

    /**
     * @param mixed $start_serial
     */
    public function setStartSerial($start_serial)
    {
        $this->start_serial = $start_serial;
    }

    /**
     * @return mixed
     */
    public function getEndSerial()
    {
        return $this->end_serial;
    }

    /**
     * @param mixed $end_serial
     */
    public function setEndSerial($end_serial)
    {
        $this->end_serial = $end_serial;
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
