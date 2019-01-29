#! /usr/bin/env sh 

if ! [ -e "$PWD/$1.php" ]; then
    echo "File $PWD/$1.php not found!"
    exit 1;
fi

php $1.php

exit $?