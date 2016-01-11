import PIL
from PIL import Image


from os import listdir
from os.path import isfile, join

mypath = "../images/"

onlyfiles = [f for f in listdir(mypath) if isfile(join(mypath, f))]
basewidth = 271
for f in onlyfiles:
	if ".jpg" in f:
		img = Image.open(mypath+f)
		wpercent = (basewidth / float(img.size[0]))
		hsize = int((float(img.size[1]) * float(wpercent)))
		img = img.resize((basewidth, hsize), PIL.Image.ANTIALIAS)
		img.save(mypath+f)