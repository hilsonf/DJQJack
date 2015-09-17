<?php
class View{

	public function getView($filename="", $results=array()){
        include $filename;
	}
}
?>