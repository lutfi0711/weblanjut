<?php
  class Manusia1
  {
  	public $nama = "malas Ngoding";

  	public function nama(){
  		return "Nama Saya ".$this->nama;
  	}
  	public function tampilkan_nama(){
  		return $this->nama();
  	}
  }

  $manusia = new Manusia1();
  echo "func tampilkan_nama : ".$manusia->tampilkan_nama()."<br />";
  echo "func nama 			: ".$manusia->nama()."<br />";
  echo "object nama         : ".$manusia->nama;
  ?>