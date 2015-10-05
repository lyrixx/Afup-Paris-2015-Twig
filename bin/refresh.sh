#!/bin/bash

# apt-get install inotify-tools

BASE=`dirname $0`/..

while true
  do
    inotifywait -e modify -e move -e create -e delete $BASE/slides.md | while read line
      do
        $BASE/bin/build.sh
      done
  done
