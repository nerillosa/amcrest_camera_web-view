/dev/sda1: LABEL="Hard Drive" UUID="E804EA2E04EA0004" TYPE="ntfs" PARTUUID="13eb13ea-01"

UUID=E804EA2E04EA0004 /teradrive ntfs defaults,auto,rw,nofail 0 1

sudo umount /media/pi/Hard\ Drive
sudo mkdir /teradrive
sudo nano /etc/fstab and add this line:
UUID=E804EA2E04EA0004 /teradrive ntfs defaults,auto,rw,nofail 0 1

Gett UUID for /dev/sda1 from :  sudo blkid

sudo mount /teradrive
ln -s /teradrive jennifer

find jennifer/files/AMC00077_E4948E -regex '.*\.jpg' | grep 2020-05-30
cd ~/jennifer/files/AMC00077_E4948E
cp -R 2020-07* ~/jennifer/files/backup
find jennifer/files/backup/ -name '*.idx' | xargs rm -rf
cp -R jennifer/files/AMC00077_E4948E/2020-07-09 jennifer/files/backup/
rm -rf jennifer/files/AMC00077_E4948E/2020-07-0?

pi@raspberrypi:~ $ sudo mount /yolidrive

for php and nginx to read usb files:
sudo chmod 755 /media/pi
sudo ln -s /yolidrive/files/AMC00077_E4948E files_current
/var/www/html/index.html
find /media/pi/E398-CC3A/files2022/2022-12-31 -name '*.idx' | xargs rm -rf
cp -R jennifer/files/AMC00077_E4948E/2022-11-0[123456789] /media/pi/E398-CC3A/files2022
df -H /media/pi/E398-CC3A
df -H /yolidrive
cp -R jennifer/files/AMC00077_E4948E/2022-12-2[0123456789] /media/pi/E398-CC3A/files2022
cp -R jennifer/files/AMC00077_E4948E/2023-02-[012][0123456789] jennifer/files/files2023
find /media/pi/E398-CC3A/files2022/2022-12-2[0123456789] -name '*.idx' | xargs rm -rf
