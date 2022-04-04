#!/bin/sh

echo "======CREATING DATABASE========"

rm news.db 2>/dev/null
sqlite3 news.db < news.sql

echo "======DATABASE CREATED========="


echo "======RUNNING THE QUERIES======"
sqlite3 news.db << END_SQL
.mode columns
.headers on
.nullvalue NULL
select * from news where id = 4;
select * from comments where news_id = 4;
.exit
END_SQL