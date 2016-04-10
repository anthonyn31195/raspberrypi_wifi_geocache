# Running RaspberryPI in QEMU for testing.

[QEMU](http://wiki.qemu.org) is a way to run the RaspberryPI os in a virtaul enviroment.

This is based on [Virtual Raspbian on Qemu in Ubuntu Linux](https://www.raspberrypi.org/forums/viewtopic.php?f=29&t=37386) and [Raspberry Pi Emulation for Windows QEMU](https://www.pcsteps.com/1199-raspberry-pi-emulation-for-windows-qemu/)

Download the QEMU environment for your computer.

** Windows **

1. Download the lastest verion of [QEMU for windows](https://qemu.weilnetz.de/)  
2. Download the [qemu rpi kernel](https://github.com/dhruvvyas90/qemu-rpi-kernel)
2. Add the QEMU directory to you %PATH% variable.  
3. Open a command window.  
4. Make a the ```qemu`` diretory.

```
mkdir %userprofile%\qemu
cd %userprofile%\qemu_vms
```
5. Download [Raspbian OS zip file](https://downloads.raspberrypi.org/raspbian_latest) into the ```qemu``` directory.
6. Unzip Raspbain Zip file.
7. Reszie the Image (ingore erros)
```qemu-img.exe resize <image file> +10G```
8.
https://github.com/dhruvvyas90/qemu-rpi-kernel/wiki
