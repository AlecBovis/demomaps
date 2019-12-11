<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
	$p =  new PlaceData();
	$p->title = $_POST["title"];
	$p->description = $_POST["description"];
	$p->lat = $_POST["lat"];
	$p->lng = $_POST["lng"];
	$p->zoom = $_POST["zoom"];
	$p->add();
	header("Location: ./?view=crud&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$p =  new PlaceData();
	$p->id = $_POST["id"];
	$p->title = $_POST["title"];
	$p->description = $_POST["description"];
	$p->lat = $_POST["lat"];
	$p->lng = $_POST["lng"];
	$p->zoom = $_POST["zoom"];
	$p->update();
	header("Location: ./?view=crud&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$person = PlaceData::getById($_GET["id"]);
	$person->del();
	header("Location: ./?view=crud&opt=all");
}

?>