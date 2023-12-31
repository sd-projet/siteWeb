import PIL.Image as Im
import os.path
from os import scandir
from PIL.ExifTags import GPSTAGS
from PIL.ExifTags import TAGS
from tkinter.filedialog import askopenfilename

TRAVEL = []
for e in scandir('../docs/photos'):
    if 'jpg' in e.name.lower():
        TRAVEL.append(e.name)
print(TRAVEL)

def get_exif(filename):
    """associer les tags réels aux données exif"""
    image = Im.open(filename)
    exif = image._getexif()
    image.close()

    if exif is not None:
        for key, value in exif.items():
            name = TAGS.get(key, key)
            exif[name] = exif.pop(key)

        if 'GPSInfo' in exif:
            for key in exif['GPSInfo'].keys():
                name = GPSTAGS.get(key,key)
                exif['GPSInfo'][name] = exif['GPSInfo'].pop(key)
    return exif

file = open("EXIF.txt", "w")
for e in TRAVEL:
    print(e, file=file)
    try:
        chemin = os.path.join(os.path.abspath("../docs/photos/"), e)
        print(chemin)
        datagps = get_exif(chemin)
        print(str(datagps['GPSInfo']), file=file)
    except (KeyError, TypeError):
        print("pas de données EXIF", file=file)

file.close()
