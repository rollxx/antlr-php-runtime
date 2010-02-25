@echo off
SET CLASSPATH=%CLASSPATH%;.\lib\antlr-3.1.3-php.jar;.\lib\antlr-2.7.7.jar;.\lib\antlr-runtime-3.1.3.jar;.\lib\gunit.jar;.\lib\stringtemplate-3.2.jar 

rem java org.antlr.Tool
rem goto skip

for %%i in (test\*.g) DO (
	ECHO [generating %%i]
	java org.antlr.Tool -make -fo test %%i
)

:skip
