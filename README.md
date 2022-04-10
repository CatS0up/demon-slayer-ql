<div align="center" style="margin: 5rem 0">
  <img src="https://pa1.narvii.com/7625/69374b1ee7766f75bf2f1a88b537f0216d57fea7r1-540-304_hq.gif" />
</div>

<br>

<h1 align="center">Demon Slayer Ql</h1>

<h4 align="center">API provided data about popular anime serie.</h4>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#technologies">Technologies</a> •
  <a href="#setup">Setup</a> •
  <a href="#inspiration">Inspiration</a>
</p>

## Key Features
[Visit the documentation](https://github.com/sass/sass) for more information

API provides data about:
* 118 Characters
* All breathing styles
* All Techniques
* All affiliations

## Technologies
Client layer is created with:
* [Vue 2](https://github.com/vuejs/vue) 
* [Vue Apollo Client](https://github.com/vuejs/apollo) 
* [SASS](https://github.com/sass/sass) 
  
Backend layer is created with:
* [Laravel 8](https://github.com/laravel/laravel) 
* [Laravel Lighthouse](https://github.com/nuwave/lighthouse) 
* [Laravel Mongo DB](https://github.com/jenssegers/laravel-mongodb) 
  
## Setup

### First steps
Firstly, you should remove `.example` part from `.env.example` files in client and backend directories.

App should be running with default .env settings.

Next, follow these steps
```
$ cd src/backend
$ docker-compose up -d
$ docker exec backend php artisan key:generate
```

### Database seeding
```
$docker exec backend php artisan migrate --seed
```
App sholud be avaliable on your `localhost` address

## Inspiration
This app is inspired by [bautistaaa/narutoQL](https://github.com/bautistaaa/narutoQL) 
