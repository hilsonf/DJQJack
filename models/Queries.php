<?php
/**
 * Queries
 */
class Queries {

    public function latestUploads(){
        //connect to database
        include("DBConnect.php");

        $stmt = $dbh->prepare("SELECT * from music order by created DESC limit 4");
        $stmt->execute();
        //now put the result in a variable so we can play with them
		$latestUpload = $stmt->fetchall(PDO::FETCH_ASSOC);

		return $latestUpload;
    }

    public function mostDownloads(){

    	//connect to database
        include("DBConnect.php");

        $stmt = $dbh->prepare("SELECT * from music order by downloadCount DESC limit 7");
        $stmt->execute();
        //now put the result in a variable so we can play with them
        $mostDownloaded = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $mostDownloaded;
    }
    


}


?>
