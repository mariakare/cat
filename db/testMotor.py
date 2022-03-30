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

# set pin 3 as an output for motor
GPIO.setup(2, GPIO.OUT)
# set pin 11 as input of Hallsensor
GPIO.setup(17, GPIO.IN)

# pin 3 is set low in the beginning
GPIO.output(2, GPIO.LOW)

pwm = GPIO.PWM(2,1000)  # set pin 2 as a PWMpin and frequenty is 1000 Hz
pwm.start(0)

def turnMotor(feed, avWeight,Weight, average, section, count):
    feed=True
    push_count=0
    if feed:
        if avWeight > Weight:
            fraction = Weight / avWeight
        elif avWeight < Weight:
            fraction = -(avWeight / Weight)
        elif Weight == avWeight:
            fraction = 0
        # hall sensor timing for amount of food (formulae for food ifo weight)
        amount = average + fraction
        print(amount)
        if amount < 0.5:
            amount = 0.5
        #hallcounter = amount/section
        hallcounter =10
        cnt = count
        while push_count < hallcounter:
            push_count = switchCounter(push_count)
            pwm.ChangeDutyCycle(35.0)     # change dc to 75%
            GPIO.output(2, GPIO.HIGH)
            print("motor is turning")
            time.sleep(2)

        feed = False
        GPIO.output(2, GPIO.LOW)

    else:
        GPIO.output(2, GPIO.LOW)
        print("motor isn't turning")
        #time.sleep(1)
    GPIO.output(2, GPIO.LOW)

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

        # wait 0.5sec
    time.sleep(0.6)
    return push_count


i = turnMotor(True, 4.2, 4.5,1,0.05, 0)