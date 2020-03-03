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

            $event->menu->add('PRODUCTS');
            $event->menu->add(
            [
                'text' => 'All products',
                'url' => 'admin/products',
                'label' => Product::all()->count(),
                'icon'    => 'fas fa-fw fa-th-list',
            ],
            [
                'text' => 'Add product',
                'url' => 'admin/products/create',
                'icon'    => 'fas fa-fw fa-plus',
            ]
            );
            $event->menu->add('CATEGORIES');
            $event->menu->add(
            [
                'text' => 'All categories',
                'url' => 'admin/categories',
                'label' => Category::all()->count(),
                'icon'    => 'fas fa-fw fa-stream',
            ],
            [
                'text' => 'Add category',
                'url' => 'admin/categories/create',
                'icon'    => 'fas fa-fw fa-plus',
            ]
            );
            // $event->menu->add(
            // ['header' => 'STORE BUILDER'],
            // [
            //     'text'    => 'Product',
            //     'icon'    => 'fas fa-fw fa-share',
            //     'url' => 'admin/products',
            //     'label' => Product::all()->count(),
            //     'submenu' => [
            //             [
            //                 'text' => 'Add product',
            //                 'url'  => 'admin/products/create',
            //                 'icon'    => 'fas fa-fw fa-plus',
            //             ]
            //         ],
            //     ],
            //     [
            //         'text' => 'Categories',
            //         'url' => 'admin/categories',
            //         'label' => Category::all()->count(),
            //         'icon'    => 'fas fa-fw fa-share',
            //         'submenu' => [
            //                 [
            //                     'text' => 'Add category',
            //                     'url' => 'admin/categories/create',
            //                     'icon'    => 'fas fa-fw fa-plus',
            //                 ]
            //             ],
            //     ]
            // );
            // $event->menu->add(
            //     [
            //         'text' => 'Categories',
            //         'url' => 'admin/categories',
            //         'label' => Category::all()->count(),
            //         'icon'    => 'fas fa-fw fa-share',
            //         'submenu' => [
            //                 [
            //                     'text' => 'Add category',
            //                     'url' => 'admin/categories/create',
            //                     'icon'    => 'fas fa-fw fa-plus',
            //                 ]
            //             ],
            //     ]
            // );

            $event->menu->add(
                ['header' => 'ALL SETTINGS'],

                [
                    'text' => 'ACCOUNT SETTINGS',
                    'url' => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'submenu' => [
                            [
                                'text' => 'profile',
                                'url'  => 'admin/settings',
                                'icon' => 'fas fa-fw fa-user',
                            ],
                            [
                                'text' => 'change_password',
                                'url'  => 'admin/settings',
                                'icon' => 'fas fa-fw fa-lock',
                            ]
                        ],
                    ],
                    [
                        'text' => 'SOME SETTINGS',
                        'url' => '#',
                        'icon'    => 'fas fa-fw fa-share',
                        'submenu' => [
                                [
                                    'text' => 'profile',
                                    'url'  => 'admin/settings',
                                    'icon' => 'fas fa-fw fa-user',
                                ],
                                [
                                    'text' => 'change_password',
                                    'url'  => 'admin/settings',
                                    'icon' => 'fas fa-fw fa-lock',
                                ]
                            ],
                        ],
                        [
                            'text' => 'React',
                            'url' => 'admin/react',
                        ]
            );

        });
    }
}
