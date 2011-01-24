<?php
//	echo $this->Form->create(null, array('class' => 'inline'));
//	echo $this->Form->input('email', array('label' => 'Sign up for our mailing list ', 'class' => 'inline'));
//	echo $this->Form->end('Go', array('class' => 'inline'));
?>
<?php
    echo $this->Html->link(
		$this->Html->image('maillist.png'),
		'/',
		array('escape' => false)
	);