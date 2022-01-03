<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            </div>

            <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header d-flex ">
                        <div class="d-flex justify-content-between w-100">
                            <a href="{{ route("admin.appoinments.create") }}">
                                <button class="btn btn-dark">
                                    <i class="fas fa-plus text-danger m2-2"></i>
                                        <span>Add New Appoinments</span>
                                </button>
                            </a>
   
                            <div class="btn-group ml-auto">
                               <button  wire:click="filterAppoinmentsByStatus " type="button" class="btn {{ is_null($status) ? 'btn-secondary' : 'btn-default' }}">
                                 <span class="mr-1">All</span> 
                                 <span class="badge badge-pill badge-info">{{ $appoinmentsCount }}</span>
                               </button>
                             
                               <button wire:click="filterAppoinmentsByStatus('scheduled')" type="button" class="btn {{ ($status=='scheduled' ? 'btn-secondary' : 'btn-default') }}">
                                 <span class="mr-1">Scheduled</span>
                                 <span class="badge badge-pill badge-primary">{{ $scheduledAppoinmentsCount }}</span>
                               </button>
                             
                               <button wire:click="filterAppoinmentsByStatus('closed')" type="button" class="btn {{ ($status=='closed' ? 'btn-secondary' : 'btn-default') }}">
                                 <span class="mr-1">Closed</span>
                                 <span class="badge badge-pill badge-success">{{ $closedAppoinmentsCount }}</span>
                               </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                <th scope="col">
                                    <div class="icheck-primary d-inline ml-2">
                                        <input wire:model="selectPageRows" type="checkbox" value="" name="todo2" id="todoCheck2">
                                        <label for="todoCheck2"></label>
                                    </div>
                                    #
                                </th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appoinments as  $appoinment)
                                    <tr>
                                        <th scope="row">
                                            <div class="icheck-primary d-inline ml-2">
                                                <input wire:model="selectedRows" type="checkbox" type="checkbox" value="{{ $appoinment->id }}" name="todo2" id="{{ $appoinment->id }}">
                                                <label for="{{ $appoinment->id }}"></label>
                                            </div>
                                            {{ $loop->iteration }}
                                        </th>
                                        <td>{{ $appoinment->client->name }}</td>
                                        <td>{{ $appoinment->date }}</td>
                                        <td>{{ $appoinment->time }}</td>
                                        <td>
                                            <span class="badge badge-{{ $appoinment->status_badge }}">{{ $appoinment->status }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.appoinments.edit', $appoinment) }}">
                                                <i class="fas fa-edit text-warning m2-2"></i>
                                            </a>
                                            <a href="" wire:click.prevent = "confirmAppoinmentRemoval({{ $appoinment->id }})">
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>                                        
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                       {{-- Laravel default paginating. This also required for livewire pagination  --}}
                        {{ $appoinments->links() }}
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

</div>

@push('scripts')
<script>
    // Open user add mdal
    window.addEventListener('Add_Edit_UserModalOpen', event =>{
        $('#add_Edit_UserForm').modal('show');
    });

    // Modal close when form is submitted
    window.addEventListener('Add_Edit_UserModalClose', event =>{
        $('#add_Edit_UserForm').modal('hide');

        // Show toast notification alert
        toastr.success(event.detail.message, 'Success!');
    });


 




    
    window.addEventListener('showDeleteAppoinmentConfirmation', event =>{
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't to delete this Appoinment",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                Livewire.emit('appoinmentDeleteConfirmed')
                }
            })
    });

    window.addEventListener('alert', event =>{
            Swal.fire(
                event.detail.message ,
                'success'
            )
    });

</script>
    
@endpush
