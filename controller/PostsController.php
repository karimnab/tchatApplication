<?php 
class PostsController extends Controller{
	
	



/**
	* send message
	**/
	function auth_edit($id = null){

		$this->loadModel('Post'); 

		$d['id'] = $id; 
		
		if($this->request->data){
			
			if($this->request->data){
				$idLoggedUser = $this->Session->loggedUser();

				$this->request->data->created = date("Y-m-d H:i:s");
				$this->request->data->receiver_id = $id;
				$this->request->data->sender_id = $idLoggedUser;

				$this->Post->save($this->request->data);


				 
				$this->redirect('auth/posts/archiv/'.$id); 
				


			}else{
				$this->Session->setFlash('Merci de saisir votre message','error'); 
			}
			
		}else{
			$this->request->data = $this->Post->findFirst(array(
				'conditions' => array('id'=>$id)
			));
		}
		
	
		$this->set($d);
	}

		/**
	* Liste les différents messages
	**/
	function auth_archiv($id){
		$idSender = $this->Session->loggedUser();
		$idReceiver = $id;	
				
		$this->loadModel('Post');
		$d['posts'] = $this->Post->findPost($idSender,$idReceiver);

		$this->set($d);
	}



	/**
	* Permet de supprimer un message
	**/
	function auth_delete($id){
		$this->loadModel('Post');
		$this->Post->delete($id);
		$this->Session->setFlash('Le message a bien été supprimé'); 
		$this->redirect('auth/users/index'); 
	}

	

}