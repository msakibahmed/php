
<?php 

global $wpdb;
	$results = $wpdb->get_results( "SELECT * FROM countries ORDER BY county" );									
	$rowcount = $wpdb->num_rows;
	//$divid  	= $rowcount/7+1;
	$divid  	= $rowcount/8;
	$per_column = round($divid);
	
	 <?php 
	foreach($results as $kicks) {
	echo '<div class="col-sm-4 col-md-3">';
	?>
		<div class="single-countylist">
			<a href="/county/?county-name=<?php echo($kicks->county);?>">
				<img src="<?php if(!empty($kicks->flag)){echo 'data:image/jpeg;base64, '.$kicks->flag;}else{echo get_template_directory_uri().'/img/wf.png';} ?>" alt="" >
				<div class="all-county-name"><?php echo($kicks->county);?></div>
			</a>
		</div>
	<?php
	echo '</div>';
	}
	?>