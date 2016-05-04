#!/bin/bash
  
main() {
  set -xv
  functions="`dirname $0`/lib/functions.sh"
  
  if [ -x "$functions" ] ; then
    source $functions
  fi
  
  if [ "$1" = "-c" ] ; then
    display=""
  else
    display="-display none"
  fi
  
  # 
  
  IMAGE_DIR=`getabsolutepath ../image`
  WEB_DIR=`getabsolutepath ../web`
  image_base=2016-03-18-raspbian-jessie.qcow2
  image=$IMAGE_DIR/$image_base
  kernel=$IMAGE_DIR/kernel-qemu-4.1.13-jessie
  format=raw
  format=qcow2
  date=`date +%Y-%m-%d-%H-%M-%S`
  snapshot_dir=$SCRIPT_DIR/snapshot
  snapshot=$image_base-$date
  snapshot_file=$temp_dir/`basename $0 .sh`.snapshot
  pidfile=$temp_dir/`basename $0 .sh`.pid
  
  #virtfs="-virtfs local,id=host0,mount_tag=host0,path=$WEB_DIR,security_model=passthrough"
  
  if [ ! -d "$temp_dir" ] ; then
    mkdir -p "$temp_dir"
  fi
  
  if [ -f "$snapshot_file" ] ; then
    snapshot=`cat $snapshot_file`
  else
    echo "$snapshot" > $snapshot_file
  fi
  
  
  if [ ! -d "$snapshot_dir" ] ; then
    mkdir $snapshot_dir
  fi
  
  if [ -f "$image" -a ! -f "$snapshot_dir/$snapshot" ] ; then
    (cd $snapshot_dir ; qemu-img create -f $format -b $image $snapshot > /dev/null 2>&1 )
  fi
  
  if [ ! -f $snapshot_dir/$snapshot ] ; then
    exit
  fi 
  
  qemu-system-arm -kernel $kernel \
    -cpu arm1176 \
    $display \
    -m 256 \
    -M versatilepb \
    -serial stdio \
    -append "root=/dev/sda2 panic=1 -no-reboot rootfstype=ext4 rw format=$format" \
    -drive file="$snapshot_dir/$snapshot",index=0,media=disk,format=$format \
    -net nic \
    -net user,hostfwd=tcp::2222-:22,hostfwd=tcp::22280-:80 \
    -pidfile $pidfile >> $log_file 2>&1 &
  #  -snapshot \
  #  -no-reboot \
  #  -daemonize
  #  -serial stdio \
  set +xv
}
  
functions="`dirname $0`/lib/functions.sh"
if [ -x "$functions" ] ; then
  source $functions
fi
SCRIPT_DIR=`getabsolutepath $0`
temp_dir=$SCRIPT_DIR/tmp
log_file=$temp_dir/`basename $0 .sh`.log
  
main "$@" >> $log_file 2>&1
  
