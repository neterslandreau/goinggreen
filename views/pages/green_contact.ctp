<?php
	$this->set('title_for_layout', 'Contact Us');
	echo $this->Form->create(null, array(
		'url' => array(
			'controller' => 'users',
			'action' => 'contact',
		),
		'inputDefaults' => array(
			'size' => 40,
		)
	));
?>
<div class="rightpanel">
	<div id="sectionone">
		<h1>Use this form to contact us</h1><br />
<?php
	echo $this->Form->input('name');
	echo $this->Form->input('phone');
	echo $this->Form->input('email');
	echo $this->Form->input('question', array(
		'type' => 'textarea',
		'before' => 'Question<br />',
		'cols' => 52,
		'label' => false,
	));
	$options = array(
		'label' => 'Submit',
		'value' => '',
	);
?>
	</div>
<?php echo $this->Form->end($options); ?>
</div>
