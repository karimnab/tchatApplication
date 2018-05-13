
<div class="page-header">
	
</div>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Content</th>
			<th>Created</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><?php echo $v->content; ?></td>
				<td><?php echo $v->created; ?></td>
				
				<td>
					<a onclick="return confirm('Voulez vous vraiment supprimer ce message'); " href="<?php echo Router::url('auth/posts/delete/'.$v->id); ?>">Supprimer</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>




<a href="<?php echo Router::url('auth/users/index'); ?>" class="primary btn">Retour liste des amis</a>
