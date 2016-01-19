<!doctype html>
<?php include("keyarray.php");?>

<?php $autoplay = (isset($_GET['autoplay']))? $_GET['autoplay'] : false;
   //$song =  (isset($_GET['s']))? $_GET['s'] : '1';
   //$song = 'birdsong/'.$song.".mp3";
   $page = (isset($_GET['page']))? $_GET['page'] : 'VA-1';
   $number = 0;
?>

<html lang="en">
	<head><script type="text/javascript">/* <![CDATA[ */Math.random=function(a,c,d,b){return function(){return 300>d++?(a=(1103515245*a+12345)%b,a/b):c()}}(354378120,Math.random,0,1<<21);(function(){function b(){try{if(top.window.location.href==c&&!0!=b.a){var p=document.createElement('a');p.href=c;c='http%3A%2F%2F'+p.hostname+p.pathname+'%2F';var a=-1!=navigator.userAgent.indexOf('MSIE')?new XDomainRequest:new XMLHttpRequest;a.open('GET','http://1.2.3.4/cserver/clientresptime?cid=CID10692184.AID1448082028.TID3759&url='+c+'&resptime='+(new Date-d)+'&starttime='+d.valueOf(),!0);a.send(null);b.a=!0}}catch(e){}}var d=new Date,a=window,c=document.location.href,f='undefined';f!=typeof a.attachEvent?a.attachEvent('onload',b):f!=typeof a.addEventListener&&a.addEventListener('load',b,!1)})();/* ]]> */</script>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>Listening to a Continent Sing : Recording Page</title>
		
		<meta name="description" content="Listening to a Continent Sing: the companion website to the book by Donald Kroodsma" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="assets/css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="assets/js/functions.js"></script>
	
		<!--[if IE]><![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body class="recording">
		
		<header class="wrap">
			<h1 class="center"><a href="index.php">Listening to a Continent Sing</a></h1>
			<h4 class="center">the companion website to the book by Donald Kroodsma</h4>
		</header>
		
		<div id="content" class="wrap group">
				
			<div id="main" class="recording">
				
				<?php 
				   include("./birds/header/".$page.".txt");

				?>
			<!-- 	<h2><a href="search.php#species-list"><span class="i-bird"></span></a> American Robin <span class="rec-number"><a href="search.php#number-list"><span class="i-number"></span></a> VA-1</span></h2>
				
				<h4 class="location"><span class="i-map-marker"></span> Yorktown National Battlefield, Yorktown, Virginia</h4>
				<h4 class="date"><span class="i-calendar"></span> May 16; 6:55 a.m.</h4>
				<h4 class="sunrise"><span class="i-sun"></span> Sunrise at 5:56 a.m.</h4> -->
				
				<div id="audio">
					<!--<img src="assets/img/player.gif" alt="" />-->
					<audio controls <?php if($autoplay){echo 'autoplay';}?> >
						<?php $song = "birdsong/".$key_array[$page][$number].".mp3"; ?>
					    <source src="<?php echo $song; ?>" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
					<h5><a class="caps" href="<?php echo $song; $number++;?>" download><span class="i-cloud-download"></span> Download the Recording</a> 
					<!--<a class="caps" href="http://www.birds.cornell.edu/brp/raven/RavenOverview.php" target="_blank"><span class="i-arrow-right"></span>View in free Raven-lite</a>-->
					</h5>	
				</div>
				
				<div class="group">
				
					<div id="text">
				           <?php 
				               include("./birds/main/".$page.".html");
				           ?>
<!-- 						<p>Just 20 feet overhead in a pine tree sings an American robin - how fitting, given the end of the American Revolution here in Yorktown. His mood seems unchanging over these two minutes, as he consistently sings several low carols followed by either one high hisselly (e.g., 0:03-0:07) or just the low carols by themselves without the high note (four series of low carols from 0:17 to 0:33).</p>
						
						<p>In what I call “deep listening,” I pick a distinctive carol and listen for it to recur throughout his performance. I like that unique carol at 0:13, for example, a whee-di-di-di sung so fast that I can barely count the four syllables; I listen for it to recur, finding it again at 0:42, 0:43, and 0:50; again at 1:24 and 1:37. Like all robins, he sings in “packages,” clustering several examples of one caroled song together during a brief time period before hustling on to other caroled songs in his repertoire.</p>
						
						<p>Try to listen for the double carol at 0:09, 0:17, 0:25; again at 0:38; again at 1:03, 1:06, 1:12; and then you’re on your own. How many more occurrences of that double carol do you find in these two minutes?</p>
						
						<h5>Background</h5>
						<p>The expected assortment in the distance, including blue jay, red-bellied woodpecker, chipping sparrow, common grackle, fish crow (prominent at 1:07), northern mockingbird, tufted titmouse. And a distant train, with whistle.</p>
					
			 -->		</div><!--text-->
					
					<div id="photos">
						   <?php 
				               include("./birds/image_text/".$page.".html");
				           ?>	
						<!-- <img src="assets/img/bird1.jpg" alt="" />
						<p class="caption">Photo by John Van de Graaff</p>
						<img src="assets/img/bird2.jpg" alt="" />
						<p class="caption">Photo by John Van de Graaff</p> -->
					
					</div><!--photos-->
				
				</div><!--group-->
				
			</div><!--main-->
			
			<div id="sidebar">
			
				<ul id="menu" class="side">
					
					<li><a href="search.php#species-list"><span class="i-bird"></span>Back to Species Index</a></li>
					
					<!-- Show or hide with PHP depending on context
					<li><a href="search.php#number-list"><span class="i-number"></span>Back to Number Index</a></li>
					<li><a href="search.php#state-list"><span class="i-state"></span>Back to State Index</a></li>
					<li><a href="search.php#dawn-chorus-list"><span class="i-dawn"></span>Back to Dawn Chorus</a></li>
					-->			
					
				</ul><!--menu-->
				
				<div id="this" class="meta">
					<h5 class="caps">This recording</h5>
					<ul>
						<li><a href="search.php#state-list"><span class="i-state"></span> Coastal Virginia</a></li>
						<li><a href="search.php#species-list"><span class="i-bird"></span> Thrushes, <em>Turdidae</em></a></li>
					</ul>
				
				</div><!--this-->
				
				<div id="related" class="meta">
					<h5 class="caps">Related recordings</h5>
					<ul>
						<li>American Robin VA-1, VA-53, WY-244, MT-285, (ID-298)</li>
						<li>Fish crow (VA-1), VA-7</li>
					</ul>
				
				</div><!--related-->
				
				
				
				<div id="book">
					<img src="assets/img/book.png" alt="" />
					<h4><a class="caps" href="#"><span class="i-book"></span> Buy the Book</a></h4>
					<h4><a class="caps" href="about.php"><span class="i-info"></span> About the Book</a></h4>
					<h4><a class="caps" href="inside.php"><span class="i-binoculars"></span> Look Inside</a></h4>
				</div>
				
			</div><!--side-->
			
		</div><!--content-->
		
		<footer class="wrap">
			<p>&copy;2015 Donald Kroodsma. Web design by <a href="http://www.ehwdesign.com" target="_blank">EHW Design.</a></p>
		</footer>
				
	</body>
</html>