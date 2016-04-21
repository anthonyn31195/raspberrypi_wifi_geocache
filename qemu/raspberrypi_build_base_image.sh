#!/bin/bash -xv

IMAGE_DIR=../image

ZIP_IMAGE=../../2016-03-18-raspbian-jessie.zip

IMAGE=$IMAGE_DIR/`basename $ZIP_IMAGE .zip`.img

QCOW2_IMAGE=$IMAGE_DIR/`basename $ZIP_IMAGE .zip`.qcow2

MOUNT=/tmp/`basename $ZIP_IMAGE .zip`

IMAGE_SIZE=+10G

if [ ! -d $IMAGE_DIR ] ; then
  mkdir $IMAGE_DIR
fi

if [ ! -d "$MOUNT" ] ; then
  mkdir $MOUNT
fi

if [ ! -f "$ZIP_IMAGE" ] ; then
  exit
fi

if [ ! -f "$IMAGE" ] ; then
  unzip -d $IMAGE_DIR $ZIP_IMAGE
  #qemu-img resize $IMAGE $IMAGE_SIZE
fi

if [ -f "$IMAGE" ] ; then
  OFFSITE=`fdisk $IMAGE | awk '/img2/ {print $2*512}'`
fi

if [ ! -d "$MOUNT" ] ; then
  mkdir $MOUNT
fi

if [ -n "$OFFSITE" ] ; then
  sudo mount -o loop,offset=$OFFSITE $IMAGE $MOUNT
fi

sudo sed -i 's/^/#/' $MOUNT/etc/ld.so.preload


cat > /tmp/90-qemu.rules <<EOD
KERNEL=="sda", SYMLINK+="mmcblk0"
KERNEL=="sda?", SYMLINK+="mmcblk0p%n"
KERNEL=="sda2", SYMLINK+="root"
EOD
sudo mv /tmp/90-qemu.rules $MOUNT/etc/udev/rules.d/90-qemu.rules

sudo umount $MOUNT

exit
if [ ! -f "$QCOW2_IMAGE" ] ; then
  qemu-img convert -f raw -O qcow2 $IMAGE $QCOW2_IMAGE
fi

