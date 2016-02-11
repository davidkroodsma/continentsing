<!DOCTYPE html>

<?php include('keyarray_numbers.php');?>

<?php 

//the following is for a redirect


$autoplay = (isset($_GET['autoplay']))? $_GET['autoplay'] : true;
   $s =  (isset($_GET['s']))? $_GET['s'] : '1';
   $song = 'birdsong/'.$s.".mp3";
   $key = $key_array_num["$s"];
   $num = $key_array_order["$s"]-1;
   $url = "http://listeningtoacontinentsing.com/recording.php?page=".$key."&autoplay=".$num;
   echo $url;
   header("Location: ".$url);

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
<?php include_once("analyticstracking.php") ?>
<div><audio controls <?php if($autoplay){echo 'autoplay';}?> >
  <source src="<?php echo $song; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio></div>

</body>
</html>
