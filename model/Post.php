<?php
class Post extends Model{

	var $validate = array(
		'contenu' => array(
			'rule' => 'notEmpty',
			'message' => 'ecrivez un message'
		)
	);


	public function findPost($idSender,$idReceiver){
		$sql = 'SELECT * FROM Posts WHERE sender_id ='. $idSender .' AND receiver_id = '. $idReceiver;

		$pre = $this->db->prepare($sql); 
		$pre->execute(); 
		return $pre->fetchAll(PDO::FETCH_OBJ);
	}

}