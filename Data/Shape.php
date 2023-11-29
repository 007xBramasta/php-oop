<?php

namespace Data;

class Shape
{
    
    public function getCorner()
    {
        return -1;
    }
}

class Retangle extends Shape
{
    public function getCorner()
    {
        return 5;
    }

    public function getParentCorner() //PARENT KEYWOARD MENGAKSES DFUNCTION YANG SUDAH DI OVERIDE
    {
        return parent::getCorner();
    }
}