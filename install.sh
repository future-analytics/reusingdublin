#!/bin/sh

##
# @package  ReusingDublin
# @author lucideer <lucideer@lucideer.com>
##

read -p "Enter your database name: " DBNAME
mysql -uroot -p $DBNAME < mysql/install.sql
