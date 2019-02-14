## Running Pawm Shop 2
### First

1. `composer install` in project folder

2. create the database and add them to the `.env` file or run command `cp .env.example .env` (only Linux and Mac) in window `copy`

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

3. `php artisan key:generate`
4. `php artisan migrate`
5. `php artisan db:seed` (if want to get dummy data)
6. `php artisan serve`

The App will be running on `localhost:8000`.

### Create Virtual Host

- In Window `C:\Windows\System32\drivers\etc\hosts`
- In linux `/etc/hosts`

```
127.0.0.1 foo.com
```

- In Apache `apache\conf\extra\httpd-vhosts.conf`

```
<VirtualHost *:*>
    ServerName foo.com
    DocumentRoot C:/foo/
</VirtualHost>
```
