
<?php
	echo "<div>";
	echo "<h1>". $results[0]['songname'] ."</h1>";

	echo "<div><img class=\"cover\" src=\"coverUploads/". $results[0]["songCover"] . "\" /></div>";

	echo "<p><audio controls><source src=\"songUploads/" . $results[0]['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";

	echo "<p><a id=\"like\" href=\"/?action=like&songId=" . $results[0]['songId']. "\">Like</a>";

	echo "<p><a id=\"download\" href=\"/?action=download&file=" . $results[0]['songFile']. "&songId=" . $results[0]['songId'] ."\">Download</a>";
	echo "</div>";

	echo "<div>";
	echo "<h2>Date Uploaded</h2>";
	echo "<span>". $results[0]['created'] ."</span>";
	echo "<h2>Total Downloads</h2>";
	echo "<span>". $results[0]['downloadCount'] ."</span>";
	echo "<h2>Total Likes</h2>";
	echo "<span>". $results[0]['likeCount'] ."</span>";
	echo "</div>";
?>	