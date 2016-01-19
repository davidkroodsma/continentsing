import csv

sourcedir = ''

filename = "audio_keys.csv"

keys = {}

with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        k = row['Key'] 
        o = row['Order_on_Page']
        if k not in keys:
            keys[k] = 1
        else:
            keys[k] += 1
    print keys
    for k in keys:
        n = keys[k]
        keys[k] = [0 for i in range(n)]


with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
    	print row
        n = int(row['Order_on_Page']) - 1
        k = row['Key'] 
        keys[k][n] = row['Number']

print keys

with open("../../keyarray.php", "w") as f:
    f.write('''<?php $key_array = array( \n''')
    for k in keys:
        f.write('"'+k+'" => array(')
        for a in keys[k]:
            f.write('"'+a+'",')
        f.write("),\n")
    f.write("); ?>")

