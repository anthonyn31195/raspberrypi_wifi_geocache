#!/bin/bash
PHP=/usr/bin/php
PORT=8000
PID_FILE=/tmp/php.pid
OS=`uname`
if [ -f "$PID_FILE" ] ; then
  pkill -F $PID_FILE
fi
DIR=`dirname $0`

if [ -f "$PID_FILE"] ; then 
  /bin/rm $PID_FILE
fi

eth0=`ifconfig eth0 | awk '/inet / {print $2}'`
lo0=`ifconfig lo0 | awk '/inet / {print $2}'`
if [ -n "$lo0" ] ; then
  $PHP -S $lo0:$PORT -t $DIR > /dev/null 2>&1 & 
  echo $! >> $PID_FILE
fi
if [ -n "$eth0" ] ; then
  $PHP -S $eth0:$PORT -t $DIR > /dev/null 2>&1 &
  echo $! >> $PID_FILE
fi
