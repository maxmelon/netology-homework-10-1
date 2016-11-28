<?php
interface MovieInterface extends ThingInterface
{
    public function __construct($title);
    public function setDirector($director);
    public function setCountry($country);
    public function setBudget($budget);
    public function setRating($rating);
    public function getDirector();
}