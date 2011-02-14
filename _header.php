<!doctype html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?= $title ?> // CSS3 Playground</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" type="text/css"/>
  
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".info").toggle(
			  function () {
			    $(this).addClass("open");
			  },
			  function () {
			    $(this).removeClass("open");
			  }
			);
		});
	</script>

