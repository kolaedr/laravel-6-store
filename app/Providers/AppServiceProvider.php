<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Categories');
            $event->menu->add(
            
            [
                'text' => 'Categories',
                'url' => 'admin/categories',
                'label' => Category::all()->count(),
            ],
            [
                'text' => 'Add category',
                'url' => 'admin/categories/create',
            ],
            );
            $event->menu->add('Product');
            $event->menu->add(
            [
                'text' => 'Product',
                'url' => 'admin/product',
                'label' => Product::all()->count(),
            ],
            [
                'text' => 'Add product',
                'url' => 'admin/product/create',
            ],
            [
                'text' => 'React',
                'url' => 'admin/react',
            ]);
        });
    }
}
