#!/bin/bash 
IMAGE_DIR=../../RaspberryPI/
image_base=2016-03-18-raspbian-jessie.qcow2
image=$IMAGE_DIR/$image_base
kernel=$IMAGE_DIR/kernel-qemu-4.1.13-jessie
format=qcow2


qemu-system-arm -kernel $kernel \
  -cpu arm1176 \
  -m 256 \
  -M versatilepb \
  -no-reboot \
  -serial stdio \
  -append "root=/dev/sda2 panic=1 -no-reboot rootfstype=ext4 rw format=$format" \
  -drive file="$image",index=0,media=disk,format=$format \
  -net nic \
  -net user,hostfwd=tcp::2222-:22,hostfwd=tcp::22280-:80 \
  -pidfile raspberrypi.pid &
#  -daemonize
#  -serial stdio \
