echo "=====Populating DB====="

sqlite3 database/news.db < database/news.sql

echo "=====Starting a server on Localhost (port 9000)====="

php -S localhost:9000