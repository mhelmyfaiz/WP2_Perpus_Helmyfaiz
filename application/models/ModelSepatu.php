<?php
class ModelSepatu extends CI_Model
{
    public $merk, $Harga;

    public function getHarga($merk=null)
    {
        $this->merk=$merk;
        if($this->merk == "Nike")
            {$this->Harga=375000;}
        elseif($this->merk == "Adidas")
            {$this->Harga=300000;}
        elseif($this->merk == "Eiger")
            {$this->Harga=250000;}
        elseif($this->merk == "Kickers")
            {$this->Harga=275000;}
        elseif($this->merk == "Bucherri")
            {$this->Harga=400000;}

    return $this->Harga;
    }
}