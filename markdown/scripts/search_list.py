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


# get order of species, locations, and others:
sourcedir = ''

filename = "SpeciesLocations.csv"

codes = []
birdnames = []

with open(sourcedir + filename,'rU') as f:
    reader = csv.DictReader(f, delimiter=',')
    for row in reader:
        bn = remove_bad_char(row['Species only (deleted all recording info from column E)'])
        code = row['state-#']
        birdnames.append(bn)
        codes.append(bn)


f = open('../../birds/search-list.html','w')


# sort by the species order
for c, b in zip(codes, birdnames):
    s = '<li><a href="recording.php?page='+c+'">'+c+'</a>: '+b+'</li>\n'
    f.write(s)
    # sorted_taxons = sorted(taxon[t].iteritems())
f.close()



