import PIL
from PIL import Image
import markdown2
from os import listdir
from os.path import isfile, join

mypath = "../text_main/"
mypath_out = "../../birds/main/"
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
for f in onlyfiles:
	if ".md" in f:
		fi = open(mypath+f, "rU")
		data=fi.read()
		fi.close()
		web_text = markdown2.markdown(data)
		web_text = web_text.replace(u"\u2018", "'").replace(u"\u2019", "'").replace(u"\u201c",'"').replace(u"\u201d", '"').replace(u'\u2014',"--").replace(u'\xef',"'")
		web_text = web_text.replace(u'\xbd',"1/2")
		outfile = f.replace(".md","")
		outfile = outfile.upper() + ".html"
		fi = open(mypath_out+outfile, "w")
		fi.write(web_text)
		fi.close()



audio_text = '''
				<div id="audio">
					<audio controls <?php if($autoplay){echo 'autoplay';}?> >
						<?php $song = "birdsong/".$key_array[$page][$number].".mp3"; ?>
					    <source src="<?php echo $song; ?>" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
					<h5><a class="caps" href="<?php echo $song; $number++;?>"><span class="i-cloud-download"></span> Download the Recording</a> 
					</h5>	
				</div>
'''


mypath_out =  mypath = "../../birds/main/"
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
for f in onlyfiles:
	if ".html" in f:
		fi = open(mypath+f, "rU")
		lines = fi.readlines()
		fi.close()
		fi = open(mypath+f, "w")
		for line in lines:
			if 'PLAY BAR HERE' in line:
				line = audio_text
			fi.write(line)
		fi.close()




mypath = "../text_images/"
mypath_out = "../../birds/image_text/"
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
for f in onlyfiles:
	if ".md" in f:
		fi = open(mypath+f, "rU")
		data=fi.read()
		fi.close()
		web_text = markdown2.markdown(data)
		web_text = web_text.replace(u"\u2018", "").replace(u"\u2019", "").replace(u"\u201c","").replace(u"\u201d", "").replace(u'\u2014',"--").replace(u'\xef',"'")
		web_text = web_text.replace(u'\xbd',"1/2")
		web_text = web_text.replace("../images","images")
		outfile = f.replace(".md","")
		outfile = outfile.upper() + ".html"
		fi = open(mypath_out+outfile, "w")
		fi.write(web_text)
		fi.close()



header_text_toreplace = '''<h2><a href="search.php#species-list"><span class="i-bird"></span></a> BIRDNAME <span class="rec-number"><a href="search.php#number-list"><span class="i-number"></span></a> KEY</span></h2>				
				<h4 class="location"><span class="i-map-marker"></span> LOCATION</h4>
				<h4 class="date"><span class="i-calendar"></span> TIMEDATE</h4>
				<h4 class="sunrise"><span class="i-sun"></span> SUNRISE</h4>'''

replacing = ['KEY','BIRDNAME','LOCATION','TIMEDATE','SUNRISE','NOTHINGHERE','NOTHINGHERE']

mypath = "../text_header/"
mypath_out = "../../birds/header/"
onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
for f in onlyfiles:
	if "-" in f:
		fi = open(mypath+f, "rU")
		lines=fi.readlines()
		i = 0
		header_text = header_text_toreplace
		for line in lines:
			header_text = header_text.replace(replacing[i],line)
			i +=1
		fi = open(mypath_out+f.upper()+".txt", "w")
		fi.write(header_text)
		fi.close()


		