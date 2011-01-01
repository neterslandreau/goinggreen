<h1>
<?php echo $this->Html->link(__('SIGNS GOING GREEN', true), '/'); ?>
</h1>
<div id="topmenu_container">
	<div id="topmenu">
	<span class="topmenu"><?php echo $this->Html->link('Home - What is Green Going Green?', array('controller' => 'pages', 'action' => 'display', 'green_home'));?></span>
	<span class="topmenu"><?php echo $this->Html->link('Why Signs Going Green?', array('controller' => 'pages', 'action' => 'display', 'green_why'));?></span>
	<span class="topmenu"><?php echo $this->Html->link('Who Is Signs Going Green?', array('controller' => 'pages', 'action' => 'display', 'green_who'));?></span>
	<span class="topmenu"><?php echo $this->Html->link('Contact Us', array('controller' => 'pages', 'action' => 'display', 'green_contact'));?></span>
	</div>
</div>
