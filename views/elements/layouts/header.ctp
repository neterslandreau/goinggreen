<?php
	switch ($this->here) {
		case '/why_signs_going_green':
			$word = 'Why ';
			break;
		case '/who_is_signs_going_green':
			$word = 'Who is ';
			break;
		case '/what_is_signs_going_green':
			$word = 'What is ';
			break;
		case '/contact':
			$word = 'Contact ';
			break;
		default:
			$word = 'We are ';
	}
?>
<h1><?php echo $word; ?><span class="black">Signs</span></h1>
<h2>Going <span class="black">Green</span></h2>
