# origin
Add most common pages to laravel

This pack add most common 7 pages to laravel project with basic layouts.

This pages: 
Home 		  -> /start
About Us 	-> /about-us
Contact 	-> /contact
FAQ 		  -> /faq
Terms 		-> /terms
Privacy 	-> /privacy
Sitemap 	-> /sitemap


You can add more pages, change titles or routes with vendor:publish  


//Usage

Firstly create laravel project: laravel new sample

From Github :

1- Add repositories to composer.json:

					"repositories": [
					   {
					     "url": "https://github.com/Bidibidi/origin.git",
					     "type": "git"
					    }
					 ],


 2- Add require to composer.json: 

          "bidibidi/origin": "^1.0.*"
 
 
 3- composer update
 4- php artisan serve
 5- http://localhost:8000/start
 

// Optional

 1-config/app.php and Add Provider: 
	
	Bidibidi\Origin\BidibidiOriginServiceProvider::class,

// Publish

	If you want more settings, language and pages :

	Langs  : php artisan vendor:publish --tag=origin-lang
	Config : php artisan vendor:publish --tag=origin-config
	Assets : php artisan vendor:publish --tag=origin-public
	Views  : php artisan vendor:publish --tag=origin-views
