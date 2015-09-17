<?php
/**
 * Queries
 */
class Queries {

    function latestUploads(){
        //connect to database
        include("DBConnect.php");

        $stmt = $dbh->prepare("SELECT * from music order by created DESC");
        $stmt->execute();
        //now put the result in a variable so we can play with them
		$latestUpload = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $latestUpload;
    }
}


?>
