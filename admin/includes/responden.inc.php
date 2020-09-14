<?php
class responden{
	
	private $conn;
	private $table_name = "responden";
	
	public $id;
	public $kt;
	public $jm;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,'')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kt);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY nik ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE nik=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['nik'];
		$this->nm = $row['nama'];
		$this->almt = $row['alamat'];
		$this->jk = $row['jenis_kelamin'];
		$this->pkjn = $row['pekerjaan'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama = :nm,
					alamat = :almt,
					jenis_kelamin = :jk,
					pekerjaan = :pkjn

				WHERE
					nik = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nm', $this->nm);
			$stmt->bindParam(':almt', $this->almt);
				$stmt->bindParam(':jk', $this->jk);
					$stmt->bindParam(':pkjn', $this->pkjn);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE nik = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>