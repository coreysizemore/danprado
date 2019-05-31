<?php

	$homepage = get_field('home_page_image_links');
	
	if($homepage):
	
		echo '<div id="home_image_wrapper">';
	
		foreach($homepage as $home):
		
			echo '<div class="home_image_item">';
			
			$image = $home['image'];
			
			echo '<a href="' . $home['link'] . '">';
					
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '<span>' . $home['link_text'] . '</span>';
			
			echo '</a>';
			
			echo '</div>';
			
		endforeach;
		
		echo '</div>';
		
	endif;
	
?>