<?php  
class Manusia{
	public $nama_saya;
	function berinama($saya){
		$this->nama_saya=$saya;
	}
}

class Teman extends Manusia{
	public $nama_teman;
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
}

$malasngoding = new teman;
$malasngoding->berinama(' MALAS NGODING ');
$malasngoding->berinamateman(" Diki ");
echo "Nama Saya :".$malasngoding->nama_saya."<br />";
echo "Nama Teman Saya:".$malasngoding->nama_teman;
?>