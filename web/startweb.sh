#!/bin/bash
PHP=/usr/bin/php
PORT=8000
PID_FILE=/tmp/php.pid
if [ -f "$PID_FILE" ] ; then
 pkill -F $PID_FILE
fi
DIR=`dirname $0`
eth0=`hostname -I | awk '{print $1}'`
l0=`hostname -i | awk '{print $1}'`
$PHP -S $l0:$PORT -t $DIR > /dev/null 2>&1 & 
echo $! > $PID_FILE
$PHP -S $eth0:$PORT -t $DIR > /dev/null 2>&1 &
echo $! >> $PID_FILE

