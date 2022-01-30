

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
       @foreach ($users as $item)
         <div class="row" style="border-bottom:2px solid rgb(223, 222, 222);">
             <div class="col-md-8">
                 <div class="pb-2" style="display:flex; align-items:center;">
                     <img style="height: 40px; width:40px;border-radius: 100%;" src="{{ $item->avatar_url }}" alt="">
                     <div class="ml-2">
                         <strong class="mb-1">{{ $item->name }}</strong><br>
                         <span>{{ $item->email }}</span>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 pb-2" style="display:flex; align-items:center;">
                @if ( $item->role == "user")
                     <a href="" wire:click="ok"  class="btn btn-block btn-outline-dark btn-sm"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;&nbsp;User</a>

                @else
                    <a href="" wire:click.prevent="ok({{ $item->role }})"  class="btn btn-block btn-dark btn-sm"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;Admin</a>
                @endif
             </div>
         </div>
       @endforeach
    </div>
</div>
