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

	<div id="fb-root">
	</div>
	<script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="fb-video" data-allowfullscreen="1" data-href="/DjQjack/videos/vb.100001938321011/872063399534929/?type=1"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DjQjack/videos/872063399534929/"><a href="https://www.facebook.com/DjQjack/videos/872063399534929/"></a>
		<p>Coke Coca  off the Top not Written nor Rehearse. SC we next. Im working for my city and state what you doing. Kenzo Delorean Prynce Lyfe KD K CAMP 50 Cent No Limit Forever Records Big K.R.I.T. Mediatakeout Tyrese Gibson Street Jewlz  Renaldo &#039;dj puff&#039; Wilson  DJ B-Lord Ali Djali Williams Djnova Nova Vladimir Djlouivee Scott Carolina &#039;djTo&#039; Shejay Alicia Ferguson Amp Thomas Edward CrownEe Simpkins Ernest Latham Chris Ellison Eddie RnBsinga Goodwin Rob Portee Kierra Mitchell Full Sail University  Spike Bka Speedy</p>Posted by 
		<a href="https://www.facebook.com/DjQjack">DjQjack SC</a> on Tuesday, May 26, 2015</blockquote></div></div>

	<div class="fb-video" data-allowfullscreen="1" data-href="/DjQjack/videos/vb.100001938321011/756189261122344/?type=1"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/DjQjack/videos/756189261122344/"><a href="https://www.facebook.com/DjQjack/videos/756189261122344/">Movie on 11-2-14 at 6.47 AM</a><p>DJ Q Jack Prt 2 #R_U_Serious #Streetjewlz #GVT #MET  #SC #SC  #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC #SC</p>Posted by 
		<a href="https://www.facebook.com/DjQjack">DjQjack SC</a> on Sunday, November 2, 2014</blockquote></div></div>
	
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
