import csv

sourcedir = ''

filename = "audio_keys.csv"

keys = {}
order = {}

redirects = '''"315" => "OR-182",
"318" => "OR-190",
"319" => "MT-283",
"320" => "CO-218",
"322" => "WY-261",
"335" => "CO-256",
"340" => "OR-170",
"349" => "OR-300",
"380" => "OR-293",
"166" => "MO-165",
"167" => "MO-165",
"301" => "OR-300",
"306" => "ID-305"'''

redirects2 = '''
"315" => 1,
"318" => 1,
"319" => 1,
"320" => 1,
"322" => 1,
"335" => 1,
"340" => 1,
"349" => 1,
"380" => 1,
"166" => 1,
"167" => 1,
"301" => 1,
"306" => 1'''



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
    f.write(redirects)
    f.write("); \n \n")

    f.write('''$key_array_order = array( \n''')
    for k in order:
        f.write('"'+k+'" => '+order[k]+',\n')
    f.write("); \n ")

    f.write("?>")


