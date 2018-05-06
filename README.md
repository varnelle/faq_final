# :sparkles: **Welcome to the FAQ Final Project** :sparkles:
 

The objective of this project is to show how you can share views throughout your application. 
This application shows links to create questions in multiple pages of the application. 
 
## What do i expect when I visit the FAQ site?

 FAQs visitors and editors
   • As a site visitor, I can create questions, so I can get quick answers.
   • As a site visitor, I can read FAQs, so I can get quick answers.
   • As a site editor, I can maintain a FAQ section so that support gets fewer easily answered questions.
   • As a site visitor, I can find an answer quickly. 


## To run the FAQ project:

1. git clone https://github.com/varnelle/faq_final.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database / with sqlite or other https://laravel.com/docs/5.6/database
6. Run: php artisan migrate
7. Run: unit tests: phpunit
8. Run: seeds php artisan migrate:refresh --seed

## Project Resources:
1.  Create a view (View FAQ)
2.  Update web.php with new view route
3.  Update welcome.blade with links for new home page
4.  Activate new view link on home page to include the new code

## Prerequisites:
You need to complete upto video 20 where it has testing to begin this project, if you don't have previous experience with Laravel.

https://laracasts.com/series/laravel-from-scratch-2017

## Relevant Laravel Resources:

https://laravel.com/docs/5.6/eloquent

https://laravel.com/docs/5.6/database

https://laravel.com/docs/5.6/seeding

https://laravel.com/docs/5.6/testing



