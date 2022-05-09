

 GraphQL is a query language for your API, and a server-side runtime for executing queries by using a type system you define for your data. GraphQL isn't tied to any specific database or storage engine and is instead backed by your existing code and data.

Laravel is a web application framework PHP with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling.


## Installation

Necessary tools to integrate development process:
- **[Docker](https://www.docker.com/)**

1- Go to the Sample directory
```
cp .env-example .env
```
2- Run these containers.

```
docker-compose up
```
2- Installing composer packages. This may also take time since there is a lot of packages. 

```
docker-compose exec php php composer.phar install
```
3- Run migrations and seeders

```
docker-compose exec php php artisan migrate
```

```
docker-compose exec php php artisan db:seed
```
