<?php
	class database{
		var $host 	= "localhost";
		var $uname	= "root";
		var $pass	= "";
		var $db 	= "sukangoding";
		var $conn;

		function __construct(){
			$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);

			//cek koneksi
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: ". mysqli_connect_error();
			} else
				echo "koneksi berhasil";
		}

    	function tampil_data(){
        	$data = mysqli_query($this->conn,"select * from user");
        	while($d = mysqli_fetch_array($data)){
            	$hasil[] = $d;
        	}
        	return $hasil;
    	}

    	function input($nama,$alamat,$usia){
    		mysqli_query($this->conn,"insert into user values('','$nama','alamat','usia')");
    	}
    	function hapus($id){
    		mysqli_query($this->conn,"delete from user where id='$id'");
    	}
	}
//$db = new database;