<?php
class User extends Model{

	public function findUser($id){
		$sql = 'SELECT * FROM Users WHERE id !='. $id ;
		$pre = $this->db->prepare($sql); 
		$pre->execute(); 
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}


}