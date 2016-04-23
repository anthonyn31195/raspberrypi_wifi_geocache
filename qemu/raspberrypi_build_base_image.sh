#!/bin/bash -xv

IMAGE_DIR=../image
ZIP_IMAGE=`ls -rt $IMAGE_DIR/*.zip | tail -1`
IMAGE=$IMAGE_DIR/`basename $ZIP_IMAGE .zip`.img
QCOW2_IMAGE=$IMAGE_DIR/`basename $ZIP_IMAGE .zip`.qcow2
if [ ! -f "$IMAGE" ] ; then
  unzip -d $IMAGE_DIR $ZIP_IMAGE
fi

if [ ! -f "$QCOW2_IMAGE" ] ; then
  qemu-img convert -f raw -O qcow2 $IMAGE $QCOW2_IMAGE
fi

