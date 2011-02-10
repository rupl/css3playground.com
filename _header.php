<!doctype html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?= $title ?> // CSS3 Playground</title>
	<link rel="stylesheet" href="main.css" type="text/css" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
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
