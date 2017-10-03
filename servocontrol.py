import time
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)
GPIO.setup(38,GPIO.OUT)
pwm=GPIO.PWM(38,50)

initial = 5
position = 5
x = 0

pwm.start(initial)
while True:
	f = open("phpcamdata.txt","r")
	x = f.read();
	y = int (x)
	
	position = position + y
	if position >11:
		position=11
	   
	if position <2:
		position= 2
	   
	if position != initial:
		pwm.ChangeDutyCycle(position)
		initial = position
		time.sleep(0.1)
		pwm.ChangeDutyCycle(0)
		print position
    

	f.close()              # Close the text file 
	time.sleep(0.8) 
	


