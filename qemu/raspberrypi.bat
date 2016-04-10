Rem RaspberryPI QEMU startup script

Rem QUME exe 
set QEMU=qemu-system-arm.exe

Rem -kernel
set KERNEL=kernel-qemu

Rem -cpu
set CPU=arm1176

Rem -M
set MACHINE=arm1176

Rem -m
set RAM=256

Rem Image file
set IMAGE=2016-03-18-raspbian-jessie.img

Rem -serial
set SERIAL=stdio

Rem disk
set DISK=/dev/sda2

Rem init
set INIT=/bin/bash

Rem rootfstype
set ROOTFSTYPE=ext4

%QEMU% -kernel %KERNEL% ^
 -cpu %CPU% ^
 -m %RAM% ^
 -M %MACHINE% ^
 -no-reboot ^
 -serial %SERIAL% ^
 -append "root=%DISK% panic=1 rootfstype=%ROOTFSTYPE% rw init=%INIT%" ^
 -hda %IMAGE%
