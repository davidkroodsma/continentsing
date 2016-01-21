import csv

sourcedir = ''
filename = "SpeciesLocations.csv"

keys = {}
species = {}
taxon = {}
ts = []

states = {}
s_ordered = ['Virginia','Kentucky','Illinois','Missouri','Kansas','Colorado','Wyoming','Montana','Idaho','Oregon']
s_ab = {}

s_ab['VA']= 'Virginia'
s_ab['KY']= 'Kentucky'
s_ab["IL"]= 'Illinois'
s_ab['MO']= 'Missouri'
s_ab["KS"]= 'Kansas'
s_ab['CO']= 'Colorado'
s_ab['WY']= 'Wyoming'
s_ab["MT"]= 'Montana'
s_ab['ID']= 'Idaho'
s_ab['OR']= 'Oregon'

locations = []
location_key = {}



key_to_location = {}
key_to_taxon = {}
key_to_species = {}

taxon_long_to_taxon_short = {}

def remove_bad_char(st):
    while st[-1] == ' ' and len(st)>1: #stupid space at end
        st = st[:-1]
    return  st.replace("\u2018", "'").replace("\u2019", "'").replace("\u201c",'"').replace("\u201d", '"').replace('\u2014',"--").replace('\xef',"'").replace('\xd5',"'")

def convert_to_tag(st):
    while st[-1] == ' ' and len(st)>1: #stupid space at end
        st = st[:-1]
    return st.replace(" ","_").replace(",","").replace("(","").replace(")","").replace('"',"").replace("'","").lower()


with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        tg = remove_bad_char(row['Taxon group--full length from "Web--Listen by species" for LISTEN BY SPECIES web page'])
        if tg not in taxon:
            taxon[tg]={}
            ts.append(tg)
        fn = remove_bad_char(row['Family Name'])
        bn = remove_bad_char(row['Species only (deleted all recording info from column E)'])
        while bn[-1] == ' ' and len(bn)>1: #stupid space at end
            bn = bn[:-1]
        if fn not in taxon[tg]:
            taxon[tg][fn]=[]
        if bn not in taxon[tg][fn]:
            taxon[tg][fn].append(bn)
        if bn not in species:
            species[bn]={'primary':[],'secondary':[]}
        code = row['state-#']
        status = row['1 = primary; 2 = (bkgd)']
        if status == '1':
            species[bn]['primary'].append(code)
        if status == '2':
            species[bn]['secondary'].append(code)

        if code not in key_to_species:
            key_to_species[code] = []

        if bn not in key_to_species[code]:
            key_to_species[code].append(bn)

        #location

        loc = remove_bad_char(row['Location--full length from file "Web--Listen by state" for LISTEN BY STATE'])
        if loc not in locations:
            locations.append(loc)
            location_key[loc] = []
        if bn not in location_key[loc]:
            location_key[loc].append(bn)


        #state
        s_name = s_ab[code[:2].upper()]

        if s_name not in states:
            states[s_name]=[]
        if bn not in states[s_name]:
            states[s_name].append(bn)

        if s_name not in s_ordered:
            s_ordered.append(s_name)


        #location information for the sidebar
        side_loc = remove_bad_char(row['Location--shortened for first line of THIS RECORDING for 381 web pages'])
        key_to_location[code] = [loc,side_loc]

        t_short = remove_bad_char(row['Taxon group--shortened for 2nd line of THIS RECORDING on 381 web pages'])
        taxon_long_to_taxon_short[tg] = t_short

        if code not in key_to_taxon:
            key_to_taxon[code] = []

        if tg not in key_to_taxon[code]:
            key_to_taxon[code].append(tg)



f = open('../../birds/search-species.html','w')

for t in sorted(ts):
    s = '''<li><a href="#" id="'''+convert_to_tag(t)+'''"><span class="i-plus-circle"></span>'''+t+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    # sorted_taxons = sorted(taxon[t].iteritems())
    # print sorted_taxons
    # exit()
    for st in taxon[t]:
        s =  "    <li><em>"+st+"</em>\n      <ul>\n"
        f.write(s)
        # print taxon[t][st]
        birds = sorted(taxon[t][st])
        for b in birds:
            s = '        <li>'+b+' '
            for p in species[b]['primary']:
                s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
            for p in species[b]['secondary']:
                s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
            s = s[:-2] #cut off hte last comma and space
            s+=' </li>\n'
            f.write(s)
        f.write("      </ul>\n    </li>\n")
    f.write("  </ul>\n</li>")
f.close()


f = open('../../birds/search-location.html','w')

# for l in locations:
#     print l
#print location_key

for l in locations:
    s = '''<li><a href="#" id="'''+convert_to_tag(l)+'''"><span class="i-plus-circle"></span>'''+l+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    birds = sorted(location_key[l])
    # print birds
    for b in birds:
        s = '        <li>'+b+' '
        for p in species[b]['primary']:
            s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in species[b]['secondary']:
            s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off hte last comma and space
        s+=' </li>\n'
        f.write(s)
    f.write("  </ul>\n</li>\n")

f.close()


#now state names for the dawn chorus

f = open('../../birds/search-dc-states.html','w')

# for l in locations:
#     print l
#print location_key

for st in s_ordered:
    print st
    s = '''<li><a href="#" id="'''+convert_to_tag(st)+'''"><span class="i-plus-circle"></span>'''+st+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    birds = sorted(states[st])
    # print birds
    for b in birds:
        s = '        <li>'+b+' '
        for p in species[b]['primary']:
            s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in species[b]['secondary']:
            s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off hte last comma and space
        s+=' </li>\n'
        f.write(s)
    f.write("  </ul>\n</li>\n")

f.close()


for k in key_to_location:
    f= open('../../birds/thisrecording/'+k+".html","w")
    s = '''<li><a href="search.php?dropdown='''+ convert_to_tag(key_to_location[k][0])+'''#state-list"><span class="i-state"></span> '''+key_to_location[k][1] +'''</a></li>\n'''
    f.write(s)
    for l in key_to_taxon[k]:
         s = '''<li><a href="search.php?dropdown='''+convert_to_tag(l)+'''#species-list"><span class="i-bird"></span> '''+ taxon_long_to_taxon_short[l]+'''</a></li>\n'''
         f.write(s)

    f.close()
    #                <li><a href="search.php#species-list"><span class="i-bird"></span> Thrushes, <em>Turdidae</em></a></li>


for k in key_to_species:
    f= open('../../birds/relatedrecordings/'+k+".html","w")
    for b in key_to_species[k]:
        s = '        <li>'+b+' '
        for p in species[b]['primary']:
            s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in species[b]['secondary']:
            s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off hte last comma and space
        s+=' </li>\n'
        f.write(s)
    f.close()

#make files for this recording



