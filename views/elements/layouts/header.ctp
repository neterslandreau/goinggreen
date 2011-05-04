<?php
	switch ($this->here) {
		case '/why_signs_going_green':
			$word = 'Why ';
			break;
		case '/who_is_signs_going_green':
			$word = 'Who\'s ';
			break;
		case '/what_of_signs_going_green':
			$word = 'What of ';
			break;
		case '/contact':
			$word = 'Contact ';
			break;
		default:
			$word = 'We\'re ';
	}
?>
<h1><?php echo $word; ?><span class="black">Signs</span></h1>
<h2>Going <span class="black">Green</span></h2>
