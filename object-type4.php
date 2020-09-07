<?php
class sepatu{
public $namaBarang,
	   $merk, 
	   $harga;

public function getCetak(){
	return "$this->namaBarang, $this->merk,( Rp $this->harga)";
}
public function __construct($namaBarang="nama Barang",$merk="merk",$harga=0){
	$this->namaBarang = $namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
 		}
}

	class cetakInfosepatu{
		public function cetakInfo($sepatu){
			$str="{$sepatu->namaBarang} , {$sepatu->getCetak()}";
			return$str;
		}
	}
$sepatu1 = new sepatu("Sepatu", "Air Jordan", 685000);
$sepatu2 = new sepatu("Sepatu", "Converse", 550000);
$sepatu3 = new sepatu("Sepatu", "Nike", 375000);
$sepatu4 = new sepatu("Sepatu", "Adidas", 259000);
$infoSepatu = new cetakInfosepatu();

echo "Nama Sepatu : " . $sepatu1->getCetak();
echo "<br>";
echo "Nama Sepatu : " .$sepatu2->getCetak();
echo "<br>";
echo "Nama Sepatu : " .$sepatu3->getCetak();
echo "<br>";
echo "Nama Sepatu : " .$sepatu4->getCetak();
echo "<br>";
echo $infoSepatu->cetakInfo($sepatu1);
?>