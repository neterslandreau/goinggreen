<?php
	$this->Html->script(
		array('jquery-1.5.1.min', 'jquery-ui', 'views/whygreen'),
		array('inline' => false)
	);
	echo $this->set('title_for_layout', 'Why Signs Going Green?');
?>
<div class="rightpanel">
	<div id="sectionone">
		<h1>Hospitals</h1>
		<p>Hospitals and health care facilities are very special places because of the populations they serve:</p>
		<ul>
			<li>
				<?php 
					echo $this->Html->link('Patients', '#', array(
						'onclick' => 'return false;',
						'id' => 'patients-link',
					));
				?>
			</li>
			<li>
				<?php
					echo $this->Html->link('Family and visitors', '#', array(
						'onclick' => 'return false;',
						'id' => 'families-link',
					));
				?>
			</li>
		</ul>
		<h1>Our Certification</h1>
		<p>SIGNS GOING GREEN certification is one way to address these very special populations signage needs in an environmentally wise and cost conscious way.</p>
	</div>
</div>
<div id="families" title="Families" style="display:none;">
	<p>Second are the patients' family and visitors.</p>
	<p>Family members can be very emotional, often as stressed as the patient. Feelings of concern and worry are often very intense. Concerns can arise from the simplest issues of room location, to visiting hours and protocol.</p>
	<p>Signage that directs and inform patients and family must be through and uninterrupted. A family member needs to have easy-to-follow signs that direct them through the facility.</p>
	<p>Finally, a very important signage issue related to family and visitors is the matter of the parking facilities. People using the parking facilities are understandable more concerned with getting in to see a sick family member than in where they should to park.</p>
	<p>The parking population is also often elderly. Almost always the users are unfamiliar with the parking facility.</p>
	<p>Signage issues for parking facilities are also often complicated by ever changing needs for specialized parking areas for Doctors, Valet Parking, handicapped parking and the like. Parking facilities for hospitals often require high saturation signage to insure traffic and pedestrian flow.</p>
</div>
<div id="patients" title="Patients" style="display:none;">
	<p>First to consider are the patients.</p>
	<p>The people hospitals serve are often under severe physical and emotional stress. Signs that direct them to their medical services must address these issues.</p>
	<p>Most patients moving through your health care facility are trying to find an important service, not just a location. For example, your patients want to find out what the problem is, not find the Radiology Department. Patients need to be directed to services with signage that is clear and concise.</p>
</div>
