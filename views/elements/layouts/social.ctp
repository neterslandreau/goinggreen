<div class="maillist">
	<?php
		echo $this->Form->create(null, array(
				'url' => array('controller' => 'users', 'action' => 'contact', true),
			)
		);
		echo $this->Form->input('email', array(
			'value' => 'Enter email for monthly updates.',
			'onfocus' => "this.value=''",
			'div' => false,
			'label' => false,
			'size' => 25,
		));
		echo $this->Form->end('Go', array(
			'div' => false
		));
	?>
</div>
	<?php
		echo $this->Html->link(
			$this->Html->image('icon-facebook.gif', array('class' => 'social')),
			'http://www.facebook.com/',
			array(
				'escape' => false,
			)
		);
	?>
	<?php
		echo $this->Html->link(
			$this->Html->image('icon-twitter.gif', array('class' => 'social')),
			'http://www.twitter.com/',
			array(
				'escape' => false,
			)
		);
	?>
	<?php
		echo $this->Html->link(
			$this->Html->image('linkedin.png', array('class' => 'social')),
			'http://www.linkedin.com/profile/view?id=116412226&trk=tab_pro',
			array(
				'escape' => false,
			)
		);
	?>
<!--<div class="nobreak"><form><input><input type="submit"></form></div>-->