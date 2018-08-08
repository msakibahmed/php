
<?php
	//Columns must be a factor of 12 (1,2,3,4,6,12)
	$numOfCols = 2;
	$rowCount = 0;
	$bootstrapColWidth = 12 / $numOfCols;
	?>
	
	<?php
	foreach ($course_details as $row){
	?>  
	        <div class="col-lg-6 col-12 col-sm-6 <?php //echo $bootstrapColWidth; ?>">
	            <ul class="list-inline">
	                <li><?php echo $row['item_name']; ?></li>
	            </ul>
	        </div>
	<?php
	    $rowCount++;
	    if($rowCount % $numOfCols == 0) ;
	}
	?>