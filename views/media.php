<?php ?>


<div class="section group">
</br>
</br>
</br>
</br>
	<h1>Media</h1>

	<div class="col span_2_of_4">
	<h2>Latest Uploads</h2>
	<?php

	foreach ($results as $row) {

	  echo "<div class=\"col span_2_of_4\">";
	  echo "<div id=\"" .$row['songId'] . "\" class=\"post\">";
	  echo "<p> <h3>" . $row['songname']."</h3></p>";
	  


	  if($row['songFile']== 'static/songUploads/'){
		  echo "song is missing";
		}
		else{
			echo "<img class=\"cover\" src=\"coverUploads/". $row["songCover"] . "\" width=\"300\"/>";
			// echo "<p><audio controls><source src=\"songUploads/" . $row['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";
			echo "<p><a class=\"listen\" href=\"/?action=mixtape&songId=" . $row['songId'] . "\">Listen</a></p>";
    		echo "<p><a id=\"download\" href=\"/?action=download&file=" . $row['songFile']. "&songId=" . $row['songId'] ."\">Download</a>" . " </p> <p clsss=\"downloadcount\"> <label>Total Downloads &nbsp;<span>". $row['downloadCount']."</span></p>";

			
		}
		echo "</div>";
	  	echo "</div>";
	}


	 ?>
	</div>


	<div class="col span_2_of_4">
	<h2>Videos</h2>
	<div class="videoWrapper">
    <!-- Copy & Pasted from YouTube -->
    <iframe width="560" height="349" src="https://www.facebook.com/DjQjack/videos/802621723145764/" frameborder="0" allowfullscreen></iframe>
</div>
	</div>

<div id="gallery"> 

	<h1>Gallery</h1>
	
	<div class="col gal_1_of_4">
	    <a href="../images/img1.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img1.jpg" alt=""/></a> <!--  Lightbox-->
	</div>

	<div class="col gal_1_of_4">
	    <a href="../images/img2.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img2.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	<div class="col gal_1_of_4">
	    <a href="../images/img3.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img3.jpg" alt="" /></a><!--  Lightbox-->
	</div>

	<div class="col gal_1_of_4">
	    <a href="../images/img4.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img4.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
	<div class="col gal_1_of_4">
	    <a href="../images/img5.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img5.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	<div class="col gal_1_of_4">
	     <a href="../images/img6.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img6.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
	<div class="col gal_1_of_4">
	     <a href="../images/img7.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img7.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
	<div class="col gal_1_of_4">
	     <a href="../images/img8.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img8.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
		<div class="col gal_1_of_4">
	     <a href="../images/img9.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img9.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
		<div class="col gal_1_of_4">
	     <a href="../images/img10.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img10.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
		<div class="col gal_1_of_4">
	     <a href="../images/img11.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img11.jpg" alt="" /></a> <!--  Lightbox-->
	</div>
		<div class="col gal_1_of_4">
	     <a href="../images/img11.jpg" data-lightbox="example-set" data-title="Dj Q on the ones and twos"><img class="example-image" src="../images/img11.jpg" alt="" /></a> <!--  Lightbox-->
	</div>

	</div>
</div>
