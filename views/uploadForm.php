<?php


	if ($results == 25 ) {
		echo "error";
	}
	else if($results == 95){
		echo "success";
	}

?>

<form action="/?action=createPost" method="post" enctype="multipart/form-data">
	<p>
		<input type="text" name="songName" placeholder="Song Name" autofocus/>
	</p>
	<p>
		<h3>Upload Song File</h3>
		<input type="file" name="songFile">
	<p>
	<p>
		<h3>Upload Song Cover</h3>
		<input type="file" name="songCover">
	</p>
		<button type="submit" value="submit">Upload</button></p>
	</p>
</form>
<a href="/">Logout</a>
