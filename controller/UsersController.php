<?php 
class UsersController extends Controller{
	
	/**
	* Login
	**/
	function login(){
		if($this->request->data){
			$data = $this->request->data;
			$data->password = sha1($data->password); 
			$this->loadModel('User'); 
			$user = $this->User->findFirst(array(
				'conditions' => array('login' => $data->login,'password' => $data->password
			)));
			if(!empty($user)){
				$this->Session->write('User',$user); 
			}else{
				$this->loadModel('User'); 
				$this->request->data->role = 'auth';
				$id = $this->User->save($this->request->data);
				$user = $this->User->findFirst(array(
				'conditions' => array('id' => $id)));
				$this->Session->write('User',$user); 
			}
			$this->request->data->password = ''; 
		}
		if($this->Session->isLogged()){
			if($this->Session->user('role') == 'auth'){
				$this->redirect('chat');
			}else{
				$this->redirect('');
			}
		}
	}

	/**
	* Liste les différents Users
	**/
	function auth_index(){
		$this->loadModel('User');
		$idLoggedUser = $this->Session->loggedUser();
		 
		$d['users'] = $this->User->findUser($idLoggedUser);

		$this->set($d);
	}


	/**
	* Logout
	**/
	function logout(){
		unset($_SESSION['User']);
		$this->Session->setFlash('Vous ête mainenant déconnecté'); 
		$this->redirect('/'); 
	}

}