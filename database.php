<?php
class database {
	public $server="localhost";
	public $user="root";
	public $pass="";
	public $db="database_perpustakaan";
	public $table;
	public $conn;
	public $data;
	public $db_value;
	public $filled;
	public function __construct(){
		$this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
}
public function save(){
    $bd = count($this->data);
    $db_values = [];
    for ($i = 0; $i < $bd; $i++) {
        $db_values[] = "'" . $this->data[$i] . "'";
    }
    $this->db_value = implode(',', $db_values);
    $query = "INSERT INTO $this->table values (" . $this->db_value . ")";
    mysqli_query($this->conn, $query);
    return mysqli_affected_rows($this->conn);
}


public function getdata(){
	$query="SELECT*FROM $this->table";
	$result = mysqli_query($this->conn,$query);
	$rows=[];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
	}
	public function getDataById($id){

		$query="SELECT*FROM $this->table where ".$this->filled[0]."='$id'";
		$result = mysqli_query($this->conn,$query);
		$rows=[];
		while ( $row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;		
	}


public function delete($id){
	mysqli_query($this->conn,"DELETE from $this->table where ". $this->filled[0]."='$id'");
	return mysqli_affected_rows($this->conn);
}
public function getdataSingle($id){
	$query="SELECT*FROM $this->table where ".$this->filled[0]."='$id'";
	$result = mysqli_query($this->conn,$query);
	$rows=mysqli_fetch_assoc($result);
	return $rows;
	}
	public function update(){
		$bd = count($this->data);
		$updateValues = [];
	
		for ($i = 0; $i < $bd; $i++) {
			$updateValues[] = $this->filled[$i] . "='" . $this->data[$i] . "'";
		}
	
		$this->db_value = implode(',', $updateValues);
	
		$query = "UPDATE $this->table SET $this->db_value WHERE " . $this->filled[0] . "='" . $this->data[0] . "'";
	
		mysqli_query($this->conn, $query);
		return mysqli_affected_rows($this->conn);
	}
	public function cari($keyword) {
		$conditions = [];
		foreach ($this->filled as $field) {
			$conditions[] = "$field LIKE '%$keyword%'";
		}
		$this->db_value = implode(' OR ', $conditions);
	
		$query = "SELECT * FROM $this->table WHERE $this->db_value";
		$result = mysqli_query($this->conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
}

?>