<?php

class User_model
{
    private $nama = 'Fakur';
    public function getUser()
    {
        $nama = $this->nama;
        return $nama; 
    }
}
