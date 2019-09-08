# api

Ch3
- laravel fresh app

Ch4
- migration OK
- php artisan migrate
- ..app/Providers/AppServiceProvider
- Schema::defaultStringLength(191);


Ch5
- Generated : model with all (migration, factory, resource controller)
- ..database/factories/(ProductFactory, ReviewFactory, UserFactory)
- ..database/seeds/DatabaseSeeder
- ..database/migrations

Ch6
- migration done for : Products, Reviews
- ..database/migrations/2019_09_04_185731_create_products_table.php
- ..database/migrations/2019_09_04_185908_create_reviews_table.php

Ch7
- Database Seeded
- ..database/DatabaseSeeder.php
- php artisan DB:seed

Ch8
- created relationships on models (Product, Review)
- ProductCollection & ProductResource
- separated out folder : Product
- php artisan make:resource Product/ProductCollection
- ProductController : index() return collection (multiple recs)
- localhost:8000/api/products
- php artisan make:resource Product/ProductResource
- ProductController : show() return resource (transformed single rec)

Ch9
===
- modify ProductResoure (single rec) (add review-link, rating, totalPrice)
- reviews link for a given product
- ProductResource :
  'href' => [
     'reviews' => route('reviews.index', $this->id)
  ]

Ch10
====
- modify ProductCollection (multiple recs)
- change ProductCollection class to extend Resource as single rec
- change ProductController from :
  return Product::all();
  to :
  return ProductResource::collection((Product::all()));
