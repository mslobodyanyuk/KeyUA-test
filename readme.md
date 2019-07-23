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
	
php bin/console company: employee programmer 

On framework Laravel:
        
        php artisan company:employee programmer
        		
the output should get like:

		- code writing
		- code testing
		- communication with manager
		
- also whether the employee can implement certain actions. Example for
implementation:
command: 

php bin/console employee: can programmer writeCode 

On framework Laravel:
        
        php artisan employee:can programmer writeCode        
        
	result:
		true

command: php bin/console employee: can programmer draw 
		
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


4. make a new database - keyua_test( utf8_general_ci encoding ) for example 

Or just download a database dump located in the /public folder
( - database dump contains CREATE/USE DATABASE statement):

`keyua_test.sql`


5. database settings in `.env` file:

```php
DB_DATABASE = keyua_test
DB_USERNAME = root
DB_PASSWORD = your_password
```

MySQL

- Database schema and SQL-queries.

Located in the /public folder in a file:

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

#### MySQL

* An empty list of IN clause options in MySQL

<http://qaru.site/questions/200851/empty-in-clause-parameter-list-in-mysql>