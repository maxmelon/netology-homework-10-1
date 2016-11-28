<?php

interface ThingInterface
{
    public function setName($name);
    public function setPrice($price);
    public function getName();
    public function getPrice();
}