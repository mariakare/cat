import time

from gpiozero import MCP3008


#converts measured value into kg
def convert_temp(gen):
    for value in gen:
        #yield (value/1024)*3.3
        yield 7.2-value*25

adc = MCP3008(channel=0)

for temp in convert_temp(adc.values):
    print('The weight is', temp, 'kg')
    time.sleep(1)





