 <script src="js/slider.js"></script>

<div class="slider">
  <!-- Slider -->

  <h1>Top Mixes</h1>
 
  <div id="slider-one">
  	 <?php 
  	 $groupNum = 1;
  	 foreach ($results as $row) {

  	 	
		echo "<div>
		<a rel=\"group". $groupNum . "\" href=\"/?action=mixtape&songId=" . $row['songId'] . "\">
            	<img src=\"coverUploads/". $row["songCover"] . "\" />
                		<p>
                    			".$row["songname"]."
                		</p>
                	</a>
            	</div>";  
		$groupNum++;    

	}
  	 ?>     
</div>
</div><!-- /Slider -->