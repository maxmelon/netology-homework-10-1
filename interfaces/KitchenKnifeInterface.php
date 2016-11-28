<?php

interface KitchenKnifeInterface extends ThingInterface
{
    public function setSharpness($sharpness);
    public function getColor();
    public function getBrand();
    public function getHandlesMaterial();
}