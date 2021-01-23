<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Models\Post;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションにマップ付されたポリシー
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
    ];

    /**
     * アプリケーションの全認証／認可サービスの登録
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
