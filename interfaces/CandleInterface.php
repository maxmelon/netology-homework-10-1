<?php
interface CandleInterface extends ThingInterface
{
    public function setBrand($brand);
    public function setForm($form);
    public function setColor($color);
    public function getColor();
    public function getForm();
}