#!/bin/bash

file=test
if [[ $1 ]]; then
	file=test/$1
fi

# export PROJ_PATH=`pwd`
export PROJ_PATH=/Users/roll/Downloads/antlrphpruntime-read-only/
phpunit --include-path="${PROJ_PATH}:${PROJ_PATH}/runtime/Php/" --verbose ${file}