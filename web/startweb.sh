#!/bin/bash
PHP=/usr/bin/php
PORT=8000
PID_FILE=/tmp/`basename $0 .sh`.pid
LOG_FILE=/tmp/`basename $0 .sh`.log
OS=`uname`
if [ -f "$PID_FILE" ] ; then
  pkill -F $PID_FILE
fi
DIR=`dirname $0`

if [ -f "$PID_FILE" ] ; then 
  /bin/rm $PID_FILE
fi

echo "starting php" >> $LOG_FILE

eth0=`ifconfig eth0 2> /dev/null | awk '/inet / {print $2}' | sed 's/addr://'`
lo0=`ifconfig lo0 2> /dev/null | awk '/inet / {print $2}' | sed 's/addr://'`
if [ -n "$lo0" ] ; then
  $PHP -S $lo0:$PORT -t $DIR >> $LOG_FILE 2>&1 & 
  echo $! >> $PID_FILE
fi
if [ -n "$eth0" ] ; then
  $PHP -S $eth0:$PORT -t $DIR >> $LOG_FILE 2>&1 &
  echo $! >> $PID_FILE
fi
