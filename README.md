# How to use


Clone repo

Install the composer dependencies

	composer install
	
Save .env.example as .env and put your database credentials

Set application key

	php artisan key:generate        

And Migrate with

`php artisan migrate`


### use can query data from database in the model by write function and use it in blade file