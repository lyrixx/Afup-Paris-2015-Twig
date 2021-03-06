#!/bin/sh

BASE_PATH=`dirname $0`/..

$BASE_PATH/bin/build.sh

rm -rf $BASE_PATH/build/*
mkdir -p $BASE_PATH/build

cp -r $BASE_PATH/index.html $BASE_PATH/assets/ $BASE_PATH/reveal.js/ $BASE_PATH/build
rm $BASE_PATH/build/reveal.js/.git

rm -f $BASE_PATH/slides.tar.gz
tar czf $BASE_PATH/slides.tar.gz -C $BASE_PATH build/ --transform s/^build/slides/
