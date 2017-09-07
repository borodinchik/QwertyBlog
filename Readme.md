##Clone QwertyBlog project in u folder use :
---

git clone https://github.com/borodinchik/QwertyBlog.git


After you clone the project :
composer update |in u project folder|

##Create new database
---
U need create in u web server new database 

---
##Change u .env.example file name on .env and add database name,user name and password
---
DB_DATABASE=

DB_USERNAME=

DB_PASSWORD=

before use command in u project folder :

php artisan key:generate 



##If u see Error :
---
UnexpectedValueException

u need use command : 
chmod -R 777 and fill path in u project folder

##U need use command in  your console
---
php artisan migrate | This command adds tables to the database|


