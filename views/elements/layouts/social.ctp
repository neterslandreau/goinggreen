<div class="maillist">
	<?php
		echo $this->Form->create(null, array(
				'url' => array('plugin' => false, 'controller' => 'app', 'action' => 'contact', true),
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
			'http://www.linkedin.com/pub/jarvis-%22jj%22-jones/32/ba0/22a',
			array(
				'escape' => false,
				'target' => '_blank',
			)
		);
	?>
<!--<div class="nobreak"><form><input><input type="submit"></form></div>-->