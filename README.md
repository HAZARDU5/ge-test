Test Project
============

Readme by Michael Andrew (michael.andrew@gladeye.co.nz)

## Requirements

*   PHP 5.6.x & PHP-CLI 5.6.x
*   composer
*   MySQL 5.5.x

## Installation

1.  Run `composer install` to install all project dependencies.

2.  Create a local MySQL database and import the `DB_SCHEMA.sql` into it.

3.  Copy the contents of `config.dist.php` to `config.local.php` and set the configuration to suit your environment.

## Running Development Server

1.  Run `php -S localhost:8000` to start the server. Make sure `php` set in your `PATH` points to your PHP 5.6.x binary.

2.  Navigate your browser to http://localhost:8000/ to access the web application.

## Logging Out

*   No logout button has been implemented so you will need to manually clear all cookies for the application then log in
    again as another user.

## API

### List Users

```
curl http://localhost:8000/api/users/list
```

#### Returns

```
HTTP/1.1 200 OK
Host: localhost:8000
Connection: close
X-Powered-By: PHP/5.6.21-1~dotdeb+7.1
Content-Type: application/json
```
```
[
    {"id":"1","name":"Admin User","group_id":"1","email":"user@gladeye.co.nz","active":"1","created":"2016-05-23 19:06:25","updated":"0000-00-00 00:00:00","facebook_id":null,"twitter_id":null},
    {"id":"5","name":"Second User","group_id":"1","email":"user2@gladeye.co.nz","active":"1","created":"2016-05-23 19:21:47","updated":"0000-00-00 00:00:00","facebook_id":"FACEBOOK_ID","twitter_id":null},
    {"id":"3","name":"Normal User","group_id":"1","email":"user3@gladeye.co.nz","active":"1","created":"2016-05-23 19:15:25","updated":"0000-00-00 00:00:00","facebook_id":null,"twitter_id":null}
]
```

Where `FACEBOOK_ID` is the ID of the Facebook account linked to the user.

### Login

```
curl -F email=EMAIL_ADDRESS -F password=PASSWORD http://localhost:8000/api/login
```

Where `EMAIL_ADDRESS` and `PASSWORD` are the credentials of the user to login as.

#### Returns
```
{"message":"Success!","success":true,"token":"TOKEN"}
```

Where `TOKEN` is an access token valid for future requests.