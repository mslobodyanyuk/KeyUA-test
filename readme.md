A task:
=======
PHP

There are several types of employees: programmer, designer, tester, manager.

1. Each employee is able to do his job in his own way:
- the programmer can: 1) write code, 2) test the code, 3) communicate with the manager
- the designer can: 4) draw, 3) communicate with the manager
- the tester can: 2) test the code, 3) communicate with the manager, 5) set tasks
- the manager can: 5) set tasks

2. In turn, they do not know how:
- programmer: 4) draw 5) set tasks
- designer: 1) write code 2) test code 5) set tasks
- tester: 1) write code 4) draw
- manager: 1) write code 4) draw 2) test code

the task:
- it is necessary to describe the ability of each employee using the principles of the PLO;
- write a console command using symfony (symfony console commands). AT
as a parameter, the team should take the name of the position. Result robots
teams must beat the list of employee skills. For writing logic, use services.
	startup example:
	
_php bin/console company: employee programmer_ 

On framework Laravel:
        
        php artisan company:employee programmer
        		
the output should get like:

		- code writing
		- code testing
		- communication with manager
		
- also whether the employee can implement certain actions. Example for
implementation:
command: 

_php bin/console employee: can programmer writeCode_ 

On framework Laravel:
        
        php artisan employee:can programmer writeCode        
        
	result:
		true

command: 

_php bin/console employee: can programmer draw_ 
		
On framework Laravel:
        
        php artisan employee:can programmer draw
		
	result:
		false

Requirements
1. php 7 and up
2. symfony 4
2. Use code style psr-2 https://www.php-fig.org/psr/psr-2/
3. Create a new repository at https://bitbucket.org/ and upload it there.
4. Use composer https://getcomposer.org/


MySQL

1. For a given list of products get the names of all categories in which are presented
products.
	Selection for several products (example: ids = (9, 14, 6, 7, 2)).
2. For a given category get a list of offers of all products from this category.
Each category can have several subcategories.
	Example:
	I select all products from the category computers (id = 2) and subcategories (id = 3 (laptops),
	id = 4 (tablets), id = 5 (hybrids)).
3. For a given list of categories, get the number of unique products in each
categories.
	Selection for several categories (example: ids = (2, 3, 4)).
4. For a given list of categories, get the number of units of each product that
enters the specified categories.
	Selection for several categories (example: ids = (3, 4, 5)).

Note:
The database schema is created independently based on the above requirements. As a result
You must provide a database schema and SQL queries.

Actions on deployment of the project:
=====================================

1. `git clone << project path >>`

2. `сomposer install`

3. configure domain settings:

* ***on Ubuntu( Linux )***

_access to files in a folder_

`sudo chmod -R 777 /var/www/LARAVEL/keyua_test.loc` 
	
_create new virtual host files_
	
`sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/keyua_test.loc.conf`

_open a new file in the editor with root-rights_
	
`sudo nano /etc/apache2/sites-available/keyua_test.loc.conf`
		
_configure on keyua_test.loc_  
```
Ctrl + O
Enter 
Ctrl + X
```
_enable new virtual hosts_	
	
`sudo a2ensite keyua_test.loc.conf`	
				
_after completion, you must restart Apache for the changes to take effect_

`sudo service apache2 restart`

_or_
				
`sudo systemctl restart apache2`

_edit hosts file_

`sudo nano /etc/hosts`
  
* ***on Windows***
 
`hosts` file, `httpd.conf`.

4. make a new database - keyua_test( utf8_general_ci encoding ), for example 

5. database settings in `.env` file:

```php
DB_DATABASE = keyua_test
DB_USERNAME = root
DB_PASSWORD = your_password
```

6. starting migrations

`php artisan migrate`

7. starting seeding

`php artisan db:seed`

MySQL

- Database dump for MySQL-task. Located in the /public folder in a file:	

`MySQLkeyua_test.txt`

Download a database dump( - database dump contains CREATE/USE DATABASE statement):

