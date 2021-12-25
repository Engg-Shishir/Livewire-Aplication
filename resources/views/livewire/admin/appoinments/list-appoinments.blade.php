<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            </div>

            <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex justify-content-between w-100">
                            <a href="{{ route("admin.appoinments.create") }}">
                                <button class="btn btn-dark">
                                    <i class="fas fa-plus text-danger m2-2"></i>
                                        <span>Add New Appoinments</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
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
                       {{-- Laravel default paginating. This also required for livewire pagination --}}
                       {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

  <!-- Add New user modal Modal -->
    <!-- Modal -->

        <!-- Modal -->
        <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center">
                            <h3 class="">
                               Confirm Delete User !
                            </h3>
                        </div>
                        <div class="modal-body d-flex justify-content-center p-2">
                            <img src="{{ asset('image/danger.png') }}" height="150px" width="150px"alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancle</button>
                            <button  type="button" wire:click.prevent="confirmUserDelete" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Delete</button>
                        </div>
                    </div>
            </div>
          </div>
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


    window.addEventListener('openConfirmDeleteModel', event =>{
            $('#deleteUserModal').modal('show');
    });

    window.addEventListener('hideDeleteUserModal', event =>{
            $('#deleteUserModal').modal('hide');
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
