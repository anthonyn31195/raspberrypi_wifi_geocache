#!/bin/bash

functions="`dirname $0`/lib/functions.sh"

if [ -x "$functions" ] ; then
  source $functions
fi


pid_file=`getabsolutepath $0`/tmp/raspberrypi2.pid

if [ -f "$pid_file" ] ; then
  kill `cat "$pid_file"`
  /bin/rm $pid_file
fi

