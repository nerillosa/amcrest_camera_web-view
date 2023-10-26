# Amcrest camera web view.
Web page showing videos and pictures taken by the motion detecting [Amcrest ProHD 1080P](https://www.amazon.com/gp/product/B0145OQTPG?th=1) camera. 

A [raspberrypi](https://www.raspberrypi.com) (mini linux computer) hosts a web-site running [NGINX](https://techworldthink.github.io/Tech-Guides/pages/nginx_pi.html) (an open source web server) where you can scroll through specific days and times throughout the year(s) and view pics and videos. 

Allows you, among other things, to verify that packages were actually delivered and/or monitor any suspicious activity.
  
.  
![image](https://github.com/nerillosa/amcrest_camera_web-view/assets/4867918/769a5804-15cf-4de5-9959-3abb299556ce)



The [Amcrest ProHD 1080P](https://www.amazon.com/gp/product/B0145OQTPG?th=1) camera takes pictures and videos automatically on motion.


You can configure the camera to send files and videos to a local WiFi connection. You need to specify the FTP address and folder and username/password.
I used the same [raspberrypi](https://www.raspberrypi.com) running the web application as an ftp server in my local home LAN (192.168.0.3).


The camera will copy all the files (image and video) of a day in a named folder (Ex. 2023-04-02) under a parent folder called AMC00077_E4948E (this will vary and depend on the serial/model of your camera).


You need to mount [flashdrives](https://www.amazon.com/gp/product/B083ZLJ5MG/ref=ppx_yo_dt_b_search_asin_title?ie=UTF8&psc=1) with sufficient capacity to hold all the files. Files for a whole year amount to around 200 Gbytes.

By default for NGINX, the web application files are located at: /var/www/html. The main index.html file is powered by [angularjs](https://docs.angularjs.org/guide/introduction) technology.

  
Example file upload structure:  

![image](https://github.com/nerillosa/amcrest_camera_web-view/assets/4867918/7a63f265-ad5f-440c-a2db-cb076a226e2f)
  
