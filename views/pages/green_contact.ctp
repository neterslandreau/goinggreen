<?php
	$this->set('title_for_layout', 'Contact Us');
//	echo $this->Form->create(null, array(
//		'url' => array(
//			'controller' => 'users',
//			'action' => 'contact',
//		),
//		'inputDefaults' => array(
//			'size' => 40,
//		)
//	));
?>
<div class="rightpanel">
	<div id="sectionone">
		<h1>We at the SGG project hope to partner with you to provide a healthier environment for a healthier population.</h1><br />
		<div class="contactus">
<?php
	echo $this->Form->create(null, array(
		'url' => array(
			'controller' => 'users',
			'action' => 'contact',
		),
		'inputDefaults' => array(
			'size' => 40,
		)
	));
	echo $this->Form->input('name', array(
		'before' => 'Name<br />',
		'label' => false,
	));
	echo $this->Form->input('phone', array(
		'before' => 'Phone<br />',
		'label' => false,
	));
	echo $this->Form->input('email', array(
		'before' => 'Email<br />',
		'label' => false,
	));
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
<?php echo $this->Form->end($options); ?>
		</div>
	</div>
</div>
