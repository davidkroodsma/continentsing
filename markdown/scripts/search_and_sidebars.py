import csv

def remove_bad_char(st):
    if len(st)>1:
        while st[-1] == ' ': # stupid space at end
            st = st[:-1]
            if len(st)<1:
                break

    return st.replace("\u2018", "'").replace("\u2019", "'").replace("\u201c",'"').replace("\u201d", '"').replace('\u2014',"--").replace('\xef',"'").replace('\xd5',"'")


def convert_to_tag(st):
    if len(st)>1:
        while st[-1] == ' ': # stupid space at end
            st = st[:-1]
            if len(st)<1:
                break
    return st.replace(" ", "_").replace(",", "").replace("(", "").replace(")", "").replace('"', "").replace("'", "").replace(".","").lower()


keys = {}
species = {}
# taxon is the dictionary of taxons, ts is a list of them
taxon = {}
ts = []

states = {}
s_ordered = ['Virginia', 'Kentucky', 'Illinois', 'Missouri','Kansas','Colorado', 'Wyoming', 'Montana', 'Idaho', 'Oregon']
s_ab = {}

s_ab['VA'] = 'Virginia'
s_ab['KY'] = 'Kentucky'
s_ab["IL"] = 'Illinois'
s_ab['MO'] = 'Missouri'
s_ab["KS"] = 'Kansas'
s_ab['CO'] = 'Colorado'
s_ab['WY'] = 'Wyoming'
s_ab["MT"] = 'Montana'
s_ab['ID'] = 'Idaho'
s_ab['OR'] = 'Oregon'

locations = []
location_key = {}

key_to_location = {}
key_to_taxon = {}
key_to_species = {}

taxon_long_to_taxon_short = {}



# get order of species, locations, and others:
sourcedir = ''
filename = "species_locations_order.csv"

location_order = {}
species_order = {}
species_group_order = {}

revise_locs = {}

with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        if row['state or geographic region']:
            loc = remove_bad_char(row['state or geographic region'])
            location_order[loc] = int(row['table organizer'])
            loc_reviesed = remove_bad_char(row["Revised state or geographic region"])
            revise_locs[loc]=loc_reviesed


        revise_locs[loc] = loc_reviesed
        if row['Species group']:
            species_group_order[remove_bad_char(row['Species group'])] = int(row['Rank of species group'])
        if row['Species']:
            species_order[remove_bad_char(row['Species'])] = int(row['Species rank'])


# read in the species locations

filename = "SpeciesLocations.csv"


with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        tg = remove_bad_char(row['Taxon group--full length from "Web--Listen by species" for LISTEN BY SPECIES web page'])
        if tg not in taxon:
            taxon[tg]={}
            ts.append(tg)
        fn = remove_bad_char(row['Family Name'])
        bn = remove_bad_char(row['Species only (deleted all recording info from column E)'])
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
            location_key[loc] = {}
        if bn not in location_key[loc]:
            location_key[loc][bn] = {'primary':[], 'secondary':[]}

        if status == '1':
            location_key[loc][bn]['primary'].append(code)
        if status == '2':
            location_key[loc][bn]['secondary'].append(code)


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

# sort by the species order
ts = sorted(ts, key = lambda taxon:species_group_order[taxon])
for t in ts:
    s = '''<li><a href="#" id="'''+convert_to_tag(t)+'''"><span class="i-plus-circle"></span>'''+t+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    # sorted_taxons = sorted(taxon[t].iteritems())
    # print sorted_taxons
    # exit()
    for st in taxon[t]:
        s = "    <li><em>"+st+"</em>\n      <ul>\n"
        f.write(s)
        # sort by the 
        birds = sorted(taxon[t][st], key = lambda bird:species_order[bird])
        for b in birds:
            s = '        <li>'+b+' '
            for p in species[b]['primary']:
                s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
            for p in species[b]['secondary']:
                s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
            s = s[:-2] #cut off the last comma and space
            s +=' </li>\n'
            f.write(s)
        f.write("      </ul>\n    </li>\n")
    f.write("  </ul>\n</li>")
f.close()


f = open('../../birds/search-location.html','w')

#sort locations by the correct order, using location_order
for l in sorted(location_key.keys(), key = lambda t:location_order[t]):
    s = '''<li><a href="#" id="'''+convert_to_tag(l)+'''"><span class="i-plus-circle"></span>'''+revise_locs[l]+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    # get the list of bird species for a given location, then sort by species order
    print location_key[l].keys()
    birds = sorted(location_key[l].keys(), key = lambda t:species_order[t])
    print birds
    for b in birds:
        s = '        <li>'+b+' '
        for p in location_key[l][b]['primary']:
            s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in location_key[l][b]['secondary']:
            s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off the last comma and space
        s+=' </li>\n'
        f.write(s)
    f.write("  </ul>\n</li>\n")

f.close()


#now state names for the dawn chorus


print "\n\n"
#read in the Dawn Chorus csv

dawn_chorus = []

filename = 'DawnChorus.csv'
pages_in_dc = []
with open(sourcedir + filename, 'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        dawn_chorus.append(row)
        pages_in_dc.append(row['recording'].replace(" ", ''))



f = open('../../birds/search-dc-states.html','w')
for st in s_ordered:
    s = '''<li><a href="#" id="'''+convert_to_tag(st)+'''"><span class="i-plus-circle"></span>'''+st+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    birds = []
    for row in dawn_chorus:
        if row['State'] == st:
            if remove_bad_char(row['species']) not in birds:
                birds.append(remove_bad_char(row['species']))    # print birds

    for b in sorted(birds, key = lambda t:species_order[t]):
        s = '        <li>'+b+' '
        for p in species[b]['primary']:
            if p in pages_in_dc and s_ab[p[:2]]==st: # has to be in dawn chorus recordings
                s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in species[b]['secondary']:
            if p in pages_in_dc and s_ab[p[:2]]==st: # has to be in dawn chorus recordings
                s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off hte last comma and space
        s+=' </li>\n'
        f.write(s)
    f.write("  </ul>\n</li>\n")

f.close()

# dawn chorus search by species

dawn_chorus = sorted(dawn_chorus, key=lambda k: int(k['Species group rank']))
dc_species = []
for d in dawn_chorus:
    if d['Species group for Quick index by species'] not in dc_species:
        dc_species.append(d['Species group for Quick index by species'])

# put the table back in order
dawn_chorus = sorted(dawn_chorus, key=lambda k: int(k['Table organizer']))

f = open('../../birds/search-dc-species.html', 'w')
for st in dc_species:
    s = '''<li><a href="#" id="'''+convert_to_tag(st)+'''"><span class="i-plus-circle"></span>'''+st+'''</a>\n  <ul class="show-hide">\n'''
    f.write(s)
    birds = []
    for row in dawn_chorus:
        if row['Species group for Quick index by species'] == st:
            if remove_bad_char(row['species']) not in birds:
                birds.append(remove_bad_char(row['species']))
    # print birds
    for b in sorted(birds, key = lambda t:species_order[t]):
        s = '        <li>'+b+' '
        for p in species[b]['primary']:
            if p in pages_in_dc: # has to be in dawn chorus recordings
                s += '<a href="recording.php?page='+p+'">'+p+'</a>, '
        for p in species[b]['secondary']:
            if p in pages_in_dc: # has to be in dawn chorus recordings
                s += '<a href="recording.php?page='+p+'">('+p+')</a>, '
        s = s[:-2] #cut off hte last comma and space
        s+=' </li>\n'
        f.write(s)
    f.write("  </ul>\n</li>\n")

f.close()



# Create Text for thislocation

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




