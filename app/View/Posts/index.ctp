<h1>Blog Fisrt in CakePHP</h1>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Action</th>
		<th>Created</th>
	</tr>
	<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id'];?></td>
		<td><?php echo $this->html->link($post['Post']['title'],array('controller'=>'posts','action'=>'view',$post['Post']['id']));?></td>
		<td><?php echo $this->form->postLink('Hapus', 
				array('action'=>'hapus', $post['Post']['id']), 
				array('class'=>'btn btn-mini btn-danger','confirm'=>'Kamu yakin?'));?>
			<?php echo $this->html->link('Edit', array('action'=>'edit',$post['Post']['id']), array('class'=>'btn btn-mini btn-info'));?></td>
		<td><?php echo $post['Post']['created'];?></td>
	</tr>
	<?php endforeach;?>
	<?php unset($post);?>
</table>