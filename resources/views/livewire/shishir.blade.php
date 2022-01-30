<div style="border:2px solid red; width:100%;">
    <div class="row">
        <div class="col-md-4" >
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                        <button type="button" class="btn btn-default btn-sm mr-1"><i class="fas fa-user-alt"></i></button> <strong>People you may know</strong>
                        </div>
                        <div>
                        <button wire:click="refresh" type="button" class="btn btn-default btn-sm">
                            <i wire:target="refresh" wire:loading.class="fa-spin" class="fas fa-sync-alt"></i>
                        </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- {{ $message }} --}}
                    @foreach ($users as $user)
                    <div class="row" style="border-bottom:2px solid rgb(223, 222, 222);">
                        <div class="col-md-8">
                            <div class="pb-2" style="display:flex; align-items:center;">
                                <img style="height: 40px; width:40px;border-radius: 100%;" src="{{ $user->avatar_url }}" alt="">
                                <div class="ml-2">
                                    <strong class="mb-1">{{ $user->name }}</strong><br>
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pb-2" style="display:flex; align-items:center;">
                            @if ( $user->role == "user")
                                <button  wire:click="ClickButton({{$user}})"  class="btn btn-block btn-outline-dark btn-sm"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;User</button>
            
                            @else
                                <button  wire:click="ClickButton({{$user}})"  class="btn btn-block btn-dark btn-sm"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;Admin</button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    window.addEventListener('successAlert', event =>{
        toastr.success(event.detail.message, 'Success!');
    });
</script>  
@endpush
 