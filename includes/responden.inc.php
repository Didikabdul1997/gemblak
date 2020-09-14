<?php
class responden{
	
	private $conn;
	private $table_name = "responden";
	

		public $id;
	public $nik;
	public $nama;
	public $alamat;
	public $hk;
	public $harapan;
	public $jk;
public $pekerjaan;

	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,?,?,?,'','')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nik);
		$stmt->bindParam(2, $this->nama);
		$stmt->bindParam(3, $this->alamat);
		$stmt->bindParam(4, $this->jk);
		$stmt->bindParam(5, $this->pekerjaan);
		
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	function readKhusus(){

		$query = "SELECT count(hasil_akhir) as hasil FROM responden order by nik asc";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
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
		$this->al = $row['alamat'];
	

	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					harapan = :harapan
				WHERE
					nik = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':harapan', $this->harapan);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	function hasil(){

		$query = "UPDATE 
					responden
				SET 
					hasil_kuisioner = :has
				WHERE
					nik = :nik";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':has', $this->has);
		$stmt->bindParam(':nik', $this->nik);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
		function hasilakhir(){

		$query = "UPDATE 
					responden
				SET 
					hasil_akhir = :has
				WHERE
					nik = :nik";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':has', $this->has);
		$stmt->bindParam(':nik', $this->nik);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif = ?";
		
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