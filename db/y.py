import requests
import json



with requests.Session() as s:
    s.get('https://studev.groept.be/api/a21ib2a03/Select_all')
    print(s)



