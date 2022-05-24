- Clone project
> git clone https://github.com/nmtuan2005/laravel8x.git
> cd laravel8x

- Run composer and npm
> composer install
> npm install 

- Copy .env.example
> cp .env.example .env
  => Update DB in .env

- Create key
> php artisan key:generate

- Create DB and data
> php artisan migrate
> php artisan db:seed

- Run laravel:mix
> npm run dev

- Publec storage
> php artisan storage:link

