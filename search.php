<?php 
   $dropdown = (isset($_GET['dropdown']))? $_GET['dropdown'] : '';
?>


<!doctype html>
<html lang="en">
	<head><script type="text/javascript">/* <![CDATA[ */Math.random=function(a,c,d,b){return function(){return 300>d++?(a=(1103515245*a+12345)%b,a/b):c()}}(1977812783,Math.random,0,1<<21);(function(){function b(){try{if(top.window.location.href==c&&!0!=b.a){var p=document.createElement('a');p.href=c;c='http%3A%2F%2F'+p.hostname+p.pathname+'%2F';var a=-1!=navigator.userAgent.indexOf('MSIE')?new XDomainRequest:new XMLHttpRequest;a.open('GET','http://1.2.3.4/cserver/clientresptime?cid=CID10692184.AID1448082028.TID3329&url='+c+'&resptime='+(new Date-d)+'&starttime='+d.valueOf(),!0);a.send(null);b.a=!0}}catch(e){}}var d=new Date,a=window,c=document.location.href,f='undefined';f!=typeof a.attachEvent?a.attachEvent('onload',b):f!=typeof a.addEventListener&&a.addEventListener('load',b,!1)})();/* ]]> */</script>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>Listening to a Continent Sing : Search</title>
		
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
		<script type="text/javascript">

		$.fn.scrollView = function () {
		    return this.each(function () {
		        $('html, body').animate({
		            scrollTop: $(this).offset().top
		        }, 1000);
		    });
		}
		
    	function dropdown(d){
    	  if (d==""){return;}
    	  else{
	    	  var myLink = document.getElementById(d);
				myLink.click();
    	  }
    	  $('#'+d).scrollView();
	    }
	    </script>
	</head>
	<body class="search" onload="dropdown('<?php echo($dropdown); ?>');">
		
		<header class="wrap">
			<h1 class="center"><a href="index.php">Listening to a Continent Sing</a></h1>
			<h4 class="center">the companion website to the book by Donald Kroodsma</h4>
		</header>
		
		<div id="content" class="wrap group">
		
			<div id="sidebar">
			
				<ul id="menu" class="side">
					<li id="number" class="menu-item active"><a href="#number-list"><span class="i-number"></span>Listen by Number</a></li>
					<li id="species" class="menu-item"><a href="#species-list"><span class="i-bird"></span>Listen by Species</a></li>	
					<li id="state" class="menu-item"><a href="#state-list"><span class="i-state"></span>Listen by State</a></li>
					<li id="dawn-chorus" class="menu-item"><a href="#dawn-chorus-list"><span class="i-dawn"></span>The Dawn Chorus</a></li>
				</ul><!--menu-->
				
				<div id="book">
					<img src="assets/img/book.png" alt="" />
					<h4><a class="caps" href="http://www.amazon.com/Listening-Continent-Sing-Birdsong-Atlantic/dp/0691166811/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1453484900&sr=8-3" target="_blank"><span class="i-book"></span> Buy the Book</a></h4>
					<h4><a class="caps" href="about.php"><span class="i-info"></span> About the Book</a></h4>
					<h4><a class="caps" href="inside.php"><span class="i-binoculars"></span> Look Inside</a></h4>
				</div>
					
			</div><!--side-->
				
			<div id="main" class="indices">
				
				<div id="number-list" class="index visible">
					<h2>search recordings by number</h2>
					<p>Listen by number, as referenced in the book’s text; state abbreviations are added as a prefix. Simply click on any of the 381 numbers, such as CO-280, where you’ll be whisked away to Colorado, listening to yellow-headed blackbirds.</p>
					<ul>
						<li><a href="recording.php?page=VA-1">VA-1</a></li>
						<li><a href="recording.php?page=VA-2">VA-2</a></li>
						<li><a href="recording.php?page=VA-3">VA-3</a></li>
						<li><a href="recording.php?page=VA-4">VA-4</a></li>
						<li><a href="recording.php?page=VA-5">VA-5</a></li>
						<li><a href="recording.php?page=VA-6">VA-6</a></li>
						<li><a href="recording.php?page=VA-7">VA-7</a></li>
						<li><a href="recording.php?page=VA-8">VA-8</a></li>
						<li><a href="recording.php?page=VA-9">VA-9</a></li>
						<li><a href="recording.php?page=VA-10">VA-10</a></li>
						<li><a href="recording.php?page=VA-11">VA-11</a></li>
						<li><a href="recording.php?page=VA-12">VA-12</a></li>
						<li><a href="recording.php?page=MO-13">MO-13</a></li>
						<li><a href="recording.php?page=VA-14">VA-14</a></li>
						<li><a href="recording.php?page=VA-15">VA-15</a></li>
						<li><a href="recording.php?page=VA-16">VA-16</a></li>
						<li><a href="recording.php?page=VA-17">VA-17</a></li>
						<li><a href="recording.php?page=VA-18">VA-18</a></li>
						<li><a href="recording.php?page=VA-19">VA-19</a></li>
						<li><a href="recording.php?page=VA-20">VA-20</a></li>
						<li><a href="recording.php?page=VA-21">VA-21</a></li>
						<li><a href="recording.php?page=VA-22">VA-22</a></li>
						<li><a href="recording.php?page=VA-23">VA-23</a></li>
						<li><a href="recording.php?page=VA-24">VA-24</a></li>
						<li><a href="recording.php?page=VA-25">VA-25</a></li>
						<li><a href="recording.php?page=VA-26">VA-26</a></li>
						<li><a href="recording.php?page=VA-27">VA-27</a></li>
						<li><a href="recording.php?page=VA-28">VA-28</a></li>
						<li><a href="recording.php?page=VA-29">VA-29</a></li>
						<li><a href="recording.php?page=VA-30">VA-30</a></li>
						<li><a href="recording.php?page=VA-31">VA-31</a></li>
						<li><a href="recording.php?page=VA-32">VA-32</a></li>
						<li><a href="recording.php?page=VA-33">VA-33</a></li>
						<li><a href="recording.php?page=VA-34">VA-34</a></li>
						<li><a href="recording.php?page=VA-35">VA-35</a></li>
						<li><a href="recording.php?page=VA-36">VA-36</a></li>
						<li><a href="recording.php?page=VA-37">VA-37</a></li>
						<li><a href="recording.php?page=VA-38">VA-38</a></li>
						<li><a href="recording.php?page=VA-39">VA-39</a></li>
						<li><a href="recording.php?page=VA-40">VA-40</a></li>
						<li><a href="recording.php?page=VA-41">VA-41</a></li>
						<li><a href="recording.php?page=VA-42">VA-42</a></li>
						<li><a href="recording.php?page=VA-43">VA-43</a></li>
						<li><a href="recording.php?page=KY-44">KY-44</a></li>
						<li><a href="recording.php?page=VA-45">VA-45</a></li>
						<li><a href="recording.php?page=VA-46">VA-46</a></li>
						<li><a href="recording.php?page=VA-47">VA-47</a></li>
						<li><a href="recording.php?page=VA-48">VA-48</a></li>
						<li><a href="recording.php?page=VA-49">VA-49</a></li>
						<li><a href="recording.php?page=VA-50">VA-50</a></li>
						<li><a href="recording.php?page=VA-51">VA-51</a></li>
						<li><a href="recording.php?page=VA-52">VA-52</a></li>
						<li><a href="recording.php?page=VA-53">VA-53</a></li>
						<li><a href="recording.php?page=VA-54">VA-54</a></li>
						<li><a href="recording.php?page=VA-55">VA-55</a></li>
						<li><a href="recording.php?page=VA-56">VA-56</a></li>
						<li><a href="recording.php?page=VA-57">VA-57</a></li>
						<li><a href="recording.php?page=VA-58">VA-58</a></li>
						<li><a href="recording.php?page=VA-59">VA-59</a></li>
						<li><a href="recording.php?page=VA-60">VA-60</a></li>
						<li><a href="recording.php?page=VA-61">VA-61</a></li>
						<li><a href="recording.php?page=VA-62">VA-62</a></li>
						<li><a href="recording.php?page=VA-63">VA-63</a></li>
						<li><a href="recording.php?page=VA-64">VA-64</a></li>
						<li><a href="recording.php?page=VA-65">VA-65</a></li>
						<li><a href="recording.php?page=VA-66">VA-66</a></li>
						<li><a href="recording.php?page=VA-67">VA-67</a></li>
						<li><a href="recording.php?page=KY-68">KY-68</a></li>
						<li><a href="recording.php?page=WY-69">WY-69</a></li>
						<li><a href="recording.php?page=VA-70">VA-70</a></li>
						<li><a href="recording.php?page=KY-71">KY-71</a></li>
						<li><a href="recording.php?page=KY-72">KY-72</a></li>
						<li><a href="recording.php?page=VA-73">VA-73</a></li>
						<li><a href="recording.php?page=VA-74">VA-74</a></li>
						<li><a href="recording.php?page=KY-75">KY-75</a></li>
						<li><a href="recording.php?page=VA-76">VA-76</a></li>
						<li><a href="recording.php?page=VA-77">VA-77</a></li>
						<li><a href="recording.php?page=VA-78">VA-78</a></li>
						<li><a href="recording.php?page=VA-79">VA-79</a></li>
						<li><a href="recording.php?page=VA-80">VA-80</a></li>
						<li><a href="recording.php?page=KY-81">KY-81</a></li>
						<li><a href="recording.php?page=KY-82">KY-82</a></li>
						<li><a href="recording.php?page=KY-83">KY-83</a></li>
						<li><a href="recording.php?page=KY-84">KY-84</a></li>
						<li><a href="recording.php?page=VA-85">VA-85</a></li>
						<li><a href="recording.php?page=KY-86">KY-86</a></li>
						<li><a href="recording.php?page=VA-87">VA-87</a></li>
						<li><a href="recording.php?page=IL-88">IL-88</a></li>
						<li><a href="recording.php?page=KY-89">KY-89</a></li>
						<li><a href="recording.php?page=KY-90">KY-90</a></li>
						<li><a href="recording.php?page=KY-91">KY-91</a></li>
						<li><a href="recording.php?page=KY-92">KY-92</a></li>
						<li><a href="recording.php?page=KY-93">KY-93</a></li>
						<li><a href="recording.php?page=IL-94">IL-94</a></li>
						<li><a href="recording.php?page=VA-95">VA-95</a></li>
						<li><a href="recording.php?page=VA-96">VA-96</a></li>
						<li><a href="recording.php?page=IL-97">IL-97</a></li>
						<li><a href="recording.php?page=KY-98">KY-98</a></li>
						<li><a href="recording.php?page=KY-99">KY-99</a></li>
						<li><a href="recording.php?page=VA-100">VA-100</a></li>
						<li><a href="recording.php?page=IL-101">IL-101</a></li>
						<li><a href="recording.php?page=KY-102">KY-102</a></li>
						<li><a href="recording.php?page=KY-103">KY-103</a></li>
						<li><a href="recording.php?page=KY-104">KY-104</a></li>
						<li><a href="recording.php?page=KY-105">KY-105</a></li>
						<li><a href="recording.php?page=VA-106">VA-106</a></li>
						<li><a href="recording.php?page=IL-107">IL-107</a></li>
						<li><a href="recording.php?page=IL-108">IL-108</a></li>
						<li><a href="recording.php?page=IL-109">IL-109</a></li>
						<li><a href="recording.php?page=IL-110">IL-110</a></li>
						<li><a href="recording.php?page=MO-111">MO-111</a></li>
						<li><a href="recording.php?page=MO-112">MO-112</a></li>
						<li><a href="recording.php?page=MO-113">MO-113</a></li>
						<li><a href="recording.php?page=MO-114">MO-114</a></li>
						<li><a href="recording.php?page=KY-115">KY-115</a></li>
						<li><a href="recording.php?page=VA-116">VA-116</a></li>
						<li><a href="recording.php?page=KY-117">KY-117</a></li>
						<li><a href="recording.php?page=IL-118">IL-118</a></li>
						<li><a href="recording.php?page=MO-119">MO-119</a></li>
						<li><a href="recording.php?page=KY-120">KY-120</a></li>
						<li><a href="recording.php?page=KY-121">KY-121</a></li>
						<li><a href="recording.php?page=MO-122">MO-122</a></li>
						<li><a href="recording.php?page=KY-123">KY-123</a></li>
						<li><a href="recording.php?page=IL-124">IL-124</a></li>
						<li><a href="recording.php?page=KY-125">KY-125</a></li>
						<li><a href="recording.php?page=IL-126">IL-126</a></li>
						<li><a href="recording.php?page=IL-127">IL-127</a></li>
						<li><a href="recording.php?page=KY-128">KY-128</a></li>
						<li><a href="recording.php?page=MO-129">MO-129</a></li>
						<li><a href="recording.php?page=IL-130">IL-130</a></li>
						<li><a href="recording.php?page=IL-131">IL-131</a></li>
						<li><a href="recording.php?page=IL-132">IL-132</a></li>
						<li><a href="recording.php?page=IL-133">IL-133</a></li>
						<li><a href="recording.php?page=KY-134">KY-134</a></li>
						<li><a href="recording.php?page=IL-135">IL-135</a></li>
						<li><a href="recording.php?page=VA-136">VA-136</a></li>
						<li><a href="recording.php?page=VA-137">VA-137</a></li>
						<li><a href="recording.php?page=IL-138">IL-138</a></li>
						<li><a href="recording.php?page=CO-139">CO-139</a></li>
						<li><a href="recording.php?page=MO-140">MO-140</a></li>
						<li><a href="recording.php?page=VA-141">VA-141</a></li>
						<li><a href="recording.php?page=CO-142">CO-142</a></li>
						<li><a href="recording.php?page=MO-143">MO-143</a></li>
						<li><a href="recording.php?page=KY-144">KY-144</a></li>
						<li><a href="recording.php?page=MO-145">MO-145</a></li>
						<li><a href="recording.php?page=IL-146">IL-146</a></li>
						<li><a href="recording.php?page=OR-147">OR-147</a></li>
						<li><a href="recording.php?page=MO-148">MO-148</a></li>
						<li><a href="recording.php?page=MO-149">MO-149</a></li>
						<li><a href="recording.php?page=MO-150">MO-150</a></li>
						<li><a href="recording.php?page=MO-151">MO-151</a></li>
						<li><a href="recording.php?page=MO-152">MO-152</a></li>
						<li><a href="recording.php?page=MO-153">MO-153</a></li>
						<li><a href="recording.php?page=MO-154">MO-154</a></li>
						<li><a href="recording.php?page=MO-155">MO-155</a></li>
						<li><a href="recording.php?page=MO-156">MO-156</a></li>
						<li><a href="recording.php?page=MO-157">MO-157</a></li>
						<li><a href="recording.php?page=MO-158">MO-158</a></li>
						<li><a href="recording.php?page=MO-159">MO-159</a></li>
						<li><a href="recording.php?page=MO-160">MO-160</a></li>
						<li><a href="recording.php?page=MO-161">MO-161</a></li>
						<li><a href="recording.php?page=KS-162">KS-162</a></li>
						<li><a href="recording.php?page=MO-163">MO-163</a></li>
						<li><a href="recording.php?page=MO-164">MO-164</a></li>
						<li><a href="recording.php?page=MO-165">MO-165</a></li>
						<li><a href="recording.php?page=MO-168">MO-168</a></li>
						<li><a href="recording.php?page=MO-169">MO-169</a></li>
						<li><a href="recording.php?page=OR-170">OR-170</a></li>
						<li><a href="recording.php?page=KS-171">KS-171</a></li>
						<li><a href="recording.php?page=KS-172">KS-172</a></li>
						<li><a href="recording.php?page=KS-173">KS-173</a></li>
						<li><a href="recording.php?page=KS-174">KS-174</a></li>
						<li><a href="recording.php?page=KS-175">KS-175</a></li>
						<li><a href="recording.php?page=KS-176">KS-176</a></li>
						<li><a href="recording.php?page=KS-177">KS-177</a></li>
						<li><a href="recording.php?page=CO-178">CO-178</a></li>
						<li><a href="recording.php?page=OR-179">OR-179</a></li>
						<li><a href="recording.php?page=CO-180">CO-180</a></li>
						<li><a href="recording.php?page=KS-181">KS-181</a></li>
						<li><a href="recording.php?page=OR-182">OR-182</a></li>
						<li><a href="recording.php?page=KS-183">KS-183</a></li>
						<li><a href="recording.php?page=CO-184">CO-184</a></li>
						<li><a href="recording.php?page=CO-185">CO-185</a></li>
						<li><a href="recording.php?page=KS-186">KS-186</a></li>
						<li><a href="recording.php?page=KS-187">KS-187</a></li>
						<li><a href="recording.php?page=CO-188">CO-188</a></li>
						<li><a href="recording.php?page=CO-189">CO-189</a></li>
						<li><a href="recording.php?page=OR-190">OR-190</a></li>
						<li><a href="recording.php?page=OR-191">OR-191</a></li>
						<li><a href="recording.php?page=OR-192">OR-192</a></li>
						<li><a href="recording.php?page=CO-193">CO-193</a></li>
						<li><a href="recording.php?page=CO-194">CO-194</a></li>
						<li><a href="recording.php?page=CO-195">CO-195</a></li>
						<li><a href="recording.php?page=CO-196">CO-196</a></li>
						<li><a href="recording.php?page=CO-197">CO-197</a></li>
						<li><a href="recording.php?page=CO-198">CO-198</a></li>
						<li><a href="recording.php?page=CO-199">CO-199</a></li>
						<li><a href="recording.php?page=CO-200">CO-200</a></li>
						<li><a href="recording.php?page=OR-201">OR-201</a></li>
						<li><a href="recording.php?page=ID-202">ID-202</a></li>
						<li><a href="recording.php?page=CO-203">CO-203</a></li>
						<li><a href="recording.php?page=CO-204">CO-204</a></li>
						<li><a href="recording.php?page=CO-205">CO-205</a></li>
						<li><a href="recording.php?page=CO-206">CO-206</a></li>
						<li><a href="recording.php?page=OR-207">OR-207</a></li>
						<li><a href="recording.php?page=CO-208">CO-208</a></li>
						<li><a href="recording.php?page=CO-209">CO-209</a></li>
						<li><a href="recording.php?page=CO-210">CO-210</a></li>
						<li><a href="recording.php?page=CO-211">CO-211</a></li>
						<li><a href="recording.php?page=CO-212">CO-212</a></li>
						<li><a href="recording.php?page=CO-213">CO-213</a></li>
						<li><a href="recording.php?page=CO-214">CO-214</a></li>
						<li><a href="recording.php?page=CO-215">CO-215</a></li>
						<li><a href="recording.php?page=CO-216">CO-216</a></li>
						<li><a href="recording.php?page=CO-217">CO-217</a></li>
						<li><a href="recording.php?page=CO-218">CO-218</a></li>
						<li><a href="recording.php?page=ID-219">ID-219</a></li>
						<li><a href="recording.php?page=ID-220">ID-220</a></li>
						<li><a href="recording.php?page=CO-221">CO-221</a></li>
						<li><a href="recording.php?page=CO-222">CO-222</a></li>
						<li><a href="recording.php?page=ID-223">ID-223</a></li>
						<li><a href="recording.php?page=CO-224">CO-224</a></li>
						<li><a href="recording.php?page=MT-225">MT-225</a></li>
						<li><a href="recording.php?page=OR-226">OR-226</a></li>
						<li><a href="recording.php?page=OR-227">OR-227</a></li>
						<li><a href="recording.php?page=CO-228">CO-228</a></li>
						<li><a href="recording.php?page=CO-229">CO-229</a></li>
						<li><a href="recording.php?page=CO-230">CO-230</a></li>
						<li><a href="recording.php?page=WY-231">WY-231</a></li>
						<li><a href="recording.php?page=CO-232">CO-232</a></li>
						<li><a href="recording.php?page=CO-233">CO-233</a></li>
						<li><a href="recording.php?page=WY-234">WY-234</a></li>
						<li><a href="recording.php?page=WY-235">WY-235</a></li>
						<li><a href="recording.php?page=WY-236">WY-236</a></li>
						<li><a href="recording.php?page=MT-238">MT-238</a></li>
						<li><a href="recording.php?page=OR-239">OR-239</a></li>
						<li><a href="recording.php?page=WY-240">WY-240</a></li>
						<li><a href="recording.php?page=CO-241">CO-241</a></li>
						<li><a href="recording.php?page=WY-242">WY-242</a></li>
						<li><a href="recording.php?page=MT-243">MT-243</a></li>
						<li><a href="recording.php?page=WY-244">WY-244</a></li>
						<li><a href="recording.php?page=WY-245">WY-245</a></li>
						<li><a href="recording.php?page=OR-246">OR-246</a></li>
						<li><a href="recording.php?page=WY-247">WY-247</a></li>
						<li><a href="recording.php?page=WY-248">WY-248</a></li>
						<li><a href="recording.php?page=OR-249">OR-249</a></li>
						<li><a href="recording.php?page=WY-250">WY-250</a></li>
						<li><a href="recording.php?page=WY-251">WY-251</a></li>
						<li><a href="recording.php?page=WY-252">WY-252</a></li>
						<li><a href="recording.php?page=WY-253">WY-253</a></li>
						<li><a href="recording.php?page=WY-254">WY-254</a></li>
						<li><a href="recording.php?page=ID-255">ID-255</a></li>
						<li><a href="recording.php?page=CO-256">CO-256</a></li>
						<li><a href="recording.php?page=WY-257">WY-257</a></li>
						<li><a href="recording.php?page=WY-258">WY-258</a></li>
						<li><a href="recording.php?page=WY-259">WY-259</a></li>
						<li><a href="recording.php?page=WY-260">WY-260</a></li>
						<li><a href="recording.php?page=WY-261">WY-261</a></li>
						<li><a href="recording.php?page=WY-262">WY-262</a></li>
						<li><a href="recording.php?page=WY-263">WY-263</a></li>
						<li><a href="recording.php?page=WY-264">WY-264</a></li>
						<li><a href="recording.php?page=WY-265">WY-265</a></li>
						<li><a href="recording.php?page=WY-266">WY-266</a></li>
						<li><a href="recording.php?page=WY-267">WY-267</a></li>
						<li><a href="recording.php?page=MT-268">MT-268</a></li>
						<li><a href="recording.php?page=MT-269">MT-269</a></li>
						<li><a href="recording.php?page=MT-270">MT-270</a></li>
						<li><a href="recording.php?page=MT-271">MT-271</a></li>
						<li><a href="recording.php?page=MT-272">MT-272</a></li>
						<li><a href="recording.php?page=ID-273">ID-273</a></li>
						<li><a href="recording.php?page=WY-274">WY-274</a></li>
						<li><a href="recording.php?page=MT-275">MT-275</a></li>
						<li><a href="recording.php?page=MT-276">MT-276</a></li>
						<li><a href="recording.php?page=MT-277">MT-277</a></li>
						<li><a href="recording.php?page=MT-278">MT-278</a></li>
						<li><a href="recording.php?page=OR-279">OR-279</a></li>
						<li><a href="recording.php?page=CO-280">CO-280</a></li>
						<li><a href="recording.php?page=MT-281">MT-281</a></li>
						<li><a href="recording.php?page=KS-282">KS-282</a></li>
						<li><a href="recording.php?page=MT-283">MT-283</a></li>
						<li><a href="recording.php?page=CO-284">CO-284</a></li>
						<li><a href="recording.php?page=MT-285">MT-285</a></li>
						<li><a href="recording.php?page=MT-286">MT-286</a></li>
						<li><a href="recording.php?page=MT-287">MT-287</a></li>
						<li><a href="recording.php?page=MT-288">MT-288</a></li>
						<li><a href="recording.php?page=MT-289">MT-289</a></li>
						<li><a href="recording.php?page=MT-290">MT-290</a></li>
						<li><a href="recording.php?page=MT-291">MT-291</a></li>
						<li><a href="recording.php?page=MT-292">MT-292</a></li>
						<li><a href="recording.php?page=OR-293">OR-293</a></li>
						<li><a href="recording.php?page=MT-294">MT-294</a></li>
						<li><a href="recording.php?page=OR-295">OR-295</a></li>
						<li><a href="recording.php?page=MT-296">MT-296</a></li>
						<li><a href="recording.php?page=MT-297">MT-297</a></li>
						<li><a href="recording.php?page=ID-298">ID-298</a></li>
						<li><a href="recording.php?page=ID-299">ID-299</a></li>
						<li><a href="recording.php?page=OR-300">OR-300</a></li>
						<li><a href="recording.php?page=ID-302">ID-302</a></li>
						<li><a href="recording.php?page=ID-303">ID-303</a></li>
						<li><a href="recording.php?page=ID-304">ID-304</a></li>
						<li><a href="recording.php?page=ID-305">ID-305</a></li>
						<li><a href="recording.php?page=ID-307">ID-307</a></li>
						<li><a href="recording.php?page=ID-308">ID-308</a></li>
						<li><a href="recording.php?page=ID-309">ID-309</a></li>
						<li><a href="recording.php?page=ID-310">ID-310</a></li>
						<li><a href="recording.php?page=OR-311">OR-311</a></li>
						<li><a href="recording.php?page=OR-312">OR-312</a></li>
						<li><a href="recording.php?page=OR-313">OR-313</a></li>
						<li><a href="recording.php?page=OR-314">OR-314</a></li>
						<li><a href="recording.php?page=WY-316">WY-316</a></li>
						<li><a href="recording.php?page=CO-317">CO-317</a></li>
						<li><a href="recording.php?page=WY-321">WY-321</a></li>
						<li><a href="recording.php?page=ID-323">ID-323</a></li>
						<li><a href="recording.php?page=OR-324">OR-324</a></li>
						<li><a href="recording.php?page=OR-325">OR-325</a></li>
						<li><a href="recording.php?page=CO-326">CO-326</a></li>
						<li><a href="recording.php?page=OR-327">OR-327</a></li>
						<li><a href="recording.php?page=OR-328">OR-328</a></li>
						<li><a href="recording.php?page=OR-329">OR-329</a></li>
						<li><a href="recording.php?page=OR-330">OR-330</a></li>
						<li><a href="recording.php?page=OR-331">OR-331</a></li>
						<li><a href="recording.php?page=OR-332">OR-332</a></li>
						<li><a href="recording.php?page=OR-333">OR-333</a></li>
						<li><a href="recording.php?page=OR-334">OR-334</a></li>
						<li><a href="recording.php?page=OR-336">OR-336</a></li>
						<li><a href="recording.php?page=OR-337">OR-337</a></li>
						<li><a href="recording.php?page=OR-338">OR-338</a></li>
						<li><a href="recording.php?page=OR-339">OR-339</a></li>
						<li><a href="recording.php?page=OR-341">OR-341</a></li>
						<li><a href="recording.php?page=OR-342">OR-342</a></li>
						<li><a href="recording.php?page=OR-343">OR-343</a></li>
						<li><a href="recording.php?page=ID-344">ID-344</a></li>
						<li><a href="recording.php?page=OR-345">OR-345</a></li>
						<li><a href="recording.php?page=OR-346">OR-346</a></li>
						<li><a href="recording.php?page=OR-347">OR-347</a></li>
						<li><a href="recording.php?page=MT-348">MT-348</a></li>
						<li><a href="recording.php?page=OR-350">OR-350</a></li>
						<li><a href="recording.php?page=ID-351">ID-351</a></li>
						<li><a href="recording.php?page=OR-352">OR-352</a></li>
						<li><a href="recording.php?page=OR-353">OR-353</a></li>
						<li><a href="recording.php?page=OR-354">OR-354</a></li>
						<li><a href="recording.php?page=OR-355">OR-355</a></li>
						<li><a href="recording.php?page=OR-356">OR-356</a></li>
						<li><a href="recording.php?page=OR-357">OR-357</a></li>
						<li><a href="recording.php?page=OR-358">OR-358</a></li>
						<li><a href="recording.php?page=OR-359">OR-359</a></li>
						<li><a href="recording.php?page=OR-360">OR-360</a></li>
						<li><a href="recording.php?page=OR-361">OR-361</a></li>
						<li><a href="recording.php?page=OR-362">OR-362</a></li>
						<li><a href="recording.php?page=OR-363">OR-363</a></li>
						<li><a href="recording.php?page=OR-364">OR-364</a></li>
						<li><a href="recording.php?page=OR-365">OR-365</a></li>
						<li><a href="recording.php?page=OR-366">OR-366</a></li>
						<li><a href="recording.php?page=OR-367">OR-367</a></li>
						<li><a href="recording.php?page=OR-368">OR-368</a></li>
						<li><a href="recording.php?page=OR-369">OR-369</a></li>
						<li><a href="recording.php?page=OR-370">OR-370</a></li>
						<li><a href="recording.php?page=OR-371">OR-371</a></li>
						<li><a href="recording.php?page=OR-372">OR-372</a></li>
						<li><a href="recording.php?page=OR-373">OR-373</a></li>
						<li><a href="recording.php?page=OR-374">OR-374</a></li>
						<li><a href="recording.php?page=OR-375">OR-375</a></li>
						<li><a href="recording.php?page=OR-376">OR-376</a></li>
						<li><a href="recording.php?page=OR-377">OR-377</a></li>
						<li><a href="recording.php?page=OR-378">OR-378</a></li>
						<li><a href="recording.php?page=OR-379">OR-379</a></li>
						<li><a href="recording.php?page=OR-381">OR-381</a></li>
						<li><a href="recording.php?page=WY-237">WY-237</a></li>	
					</ul>
				</div><!--number-list-->
				
				
				
				
				
				<div id="species-list" class="index">
					<h2>search recordings by species</h2>
					<p>From the Atlantic to the Pacific, choose any particular species that you’d like to listen to. Each listening opportunity is coded by state (VA for Virginia to OR for Oregon), and by the recording number as referenced in the text of the book Listening to a Continent Sing, Birdsong by Bicycle from the Atlantic to the Pacific. (Numbers in parentheses refer to recordings in which the species can be heard in the background; e.g., the Canada goose can be plainly heard in the background of the rock wren in WY-274).</p>
					<ul class="collapser">
						<?php include('birds/search-species.html');?>
					<!-- 	<li><a href="#">Ducks, geese</a></li>
						<li><a href="#">Quail, grouse, pheasants</a></li>
						<li><a href="#">Grebes</a></li>			
						<li><a href="#">Osprey, hawks</a></li>
						<li><a href="#">Rails, cranes</a></li>
							<li><a href="#"><span class="i-plus-circle"></span> Shorebirds, gulls, guillemots</a>
							<ul class="show-hide">
								<li><em>Haematopidae</em>
									<ul>
										<li>Black oystercatcher <a href="recording.php">(OR-379)</a></li>
									</ul>
								</li>
								<li><em>Charadriidae</em>
									<ul>
										<li>Killdeer <a href="recording.php">VA-136</a></li>
									</ul>
								</li>
								<li><em>Scolopacidae</em>	
									<ul>
										<li>Spotted sandpiper <a href="recording.php">(WY-266)</a></li>
										<li>Willet <a href="recording.php">(VA-8)</a>, <a href="recording.php">(WY-274)</a>, <a href="recording.php">(OR-342)</a></li>
										<li>Upland sandpiper <a href="recording.php">KS-171</a></li>
										<li>Wilson’s snipe <a href="recording.php">CO-218</a>, <a href="recording.php">MT-276</a>, <a href="recording.php">MT-283</a></li>
										<li>American woodcock <a href="recording.php">(VA-35)</a></li>
									</ul>
								</li>
								<li><em>Alcidae</em>
									<ul>
											<li>Pigeon guillemot <a href="recording.php">(OR-379)</a></li>
										</ul>
									</li>
									<li><em>Laridae</em>
										<ul>
											<li>Laughing gull <a href="recording.php">(VA-6)</a>, <a href="recording.php">VA-8</a></li>
											<li>Western gull <a href="recording.php">OR-379</a></li>
										</ul>
									</li>
								</ul>
							
							</li>	 -->			
					</ul>
				</div><!--species-list-->
				
				
				

				<div id="state-list" class="index">
					<h2>search recordings by state</h2>
					<p>Sweep the continent on the TransAm bicycle route from Virginia to Oregon, through ten states, and pick where you want to listen. You can start on the Atlantic in Historical, coastal Virginia and head west all the way to the Pacific Coast in Oregon. </p>
					<p>Here’s a quick index of your listening locations:</p>
					<ul class="collapser">
						<?php include("./birds/search-location.html"); ?>
					<!-- 	<li><a href="#"><span class="i-plus-circle"></span> Historical, coastal Virginia</a>
							<ul class="show-hide">
								<li>Laughing gull <a href="recording.php">VA-8</a></li>
								<li>Willet <a href="recording.php">(VA-8)</a></li>
								<li>Mourning dove (VA-25)</li>
								<li>Fish crow (VA-1), VA-7</li>
								<li>Purple martin (VA-18)</li>
								<li>Tufted titmouse VA-4</li>
								<li>Carolina wren VA-5</li>
								<li>Blue-gray gnatcatcher VA-24, VA-25</li>
								<li>American robin VA-1</li>
								<li>Gray catbird (VA-22)</li>
								<li>Northern mockingbird (VA-7), VA-29</li>
								<li>Common yellowthroat VA-22</li>
								<li>Chipping sparrow VA-14, VA-15</li>
								<li>Field sparrow VA-19, VA-20, VA-21</li>
								<li>Seaside sparrow VA-6</li>
								<li>White-throated sparrow VA-17</li>
								<li>Summer tanager (VA-21), VA-23</li>
								<li>Charles Haupt VA-18</li>
							</ul>
						</li>
						<li><a href="#">Eastern Virginia, from History to the Blue Ridge</a></li>
						<li><a href="#">Blue Ridge Parkway, Virginia </a></li>
						<li><a href="#">Mt. Rogers and Highlands of Virginia </a></li>
						<li><a href="#">Appalachia, Virginia and Kentucky </a></li>
						<li><a href="#">Central and Western Kentucky</a></li>
						<li><a href="#">Illinois (Shawnee National Forest)</a></li>
						<li><a href="#">Illinois (Ferne Clyffe State Park)</a></li>
						<li><a href="#">Illinois (beside the Mississippi River)</a></li>
						<li><a href="#">Ozarks of Missouri</a></li>
						<li><a href="#">Prairie State Park, Missouri</a></li>
						<li><a href="#">Kansas</a></li>
						<li><a href="#">Short grass prairie, Kansas and Colorado</a></li>
						<li><a href="#">Climbing the Rockies, Colorado</a></li>
						<li><a href="#">Sage country, Colorado and Wyoming</a></li>
						<li><a href="#">Grand Teton National Park, Wyoming</a></li>
						<li><a href="#">Yellowstone National Park, Wyoming</a></li>
						<li><a href="#">Montana (general)</a></li>
						<li><a href="#">Big Hole National Battlefield, and Chief Joseph Pass, Montana</a></li>
						<li><a href="#">Idaho</a></li>
						<li><a href="#">Hell’s Canyon, Idaho and Oregon</a></li>
						<li><a href="#">Eastern Oregon</a></li>
						<li><a href="#">Over the Cascades, Oregon</a></li>
						<li><a href="#">Homecoming, in Willamette Valley of Oregon</a></li>
						<li><a href="#">Pacific coast, Oregon</a></li> -->
					</ul>
				</div><!--state-list-->
				
				
				
				<div id="dawn-chorus-list" class="index">
					<h2>listen to the dawn chorus</h2>
					<p>Surf the wave of dawn’s first light and birdsong across the continent, listening to how birds greet each new day. 
					I offer two ways that you might want to explore the dawn chorus.</p>
					<p>You can use the <strong>Quick index by state</strong> to immerse yourself in the dawn chorus in any state of your choice, from Virginia to Oregon. Or try the <strong>Index by species</strong>. Listen to how eastern species pass the torch to their western cousins. Check out the tanagers, or Empidonax flycatchers, or warblers, for example.</p>
					
					
					<h3>Quick index by state</h3>
					
					
					<ul class="collapser">
						<?php include('./birds/search-dc-states.html');?>

						<!-- <li><a href="#">Virginia</a></li>
						<li><a href="#"><span class="i-plus-circle"></span> Kentucky</a>
							<ul class="show-hide">
								<li>Eastern wood-pewee, KY-144</li>
								<li>Willow flycatcher, KY-82</li>
								<li>Great created flycatcher, KY-128</li>
								<li>Eastern bluebird, KY-72</li>
								<li>Northern mockingbird, KY-105</li>
								<li>American redstart, KY-75</li>
								<li>Yellow-breasted chat, KY-86</li>
								<li>House finch, KY-120</li>
							</ul>
						</li>
						<li><a href="#">Illinois</a></li>
						<li><a href="#">Missouri</a></li>
						<li><a href="#">Kansas</a></li>
						<li><a href="#">Colorado</a></li>
						<li><a href="#">Wyoming</a></li>
						<li><a href="#">Montana</a></li>
						<li><a href="#">Idaho</a></li>
						<li><a href="#">Oregon</a></li> -->
					</ul>
				
					<h3>Quick index by species</h3>
				 
					<ul class="collapser">
						<?php include('./birds/search-species.html');?>
					<!-- 	<li><a href="#">Rails</a></li>
						<li><a href="#">Owls</a></li>
						<li><a href="#"><span class="i-plus-circle"></span> Nightjars</a>
							<ul class="show-hide">
								<li>Common nighthawk, OR-170</li>
								<li>Chuck-will’s-widow, IL-127</li>
								<li>Eastern whip-poor-will, VA-37</li>
							
							</ul>
						</li>
						<li><a href="#">Flycatchers</a></li>
						<li><a href="#">Vireos</a></li>
						<li><a href="#">Larks</a></li>
						<li><a href="#">Swallows</a></li>
						<li><a href="#">Chickadees, titmouse</a></li>
						<li><a href="#">Wrens</a></li>
						<li><a href="#">Gnatcatchers</a></li>
						<li><a href="#">Thrushes</a></li>
						<li><a href="#">Mockingbirds, catbirds, thrashers</a></li>
						<li><a href="#">Warblers</a></li>
						<li><a href="#">Sparrows</a></li>
						<li><a href="#">Cardinals, tanagers, grosbeaks, buntings</a></li>
						<li><a href="#">Blackbirds</a></li>
						<li><a href="#">Finches</a></li>
						<li><a href="#">House sparrow</a></li> -->
					
					</ul>
				
				</div><!--dawn-chorus-list-->
				
				
			</div><!--indices-->
			
		</div><!--content-->
		
		<footer class="wrap">
			<p>&copy;2015 Donald Kroodsma. Web design by <a href="http://www.ehwdesign.com" target="_blank">EHW Design.</a></p>
		</footer>
			

	</body>
</html>