<?php
	$this->set('title_for_layout', 'Contact Us');
	echo $this->Form->create(null, array(
		'url' => array(
			'controller' => 'users',
			'action' => 'contact',
		),
	));
	echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->input('phone');
	echo $this->Form->input('question', array(
		'type' => 'textarea',
	));
	echo $this->Form->end('Submit');
?>
This page would include the standard contact information  gathering format.
