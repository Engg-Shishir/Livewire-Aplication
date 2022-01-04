
    <form action="{{ route('login') }}" method="POST">
        @csrf
        
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>

        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-4 ml-auto">
            <button type="submit" class="btn btn-default">Sign In &nbsp; <i class="fas fa-sign-in-alt"></i></button>
        </div>
        <!-- /.col -->
        </div>
    </form>