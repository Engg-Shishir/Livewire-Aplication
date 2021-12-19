
<div id="login" class="content tabcontent">
    <div class="row">
        <div class="col-md-7 mx-auto">
            {{-- This login form and layout.login form are same --}}
            <div class="card card-outline card-warning">
                <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Sign In</b></a>
                </div>
                <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
            
                {{-- This login route provide fortify by default --}}
                @include('welcome.tabContent.login.part.form')
                </div>
            </div>
        </div>
    </div>
</div>