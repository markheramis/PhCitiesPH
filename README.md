# PhCitiesPH Rest

Very sophisticated REsT API for all locations in the Philippines built on top of [Laravel 5.4](https://laravel.com). You can query all locations in the Philippines from this API from `Regions`, `Provinces`, `Cities` to `Barangays`

#### We use in this Example :

- [Dingo API package](https://github.com/dingo/api/)

- How to use [Laravel Transformer]( http://fractal.thephpleague.com/transformers/) to customise the response.

- Authentication using [Laravel Passport](https://laravel.com/docs/5.4/passport)

- Create a unique slug using [Eloquent-Sluggable](https://github.com/cviebrock/eloquent-sluggable)

- We used [laravel-rest-api](https://github.com/halimus/laravel-rest-api) project to quickly build this.




##### The project is still under developement, you may find an update if you back later.



#### DEMO
Coming Soon


### Installation Step by Step:

1. After you pull up the project, browse to the folder with your terminal and run:  

    > composer install


2. To generate Laravel key, in your Terminal run:

    > php artisan key:generate


3. Create a Database in Your MySQL (choose a name, for example: librarydb)

4. Create an new file .env in the base folder containing a copy of the file .env.example, and update the cresential of databases connexion
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=librarydb
DB_USERNAME=root
DB_PASSWORD=
```
Make sure also to out at API_PREFIX=api in your .env file Like this
```
API_PREFIX=api
API_NAME="Laravel API"
API_VERSION=v1
API_DEBUG=false
```

5. To migrate the database, In your Terminal run:

    > php artisan migrate


6. To fill the tables with some dummy data, In your Terminal run:

    > php artisan db:seed


7. To run the server and test the API, In your Terminal run:

    > php artisan serve
