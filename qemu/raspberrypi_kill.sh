#!/bin/bash

if [ -f raspberrypi2.pid ] ; then
  kill `cat raspberrypi2.pid`
fi
