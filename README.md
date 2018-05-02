# Origin

This pack add most common pages to laravel project with basic layouts.

## Getting Started

This package add most common pages to your project with basic starter layouts. 
Default, includes 7 pages. You can add more pages with manually.   

Home 		-> ```/start```

About Us 	-> ```/about-us```

Contact 	-> ```/contact```

FAQ 		  -> ```/faq```

Terms 		-> ```/terms```

Privacy 	-> ```/privacy```

Sitemap 	-> ```/sitemap```

##### You can add more pages, change titles or routes with vendor:publish 


### Prerequisites

You need to laravel framework

```
laravel new sample
```

### Installing

Adding require to composer.json: 


```
"bidibidi/origin": "*"
```

```
composer update
```

```
php artisan serve
```


## Running the tests

http://localhost:8000/start


## Deployment

Below Laravel 5.5 open ```config/app.php``` and add this line in ```providers``` section

```
Bidibidi\Origin\BidibidiOriginServiceProvider::class,
```

##### PUBLISH

	If you want more settings, language and pages :

	Langs  : php artisan vendor:publish --tag=origin-lang
	Config : php artisan vendor:publish --tag=origin-config
	Assets : php artisan vendor:publish --tag=origin-public
	Views  : php artisan vendor:publish --tag=origin-views



## Authors

* **Bidibidi** - *Initial work* - [Bidibidi](https://github.com/Bidibidi)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details

