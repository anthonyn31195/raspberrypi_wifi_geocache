#!/bin/bash -xv
image=2016-03-18-raspbian-jessie.img
qcow2="`basename $image .img`.qcow2"
qemu-img convert -f raw -O qcow2 $image $qcow2
