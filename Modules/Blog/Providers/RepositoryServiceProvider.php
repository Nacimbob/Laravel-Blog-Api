<?php

namespace Modules\Blog\Providers;
use Illuminate\Support\ServiceProvider;
use Modules\Blog\Http\Repositories\ArticleRepository;
use Modules\Blog\Http\Repositories\ArticleRepositoryInterface;
use Modules\Blog\Http\Repositories\BloggerRepository;
use Modules\Blog\Http\Repositories\BloggerRepositoryInterface;
use Modules\Blog\Http\Repositories\BlogRepository;
use Modules\Blog\Http\Repositories\BlogRepositoryInterface;
use Modules\Blog\Http\Repositories\ImageRepository;
use Modules\Blog\Http\Repositories\ImageRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider {

    public $bindings=[
        BloggerRepositoryInterface::class=>BloggerRepository::class,
        BlogRepositoryInterface::class=>BlogRepository::class,
        ArticleRepositoryInterface::class=>ArticleRepository::class,
        ImageRepositoryInterface::class=>ImageRepository::class
    ];

}
