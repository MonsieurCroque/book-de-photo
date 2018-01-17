<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
		<title>Promo MiM</title>
		<link rel="stylesheet" href="pageCSS.css"></link>
	</head>
	<body>
	<div class="page_couv">
	</div>
	<div class="page_dean">
		<div class="top_dean">
			<div class="message">MESSAGES</div>
			<div class="dean_name"> FRANK BOURNOIS</div>
			<img src="Dean.jpg" alt="photo_dean" class="dean_pic"></img>
			<div class="cadre_vert"></div>
			<div class="discours">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac lacus vestibulum, egestas nunc a, gravida diam. Curabitur rhoncus leo dolor, at aliquam ex tincidunttempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar nisialiquet libero tincidunt interdum. Duis malesuada vehicula augue, et malesuadapurus. Vestibulum elementum vel dolor eu congue. Integer ac volutpat ex. Maecenasfacilisis molestie metus nec commodo. Aliquam eu elementum turpis, ac auctor nisl.Phasellus iaculis orci in ante feugiat, vitae volutpat quam ultricies. Aenean at velitmassa. Mauris et tellus sapien. Etiam mattis dui ex, ac pulvinar nulla laoreet in. Integer maximus rhoncus erat, nec lobortis nunc aliquet eu. Sed eleifend justo ultrices mollis sollicitudin. Sed semper, augue nec volutpat dignissim, quam nisl luctus lectus, vel congue dolor orci quis nulla. Curabitur condimentum venenatis tortor, vitae feugiat augue imperdiet ut. Nam ut fermentum magna. Suspendisse potenti. Fusce pellentesque scelerisque ipsum sit amet laoreet. Etiam sed magna id mauris suscipit sagittis in id ante. Vestibulum lobortis nunc id metus gravida, et placerat magna eleifend. Aenean neque risus, convallis non volutpat ut, iaculis sit amet ipsum. Suspendisse potenti. Quisque condimentum, augue non rutrum interdum, velit purus tincidunt lectus, nec dictum sapien massa sed mi. Fusce cursus luctus justo, sed euismod libero fermentum non. Donec porttitor dui id ornare laoreet. Sed interdum dapibus maximus. </div>
			<img src="logo.png" alt="logo" class="logo"></img>
		</div>
	</div>
	<div class="page_partner">
		<div class="top_partner">
			<div class="message_partner">MESSAGES</div>
			<div class="partner_name">AT KEARNEY</div>
			<img src="https://i.imgur.com/B0zF5eB.jpg" alt="photo_partner" class="partner_pic"></img>
			<div class="cadre_vert_partner"></div>
			<div class="discours_partner">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac lacus vestibulum, egestas nunc a, gravida diam. Curabitur rhoncus leo dolor, at aliquam ex tincidunttempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar nisialiquet libero tincidunt interdum. Duis malesuada vehicula augue, et malesuadapurus. Vestibulum elementum vel dolor eu congue. Integer ac volutpat ex. Maecenasfacilisis molestie metus nec commodo. Aliquam eu elementum turpis, ac auctor nisl.Phasellus iaculis orci in ante feugiat, vitae volutpat quam ultricies. Aenean at velitmassa. Mauris et tellus sapien. Etiam mattis dui ex, ac pulvinar nulla laoreet in. Integer maximus rhoncus erat, nec lobortis nunc aliquet eu. Sed eleifend justo ultrices mollis sollicitudin. Sed semper, augue nec volutpat dignissim, quam nisl luctus lectus, vel congue dolor orci quis nulla. Curabitur condimentum venenatis tortor, vitae feugiat augue imperdiet ut. Nam ut fermentum magna. Suspendisse potenti. Fusce pellentesque scelerisque ipsum sit amet laoreet. Etiam sed magna id mauris suscipit sagittis in id. 
			</div>
			<img src="logo.png" class="logo_partner"></img>
		</div>
	</div>
	<div id="content">
		<?php
		//Total of pages
		$total = 6;
		for ($i = 1; $i <= $total; $i++) {
		    include('page'.$i.'Photo.html');
		    include('page'.$i.'Name.html');
		}?>
	</div>	
	<div class="page_last"></div>	
	</body>
	<!-- <script type="text/javascript" src="yearbook2.js"></script>	 -->
</html> 
