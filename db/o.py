import requests
import time
from gpiozero import MCP3008
import json
response = requests.get("https://studev.groept.be/api/a21ib2a03/measure/5/Mario/5.2")

def convert_temp(gen):
    for value in gen:
        yield value

adc = MCP3008(channel=0)

for temp in convert_temp(adc.values):
    print('The weight is', temp, 'kg')
    time. sleep(5)