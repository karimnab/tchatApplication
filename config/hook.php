<?php
if($this->request->prefix == 'auth'){
	$this->layout = 'auth'; 
	if(!$this->Session->isLogged() || $this->Session->user('role') != 'auth'){
		$this->redirect('users/login'); 
	}
}
?>