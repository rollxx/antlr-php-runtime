@echo off
set PROJ_PATH=%CD%

"%PHP_PEAR_BIN_DIR%\phpunit.bat" -d include_path="%PROJ_PATH%;%PROJ_PATH%\antlr;%PHP_PEAR_BIN_DIR%\pear" --verbose test/%1
