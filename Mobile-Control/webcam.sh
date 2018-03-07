#!/bin/bash

DATE=$(date +"%Y-%m-%d_%H%M")
sudo service motion stop
fswebcam -r 640x480 --no-banner /var/www/html/sm/webcam/$DATE.jpg
sudo service motion start