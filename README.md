<h1 align="center">Laravel User-Role Scaffold</h1>

### About Project

This is a base project for any project that requires the use of user roles. The project does not depend on any extra package.

### Usage
##### Routes
To protect routes by roles use the middleware **role**
```php
// use middleware on a route
Route::get('/users', function () {
  // do anything
})->middleware('role:admin');
```

See the [documentation](https://laravel.com/docs/5.8/middleware#assigning-middleware-to-routes) for more use cases.

##### Views

You can also use the roles in the views to display information according to the user's role.

```php
// You can use the scope of the User model
@if(Auth::user()->hasRole('admin'))
    // 
@endif

// You can also use the blade directive
@role('admin')
    // 
@endrole
```

### Installation
Once the database has been cloned and configured in the **.env** file:

```console
// execute migrations and seeder
php artisan migrate --seed

// run the server
php artisan serve
```

##### Credentials
Use the following credentials to login

```console
email: homero@mail.com
pass: password
```

### About the author
I like coffee, you can write me on twitter [@dcyar_](https://twitter.com/dcyar_)