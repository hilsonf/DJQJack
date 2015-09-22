
<?php

	echo "<div class=\"section group\">";
	echo "</br></br></br>";
	echo "<h1>". $results[0]['songname'] ."</h1>";

	echo "<div class=\"col span_1_of_2\"><img class=\"cover\" src=\"coverUploads/". $results[0]["songCover"] . "\" />";
	

	
	echo "</div>";

	echo "<div class=\"col span_1_of_2\">";

	// echo "<p id=\"audio\"><audio controls><source src=\"songUploads/" . $results[0]['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio></p>";
	echo "<audio controls><source src=\"songUploads/" . $results[0]['songFile'] . "\" type=\"audio/mpeg\">Your browser does not support audio</audio>";
	echo "<div id=\"details\"> 
	<p><h3>Date Uploaded</h3>";
	echo " &nbsp &nbsp <span>". $results[0]['created'] ."</span></p>";
	echo "<p><h3>Total Downloads</h3>";
	echo "&nbsp &nbsp <span>". $results[0]['downloadCount'] ."</span></p>";
	echo "<h3>Total Likes</h3>";
	echo "&nbsp &nbsp <span>". $results[0]['likeCount'] ."</span></div>";	
	// echo "<p class=\"svg\"><svg enable-background=\"new 45.6 168.9 504 504\"  width=\"24\" height=\"24\" viewBox=\"45.6 168.9 504 504\" xml:space=\"preserve\"><path d=\"M401.1,251.9c-43.5,0-81.7,21.7-103.5,55.9c-21.7-34.1-60-55.9-103.5-55.9C125.9,251.9,70,307.8,70,376.1  c0,123.1,227.6,248.3,227.6,248.3s227.6-124.2,227.6-248.3C525.3,307.8,469.4,251.9,401.1,251.9z\" fill=\"#FFF\"/></svg></p>";
	echo "<p><a id=\"like\" href=\"/?action=like&songId=" . $results[0]['songId']. "\">
	Like 
	
	<svg id=\"Layer_1\" 
		 width=\"24\" height=\"24\" viewBox=\"0 0 792 960\" enable-background=\"new 0 0 792 960\" xml:space=\"preserve\">
	<path fill=\"none\" stroke=\"#FFFFFF\" stroke-width=\"20\" stroke-miterlimit=\"10\" d=\"M545.486,149.329
		c-68.357,0-128.386,34.1-162.644,87.843c-34.1-53.586-94.285-87.843-162.643-87.843c-107.171,0-195.014,87.843-195.014,195.171
		c0,193.443,357.657,390.186,357.657,390.186S740.5,539.515,740.5,344.5C740.657,237.172,652.814,149.329,545.486,149.329z\"/>
	</svg>
	</a></p></br>";

	echo "<p><a id=\"download\" href=\"/?action=download&file=" . $results[0]['songFile']. "&songId=" . $results[0]['songId'] ."\">
 	Download
	<svg width=\"24\" height=\"24\"
		 viewBox=\"0 0 792 960\" enable-background=\"new 0 0 792 960\" xml:space=\"preserve\">
	<g>
		<defs>
			<path id=\"SVGID_1_\" d=\"M640.671,336.722c0-1.51,0-4.531,0-6.04c0-98.167-80.043-178.21-178.209-178.21
				c-58.9,0-114.778,30.205-148.005,78.532c-22.653-15.102-48.328-22.653-75.513-22.653c-72.491,0-131.391,57.39-135.921,129.882
				c-48.328,24.163-80.043,75.512-80.043,132.9c0,80.045,61.92,144.985,137.433,144.985h28.694c6.042,0,10.573-4.531,10.573-12.083
				c0-6.041-4.531-12.081-10.573-12.081h-28.694c-63.43,0-114.778-54.37-114.778-122.332c0-49.837,30.204-95.145,74.001-113.267
				c4.531-1.511,7.551-7.553,7.551-12.083c0-61.919,51.349-113.269,113.268-113.269c25.674,0,51.349,9.062,72.492,25.675
				c3.021,1.51,6.042,3.02,9.062,3.02c3.021,0,6.041-3.02,7.551-6.041c27.185-48.328,78.534-78.533,134.414-78.533
				c86.083,0,155.553,69.472,155.553,155.557c0,4.53,0,9.061,0,12.081c0,4.53,3.021,9.062,7.555,12.082
				c46.816,16.612,78.531,63.43,78.531,114.777c0,67.962-51.349,122.332-114.779,122.332h-28.693c-6.042,0-12.083,4.53-12.083,12.081
				c0,6.041,4.53,12.083,12.083,12.083h28.693c75.513,0,137.433-64.94,137.433-144.985
				C726.754,412.234,692.019,359.376,640.671,336.722z M498.706,594.974L385.438,706.731v-309.6c0-6.041-4.53-12.083-12.081-12.083
				s-12.084,4.531-12.084,12.083v308.09L251.027,594.974c-4.532-4.53-12.083-4.53-16.613,0c-4.53,4.531-4.53,12.082,0,16.613
				l131.393,131.391c1.51,1.511,4.529,3.021,7.551,3.021c3.019,0,6.04-1.511,7.551-3.021l131.393-131.391
				c4.529-4.531,4.529-12.082,0-16.613C510.79,590.443,503.238,590.443,498.706,594.974z\"/>
		</defs>
		<use xlink:href=\"#SVGID_1_\"  overflow=\"visible\" fill=\"#FFFFFF\"/>
		<clipPath id=\"SVGID_2_\">
			<use xlink:href=\"#SVGID_1_\"  overflow=\"visible\"/>
		</clipPath>
		
			<rect x=\"-52.533\" y=\"78.469\" clip-path=\"url(#SVGID_2_)\" fill=\"none\" stroke=\"#FFFFFF\" stroke-miterlimit=\"10\" width=\"854.8\" height=\"741.531\"/>
		<use xlink:href=\"#SVGID_1_\"  overflow=\"visible\" fill=\"none\" stroke=\"#FFFFFF\" stroke-miterlimit=\"10\"/>
	</g>
	</svg>
	</a>
 	</p>";

	echo "</div>";
	echo "</div>";


?>	