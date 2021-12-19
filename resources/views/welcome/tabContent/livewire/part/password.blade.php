



            
<div class="card collapsed-card p-0">
    <div class="card-header">
        <a class="card-title">Pasword hassing management </a>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
        </div>
    </div>
    <div class="card-body" style="display: none;">
        <ul>
            <li>
                <a>First validate password then hash the password</a> :  
                <div class="codeBox">
                    <xmp>
                        $validatedData = Validator::make($this->state,[
                          'password' => 'required|confirmed'
                        ])->validate();
                  
                         $validatedData['password'] = bcrypt( $validatedData['password']);

                         or

                         $hash = password_hash($validatedData['password'], PASSWORD_DEFAULT);
                    </xmp>
                </div>
            </li>
            <li>
                <a>check database password & inserted password is match or not</a> :  
                <div class="codeBox">
                    <xmp>     

                        $verify = password_verify($insertPassword, $hashDatabasePassword);
                  
                        if($verify){
                          dd("Same Password");
                        }
                    </xmp>
                </div>
            </li>
        </ul>
    </div>
</div>