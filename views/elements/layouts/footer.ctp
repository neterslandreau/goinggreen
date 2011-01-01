<div id="bottommenu_container">
	<div id="bottommenu">
	<?php
		echo $this->Html->link(
			$this->Html->image('icon-facebook.gif'),
			'http://www.facebook.com/',
			array('escape' => false)
		);
	?>
	<?php
		echo $this->Html->link(
			$this->Html->image('twitter.png'),
			'http://www.twitter.com/',
			array('escape' => false)
		);
	?>
	<?php
		echo $this->element('layouts/mailing_list');
//		echo $this->Html->link(
//			$this->Html->image('icon-facebook.gif'),
//			'http://www.facebook.com/',
//			array('escape' => false)
//		);
	?>
	</div>
</div>
