# regeneration-sitemap
Sitemap package for regeneration

== CLI commands for this package ==
1) Run the following command in the root directory of your laravel installation:
php artisan controller:make NewController --bench=regeneration/sitemap

2) Add the following line after the first php opening tag of the newly generated file inside the packages `controller` folder
namespace Regeneration\Sitemap\Controllers;

3) Run the following command in the root directory and your package directory
composer dump-autoload

=== Accessing admin area ===
Admin controller is restful, therefore has following pages available:
/sitemap/manage/ 
/sitemap/manage/create
/sitemap/manage/{lobby_id}
/sitemap/manage/{lobby_id}/edit