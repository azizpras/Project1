<?php

class Mahasiswa{
    public $nama;
    protected $nim;

    function __construct(){}

    function setNama($a)
    {
        $this->nama=$a;
    }

    function setNim($b)
    {
        return $this->nama;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getNim()
    {
        return $this->nim;
    }
}
?>