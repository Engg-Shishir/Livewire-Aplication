
<div class="card collapsed-card p-0">
    <div class="card-header">
        <h3 class="card-title">ServiceProvider</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>
                <a href="">Create Service Provider</a> :  
                <div class="codeBox">
                    <xmp>
                        php artisan make:provider BladeComponentServiceProvider
                    </xmp>
                </div>
            </li>
            <li>
                <a href="">Using Laravel Blade Component Instead of extends Directive</a> <br>
                এখানে লারাবেল ব্লেড এপ্রোচ কে কম্পোনেন্ট এ্যাপ্রোচ এ পরিবর্তন করা হয়েছে। যেখানে উল্লেখ করে দেয়া আছে যে কোন ব্লেড ফাইলকে কিভাবে কিসের মাধ্যমে  কম্পোনেন্ট আকারে ব্যাবহার করা যাবে।এজন্য প্রথমে আপনাকে একটি সার্ভিস প্রোবাইডার তৈরি করে, তার মধ্যে প্রসেসটাকে রেজিস্টার করতে হবে এবং তৈরিকৃত সার্ভিস প্রোবাইডার কে অবশ্যই (app/config/app.php) providers array তে যুক্ত করতে হবে:   
                <div class="codeBox">
                    <xmp>
                        public function register()
                        {
                            
                            Blade::component('layouts.app', 'admin-layout');
                        }
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>



