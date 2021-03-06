<?php

class KitchenKnife extends Thing implements KitchenKnifeInterface
{
    protected $color;
    protected $brand;
    protected $handlesMaterial;

    protected $sharpness = 'extra sharp';

    public function __construct($color, $brand, $handlesMaterial, $price)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->handlesMaterial = $handlesMaterial;
        $this->price = $price;
    }

    /**
     * @param mixed $sharpness
     */
    public function setSharpness($sharpness)
    {
        $this->sharpness = $sharpness;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getHandlesMaterial()
    {
        return $this->handlesMaterial;
    }
}