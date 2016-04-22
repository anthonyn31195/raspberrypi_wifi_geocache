#!/bin/bash

# Get absolute path
function getabsolutepath () {
  if [ -d "$1" ] ; then
    cd "$1"
  elif [ -f "$1" ] ; then
    cd `dirname "$1"`
  else 
    return 
  fi
  echo `pwd`
}

