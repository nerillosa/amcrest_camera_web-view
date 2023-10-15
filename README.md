# amcrest_camera_web-view
Web view of videos and pictures taken by motion detecting amcrest camera.

  
![image](https://github.com/nerillosa/amcrest_camera_web-view/assets/4867918/d222713e-edef-43d5-84e7-437ba58a26a1)


The [Amcrest ProHD 1080P](https://www.amazon.com/gp/product/B0145OQTPG?th=1) camera takes pictures and videos automatically on motion.


You can configure the camera to send files and videos to a local WiFi connection. You need to specify the FTP address and folder and username/password.
I used a raspberrypi running an ftp service in my local home LAN (192.168.0.3).


The camera will copy all the files (image and video) of a day in a named folder (2023-04-02) under a parent folder called AMC00077_E4948E.


You need to mount flashdrives with sufficient capacity to hold all the files. Files for a whole year amount to around 200 Gbytes.

The raspberrypi also runs as a web server using nginx where you can scroll through specific days and times and view pics and videos.

The web application files are located at: /var/www/html.

  
Example file structure:  
  
![image](https://github.com/nerillosa/amcrest_camera_web-view/assets/4867918/6a08f2ad-7812-46e8-a556-3292819eec29)
