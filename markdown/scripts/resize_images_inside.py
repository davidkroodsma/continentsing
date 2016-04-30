import PIL
from PIL import Image

from os import listdir
from os.path import isfile, join

mypath = "../look_inside_images/"
mypathout = "../look_inside_images/"

onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
basewidth = 450
for f in onlyfiles:
	if ".jpg" in f:

		img = Image.open(mypath+f)
		if img.size[0] > img.size[1]:
			wpercent = (basewidth / float(img.size[0]))
			hsize = int((float(img.size[1]) * float(wpercent)))
			img = img.resize((basewidth, hsize), PIL.Image.ANTIALIAS)
			img.save(mypathout+f)
		else:
			baseheight = basewidth
			hpercent = (baseheight / float(img.size[1]))
			wsize = int((float(img.size[0]) * float(hpercent)))
			img = img.resize((wsize, baseheight), PIL.Image.ANTIALIAS)
			img.save(mypathout+f)