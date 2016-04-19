#!/bin/bash -xv
KERNEL_DIR=../../qemu-rpi-kernel
KERNEL=kernel-qemu-4.1.13-jessie
IMAGE=2016-03-18-raspbian-jessie.img
IMAGE_DIR=../image
IMAGE_FORMAT=raw

if [ ! -f "$KERNEL_DIR/$KERNEL" ] ; then
  exit
fi

if [ ! -f "$IMAGE_DIR/$IMAGE" ] ; then
  exit
fi

qemu-system-arm -kernel $KERNEL_DIR/$KERNEL \
  -cpu arm1176 \
  -m 256 \
  -M versatilepb \
  -no-reboot \
  -append "root=/dev/sda2 panic=0 rootfstype=ext4 rw init=/bin/bash" \
  -hda $IMAGE_DIR/$IMAGE

#  -serial stdio \
#  -append "root=/dev/sda2 panic=0 rootfstype=ext4 rw init=/bin/bash" \
