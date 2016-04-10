# Running RaspberryPI in QEMU for testing.

[QEMU](http://wiki.qemu.org) is a way to run the RaspberryPI os in a virtaul enviroment.

This is based on [Virtual Raspbian on Qemu in Ubuntu Linux](https://www.raspberrypi.org/forums/viewtopic.php?f=29&t=37386) and [Raspberry Pi Emulation for Windows QEMU](https://www.pcsteps.com/1199-raspberry-pi-emulation-for-windows-qemu/)

Download the QEMU environment for your computer.

** Windows **

Download the lastest verion of [QEMU for windows](https://qemu.weilnetz.de/)  
Add the QEMU directory to you %PATH% variable.  
Open a command window.  
Make a the ```qemu_vms`` diretory.

```
mkdir qemu_vms
cd qemu_vms
```
Download [Raspbian OS zip file](https://downloads.raspberrypi.org/raspbian_latest) into the ```qemu_vms``` directory.

