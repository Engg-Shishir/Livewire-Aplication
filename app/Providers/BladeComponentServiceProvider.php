<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // এখানে লারাবেল ব্লেড এপ্রোচ কে কম্পোনেন্ট এ্যাপ্রোচ এ পরিবর্তন করা হয়েছে। যেখানে উল্লেখ করে দেয়া আছে যে কোন ব্লেড ফাইলকে কিভাবে কোন কম্পোনেন্ট আকারে ব্যাবহার করা হবে।
        Blade::component('layouts.app', 'admin-layout');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
