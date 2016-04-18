#!/bin/bash 
image=2016-03-18-raspbian-jessie.img
image=2016-03-18-raspbian-jessie.qcow2
kernel=kernel-qemu-4.1.13-jessie
format=raw
format=qcow2
date=`date +%Y-%m-%d-%H-%M-%S`
snapshot_dir=snapshot
snapshot=$snapshot_dir/$image-$date
snapshot=$image-$date

if [ ! -d "$snapshot_dir" ] ; then
  mkdir $snapshot_dir
fi

qemu-img create -f $format -b $image $snapshot 
if [ -f $snapshot ] ; then
  mv $snapshot $snapshot_dir
else
  exit
fi
if [ ! -f "$snapshot_dir/$image" ] ; then
  ln -s ../$image $snapshot_dir/$image
fi
qemu-system-arm -kernel $kernel \
  -cpu arm1176 \
  -m 256 \
  -M versatilepb \
  -no-reboot \
  -serial stdio \
  -snapshot \
  -append "root=/dev/sda2 panic=1 -no-reboot rootfstype=ext4 rw format=$format" \
  -drive file="$snapshot_dir/$snapshot",index=0,media=disk,format=$format \
  -net nic \
  -net user,hostfwd=tcp::2222-:22,hostfwd=tcp::22280-:80 \
  -pidfile raspberrypi.pid 
#  -daemonize
#  -serial stdio \
