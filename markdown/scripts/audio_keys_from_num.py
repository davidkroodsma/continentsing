import csv

sourcedir = ''

filename = "audio_keys.csv"

keys = {}
order = {}

with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        k = row['Key'] 
        o = row['Order_on_Page']
        n = row['Number']
        keys[n] = k
        order[n] = str(o)



with open("../../keyarray_numbers.php", "w") as f:
    f.write('''<?php $key_array_num = array( \n''')
    for k in keys:
        f.write('"'+k+'" => "'+keys[k]+'",\n')
    f.write("); \n \n")

    f.write('''$key_array_order = array( \n''')
    for k in order:
        f.write('"'+k+'" => '+order[k]+',\n')
    f.write("); \n ")

    f.write("?>")


