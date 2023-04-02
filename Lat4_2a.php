<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $alamat;

    function __construct($a,$b,$c)
    {
        $this->nama = $a;
        $this->nim = $b;
        $this->alamat = $c;
        echo "Kelas telah dibuat<br/><br/>";
    }

    function cetak()
    {
        echo $this->nama."<br/>".$this->nim."<br/>".$this->alamat."<br/><br/>";
    }

    function __destruct()
    {
        echo "Kelas telah dihancurkan";
    }
}