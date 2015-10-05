#!/bin/sh

BASE=`dirname $0`/..

pandoc \
    --section-divs \
    --standalone \
    --to revealjs \
    --template $BASE/template.revealjs \
    --variable theme="simple" \
    --variable transition="slide" \
    --variable controls=false \
    --variable progress=false \
    --variable slideNumber=true \
    --variable center=true \
    --output $BASE/index.html \
    --highlight-style tango \
    $BASE/slides.md
