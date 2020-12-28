<?php

namespace Modules\Blog\Providers;
use Illuminate\Support\ServiceProvider;
use Modules\Blog\Http\Services\ArticleService;
use Modules\Blog\Http\Services\ArticleServiceInterface;
use Modules\Blog\Http\Services\BloggerService;
use Modules\Blog\Http\Services\BloggerServiceInterface;
use Modules\Blog\Http\Services\BlogService;
use Modules\Blog\Http\Services\BlogServiceInterface;

class ServiceAppServiceProvider extends ServiceProvider {

    public $bindings=[
        BloggerServiceInterface::class=>BloggerService::class,
        BlogServiceInterface::class=>BlogService::class,
        ArticleServiceInterface::class=>ArticleService::class
    ];

}
