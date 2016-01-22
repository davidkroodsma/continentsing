<!DOCTYPE html>

<?php $autoplay = (isset($_GET['autoplay']))? $_GET['autoplay'] : true;
   $song =  (isset($_GET['s']))? $_GET['s'] : '1';
   $song = 'birdsong/'.$song.".mp3";
?>

<html>
<head>
	<style>
		div {
	    width: 300px;
	    height: 100px;
	    position: absolute;
	    top:0;
	    bottom: 0;
	    left: 0;
	    right: 0;

	    margin: auto;
	}
	</style>
	</head>
<body>

<div><audio controls <?php if($autoplay){echo 'autoplay';}?> >
  <source src="<?php echo $song; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio></div>

</body>
</html>
