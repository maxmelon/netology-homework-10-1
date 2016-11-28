<?php

interface MugInterface extends ThingInterface
{
    public function __construct($color, $volume, $price, $material, $owner);
    public function setOwner($owner);
    public function getMaterial();
    public function getOwner();
}