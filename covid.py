#!/usr/bin/env python3

import requests
import re
import json
import os

s = requests.Session()

url = s.get("https://api.kawalcorona.com/indonesia/provinsi/")
d = json.loads(url.content)
print("Masukan nilai 0-33 untuk mengetahui data provinsi")
cov = int(input('Masukan nilai : '))

print("\n")
print("Kode Provinsi : "+ str(d[cov]['attributes']['Kode_Provi']))
print("Provinsi : "+ str(d[cov]['attributes']['Provinsi']))
print("Positif : "+ str(d[cov]['attributes']['Kasus_Posi']))
print("Meninggal : "+ str(d[cov]['attributes']['Kasus_Meni']))
print("Sembuh : "+ str(d[cov]['attributes']['Kasus_Semb']))