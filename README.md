# Web-Camera-Automation Raspberry Pi3
With a web GUI, hoping to create a simple camera control while streaming the video. This can later be used as surveillance with additional features like motion tracking and alarms 

This project is broken into multiple components. So far it can be best described as three layers of a system. 

1) The Web-Interface (Top layer, client side)
2) Web based programing (Scripting languages like js and php)
3) Hardware control (Running various python scripts to control GPIO)

The server is also hosted on the Pi, Apache 2 webserver. It is a simple server that can handle both html and php as well as js. Along side the webserver a video streamer is also running, MJPG-streamer which is a command line tool to stream JPEG files over an IP=based network. It sometimes buggs out but can easily be restored by stopping/staring its service.

