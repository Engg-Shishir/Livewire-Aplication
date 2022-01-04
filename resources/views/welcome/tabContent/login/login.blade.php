
<div id="login" class="content tabcontent" style="display: block;height:75vh;">
    <div class="row">
        <div class="col-md-7 mx-auto">
            {{-- This login form and layout.login form are same --}}
            <div class="card">
                <div class="card-header text-center">
                <a class="h1"><b><i class="fas fa-shield-alt"></i></b></a>
                </div>
                <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
            
                 {{-- This login route provide fortify by default --}}
                 <div class="row">
                     <div class="col-md-10 mx-auto">
                         
                       @include('welcome.tabContent.login.part.form')
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>