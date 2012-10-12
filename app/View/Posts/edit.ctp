<h1>Edit Post</h1>
<?php
	echo $this->form->create('Post',array('action'=>'edit'));
	echo $this->form->input('title');
	echo $this->form->input('body',array('rows'=>'3'));
	echo $this->form->input('id',array('type'=>'hidden'));
	echo $this->form->end('Simpan Post');
	echo $this->html->link('Kembali', array('action'=>'index'),array('class'=>'btn'));
?>	