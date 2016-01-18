<!DOCTYPE html>

<?php $autoplay = (isset($_GET['autoplay']))? $_GET['autoplay'] : true;
   $song =  (isset($_GET['s']))? $_GET['s'] : '1';
   $song = 'birdsong/'.$song.".mp3";
?>

<html>
<body>

<audio controls <?php if($autoplay){echo 'autoplay';}?> >
  <source src="<?php echo $song; ?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

</body>
</html>
