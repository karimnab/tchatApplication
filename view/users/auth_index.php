<div class="page-header">
	
</div>
<h3>Listes des amis</h3>
<table border="1">

	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th colspan="2">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $k => $v): ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				
				<td><?php echo $v->login; ?></td>
				
				<td>
					<a href="<?php echo Router::url('auth/posts/edit/'.$v->id); ?>">Chat</a>
				</td>
				<td>
					<a href="<?php echo Router::url('auth/posts/archiv/'.$v->id); ?>">archiv</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
