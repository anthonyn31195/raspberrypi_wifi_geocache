#!/bin/bash -xv

qemu-system-arm -kernel kernel-qemu-4.1.13-jessie \
  -cpu arm1176 \
  -m 256 \
  -M versatilepb \
  -no-reboot \
  -serial stdio \
  -append "root=/dev/sda2 panic=1 rootfstype=ext4 rw init=/bin/bash" \
  -drive file=2016-03-18-raspbian-jessie.img,index=0,media=disk,format=raw 
