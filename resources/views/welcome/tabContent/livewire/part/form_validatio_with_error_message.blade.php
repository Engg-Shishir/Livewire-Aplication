



            
<div class="card collapsed-card p-0">
    <div class="card-header">
        <a target="_blank" href="https://github.com/ShishirBhuiyan/Livewire/commit/3926f439b3dc00762cbbd564411b80cf0f1e279d" class="card-title">Form Validation </a>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>
                <a>Inside Class File</a> :  
                <div class="codeBox">
                    <xmp>
                   <note>import this : use Illuminate\Support\Facades\Validator;</note>

                        $validatedData = Validator::make($this->ArrayForUserInputFieldValue,[
                          'name' => 'required',
                          'email' => 'required|email|unique:users',
                          'password' => 'required|confirmed'
                        ])->validate();
                    </xmp>
                </div>
            </li>
            <li>
                <a>Inside blade file</a> :  
                <div class="codeBox">
                    <xmp>
                        👆🏿👆🏿
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>