- Database schema and SQL-queries. Located in the /public folder in a file:

`Database schema and SQL-queries.txt`

Useful links:
=============

#### ORM

* How to select specific columns in Laravel Eloquent

<http://qaru.site/questions/334928/how-to-select-specific-columns-in-laravel-eloquent>

<http://qaru.site/questions/1575192/how-to-select-certain-fields-in-laravel-eloquent>

#### Create Console Command

* Artisan Console

<http://laravel.su/docs/5.4/artisan>

* Creating Custom Composer Commands with PHP Artisan in Laravel

<https://www.cloudways.com/blog/custom-artisan-commands-laravel/>

* LARAVEL 5 CREATION OF A CONSOLE COMMAND 

<http://www.itmathrepetitor.ru/laravel-5-sozdanie-konsolnoy-komandy/>

* There are no commands defined in the "command" namespace.

<https://laracasts.com/discuss/channels/laravel/there-are-no-commands-defined-in-the-command-namespace>

* PHP line feed in console

<https://i-notes.org/php-perevod-stroki-v-konsoli/>

#### Service Layer

* What is the service layer and its use on Laravel?

<https://www.quora.com/What-is-the-service-layer-and-its-use-on-Laravel>

* Service layer in laravel 5.7

<https://stackoverflow.com/questions/53437781/service-layer-in-laravel-5-7>

* Design Pattern : Service Layer with Laravel 5

<https://m.dotdev.co/design-pattern-service-layer-with-laravel-5-740ff0a7b65f>

#### Eloquent: Relationships

[#Many To Many](https://laravel.com/docs/5.4/eloquent-relationships#many-to-many)

#### Array Functions

[in_array](http://www.php.su/in_array)

#### MySQL

* An empty list of IN clause options in MySQL

<http://qaru.site/questions/200851/empty-in-clause-parameter-list-in-mysql>

Deploy on Docker( Ubuntu ).
===========================

For Deploy on Docker you must have the structure folders and files:

`/var/www/Docker/youtube/`

                            |web/					
                            |    Dockerfile - file for create an image with php7.2-apache version
                            |.env - file with paths environment variables
                            |docker-compose.yml - file with managing images services and their settings
                            |databases/ - folder that consist database locally
                            |KeyUA-test - folder with a project which appeared after cloning from github

* In the new terminal:

`cd /var/www/Docker/youtube`

* Cloned a project frоm github:

`git clone https://github.com/mslobodyanyuk/KeyUA-test.git`

* Create an container:

`docker-compose up --build`

_All services started + the vendor folder appeared in the Laravel project._

* In another new terminal:
 
`cd /var/www/Docker/youtube`

* To enter the service inside the container:

`docker-compose exec web bash`

_To see the files of our project (- to check whether it enters our container):_

`ls -l`

_If there is no .env-file of laravel-project you can also take in Docker structure folder. Rename copy.env to .env_

* Generate the application key:

`php artisan key:generate`

* In the browser in the address bar -> `127.0.0.1:6080`

- Then Login and Create database in adminer named, for example, `keyua_test` -> choose encoding `utf8_general_ci`:

```
	MySQL >> db	 
	        ->Create database
```
		
* Configure the .env file of the Laravel project:

```php
DB_HOST = db
DB_DATABASE = keyua_test
DB_USERNAME = root
DB_PASSWORD = your_password
```
	
_Return to the container terminal:_

* run migrations

`php artisan migrate`
			
* run Seeders

`php artisan db:seed`

* Testing project, for example:

`php artisan company:employee programmer`

`php artisan employee:can programmer writeCode`

_Exit container:_

`exit`

_Stop container:_

`Ctrl+C`

Useful links:
=============

[The easiest and smallest laravel launch in docker | laravel installation in docker | #10)](https://www.youtube.com/watch?v=TumfGqUf39U&list=PLD5U-C5KK50XMCBkY0U-NLzglcRHzOwAg&index=13&t=164s)

[Docker commands](https://habr.com/ru/company/flant/blog/336654/)