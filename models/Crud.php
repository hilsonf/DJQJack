<?php
/**
* Crud class
*/
class Crud
{
	#checkSongfile
	public function postSong(){
		$target_dir = "songUploads/";
		$target_file = $target_dir . basename($_FILES["songFile"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		$target_dir2 = "coverUploads/";
		$target_file2 = $target_dir2 . basename($_FILES["songCover"]["name"]);

		$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file) || file_exists($target_file2)) {
				//echo "Sorry, file already exists.";
				$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["songFile"]["size"] > 20000000) {
				//echo "Sorry, your file is too large.";
				$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 1) {

			move_uploaded_file($_FILES["songFile"]["tmp_name"], $target_file);
			move_uploaded_file($_FILES["songCover"]["tmp_name"], $target_file2);
			//connecting to DB
			include("DBConnect.php");
			// echo "<pre>";
			// var_dump($userid);
			// echo "</pre>";
			$songname = $_POST['songName'];
			$songfile = basename($_FILES["songFile"]["name"]);
			$coverfile = basename($_FILES["songCover"]["name"]);
			$likecount = 0;
			$downloadcount = 0;

			$date = new DateTime();

			$thetime = $date->format('Y-m-d H:i:s');

			$stmt = $dbh->prepare("INSERT INTO music (songname,likeCount,downloadCount,songFile,songCover ,created) VALUES(:songname, :likeCount, :downloadCount,:song,:cover,:created);");
			$stmt->bindParam(':songname',$songname);
			$stmt->bindParam(':likeCount',$likecount);
			$stmt->bindParam(':downloadCount',$downloadcount);
			$stmt->bindParam(':song',$songfile);
			$stmt->bindParam(':cover',$coverfile);
			$stmt->bindParam(':created',$thetime);
			$stmt->execute();
			return 95;
		}

		else{
			return 25;
		}
	}

	#read all songs sorting by date entered
	public function dateSort(){
		//connecting to DB
		include("DBConnect.php");

		$stmt = $dbh->prepare('SELECT * FROM music order by created desc;');

		$stmt->execute();

		//now put the result in a variable so we can play with them
		$results = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $results;

	}//close dateSort function

	#read all songs sorting by number of likes
	public function likeSort(){
		//connecting to DB
		include("DBConnect.php");

		$stmt = $dbh->prepare('SELECT * FROM music order by likeCount desc;');

		$stmt->execute();

		//now put the result in a variable so we can play with them
		$results = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $results;

	}//close likeSort function


	#read all songs sroting by number of downloads
	public function downloadSort(){
		//connecting to DB
		include("DBConnect.php");

		$stmt = $dbh->prepare('SELECT * FROM music order by downloadCount desc;');

		$stmt->execute();

		//now put the result in a variable so we can play with them
		$results = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $results;

	}//close downloadSort function

	#like a song
	public function likeSong($songid){
	//connecting to DB
		include("DBConnect.php");

	$stmt = $dbh->prepare("update music set likeCount = likeCount + 1 where songId in (:songid)");

	$stmt->bindParam(':songid', $songid);
	$stmt->execute();

	}// close likeRecord function

	#download a song
	public function downloadSong($songid,$fileIncoming){

		//connecting to DB
		include("DBConnect.php");

		$stmt = $dbh->prepare("update music set downloadCount = downloadCount + 1 where songId in (:songid)");

		$stmt->bindParam(':songid', $songid);
		$stmt->execute();


		#download file
		// block any attempt to the filesystem
		if (isset($fileIncoming) && basename($fileIncoming) == $fileIncoming) {

		    $filename = $fileIncoming;
		}
		else {
		    $filename = NULL;
		}
		// define error message
		$err = '<div class="error">Sorry, the file you are requesting is unavailable.</div>';

		if (!$filename) {
		        // if variable $filename is NULL or false display the message
		        echo $err;
		    }
		    else {
		        // define the path to your download folder plus assign the file name
		        $path = 'songUploads/'.$filename;
		        // check that file exists and is readable
		        if (file_exists($path) && is_readable($path)) {
		            // get the file size and send the http headers
		            $size = filesize($path);
		            header('Content-Type: application/octet-stream');
		            header('Content-Length: '.$size);
		            header('Content-Disposition: attachment; filename='.$filename);
		            header('Content-Transfer-Encoding: binary');
		            // open the file in binary read-only mode
		            // display the error messages if the file can´t be opened
		            $file = @ fopen($path, 'rb');
		            if ($file) {
		                // stream the file and exit the script when complete
		                fpassthru($file);
		                exit;
		            } else {
		                echo $err;
		            }
		        }
		        else {
		           echo $err;
		        }
		    }

	}// close downloadSong function

	public function getMixtape($mixtapeId){
		//connecting to DB
		include("DBConnect.php");

		$stmt = $dbh->prepare("SELECT * from music where songId in (:songid)");

		$stmt->bindParam(':songid', $mixtapeId);
		$stmt->execute();

		//now put the result in a variable so we can play with them
		$mixtape = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $mixtape;
	}

}
?>
