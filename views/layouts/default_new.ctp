<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('main'));

		echo $scripts_for_layout;
	?>
<title><?php echo $title_for_layout; ?></title>
</head>
<body>
	<div id="container">
		<div id="base">
			<div id="header">
				<?php echo $this->element('layouts/header'); ?>
			</div>
			<div id="navigation">
				<?php echo $this->element('layouts/navigation'); ?>
			</div>
			<div id="content">
				<div id="leftpanel">
					<div id="bigimage">
						<?php
							echo $this->Html->link(
								$this->Html->image('signgoinggreenlogo.jpg', array('alt' => 'Going Green!', 'border' => 0, 'width' => 280, 'height' => 321)),
								'/',
								array('escape' => false)
							);
						?>
					</div>
				</div>
				<?php echo $content_for_layout; ?>
			</div>
			<div id="footer">
				&copy; 2008 - <?=date('Y')?> Signs Going Green &bull; PO Box 15456 &bull; Fort Lauderdale, FL 33318 &bull; 954.326.8900
			</div>
		</div>
	</div>
</body>
</html>