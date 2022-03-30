import requests
import time
from gpiozero import MCP3008
import json
import datetime
import mysql.connector
from datetime import datetime
import RPi.GPIO as GPIO
import time


GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.IN)
push = 0

def switchCounter(push_count):
    cur_status = False

    # scan GPIO11 LOW or HI every 0.1sec,
    status = GPIO.input(17)


    # check change status
    if cur_status != status:
        if status == True:
            print ('switch on')
            push_count += 1
        else:
            print ('switch off')
        cur_status = status
        print(cur_status)

        # wait 0.6sec
    time.sleep(0.6)
    return push_count

while True:
    push=switchCounter(push)
    print(push)