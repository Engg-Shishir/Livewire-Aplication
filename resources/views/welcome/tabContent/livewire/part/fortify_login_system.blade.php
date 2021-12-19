
<div class="card collapsed-card p-0">
    <div class="card-header">
        <a target="_blank" href="">Fortify Login System</a>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>Install Package :  
                <div class="codeBox">
                    <xmp>
                        composer require laravel/fortify
                    </xmp>
                </div>
            </li>
            <li>Publish Fortify : 
                <div class="codeBox">
                    <xmp>
                            php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
                    </xmp>
                </div>
            </li>
            <li>Mgrate : 
                <div class="codeBox">
                    <xmp>
                        php artisan migrate
                    </xmp>
                </div>
            </li>
            <li>Add Fortify Service Provider (app/config/app.php) providers array :  
                <div class="codeBox">
                    <xmp>    
                            App\Providers\FortifyServiceProvider::class,
                    </xmp>
                </div>
            </li>
            <li>Then go to (app/Providers/FortifyServiceProvider.php) :
                <div class="codeBox">
                    <xmp>
                        public function boot()
                        {
                            Fortify::loginView(function () {
                                return view('auth.login');
                            });
                        }
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>



