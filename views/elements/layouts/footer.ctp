<div id="bottommenu_container">
	<div id="bottommenu" style="display: inline;">
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
	?>
<p>
&copy; 2008 - <?=date('Y')?> Sign Net, LLC Services<br />
PO Box 15456<br />
Fort Lauderdale, FL 33318<br />
954.326.8900
</p>
	</div>
</div>
