<div class="page-header">
	<h3>se connecter ou s'inscrire automatiquement </h3>
</div>	
	<form action="<?php echo Router::url('users/login'); ?>" method="post">
		<?php echo $this->Form->input('login','Identifiant'); ?>
		<?php echo $this->Form->input('password','Mot de passe',array('type'=>'password')); ?>
		<div class="actions">
			<input type="submit" class="btn primary" value="Se connecter">
		</div>
	</form>
