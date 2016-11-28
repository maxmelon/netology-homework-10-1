<?php
interface IDEInterface extends ThingInterface
{
    public function __construct();
    public function setVersion($version);
    public function setDiscount($discount);
    public function getDiscount();
    public function getVersion();
}