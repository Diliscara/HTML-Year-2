<html>
<head>
<title>VIDEO</title>


<style>
	
</style>


</head>
<body>
<hr />
<center>

<a href = "SpeedPaint3.mp4"class = "menu" >Speed Paint Part 2</a>&nbsp;  
<a href = "SpeedPaint2.mp4" class = "menu" >Speed Paint Part 3</a>&nbsp;  
<a href = "video.php" class = "menu">Video Test</a>&nbsp;
<a href = "just_kicks.mov" class = "menu">Just Kicks</a>


<hr />
<?php
$name = "Khan : Scale of Small";
if (isset($_GET['v'])) {
	$video = $_GET['v']; // Default page
	} else {
		$video = 1;
	}
if ($video == 2) { $movie ="SpeedPaint1.mp4";$thumb="default.jpg"; $name = "Speed Paint Part 1 ";   }
if ($video == 3) { $movie ="SpeedPaint3.mp4";$thumb="default.jpg"; $name = "Speed Paint Part 2";   }
if ($video == 4) { $movie ="SpeedPaint2.mp4";$thumb="default.jpg"; $name = "Speed Paint Part 3";    }
?>


movie<?php echo "$movie"; ?>" 
name <?php  echo "Video : $name";?>
<hr />

</body>
</html>
