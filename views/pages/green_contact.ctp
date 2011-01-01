<?php
	$this->set('title_for_layout', 'Contact Us');
	echo $this->Form->create(null, array(
		'url' => array(
			'controller' => 'users',
			'action' => 'contact',
		),
	));
	echo $this->Form->input('name', array(
		'class' => 'block',
		'size' => 62,
	));
	echo $this->Form->input('email', array(
		'class' => 'block',
		'size' => 62,
	));
	echo $this->Form->input('phone', array(
		'class' => 'block',
		'size' => 62,
	));
	echo $this->Form->input('question', array(
		'type' => 'textarea',
		'before' => 'Question<br />',
		'label' => '',
		'cols' => 80,
	));
	$options = array(
		'label' => 'Submit',
		'value' => '',
		'div' => array(
			'class' => 'block',
		)
	);
	echo $this->Form->end($options);
?>
