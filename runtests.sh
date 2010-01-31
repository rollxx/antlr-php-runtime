#!/bin/bash

file=test
if [[ $1 ]]; then
	file=test/$1
fi

export PROJ_PATH=`pwd`

phpunit --include-path="${PROJ_PATH}:${PROJ_PATH}/runtime/Php/" --verbose ${file}