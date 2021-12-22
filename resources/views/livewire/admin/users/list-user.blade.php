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
                                <button class="btn btn-dark" wire:click.prevent="openAddUserModal">
                                    <i class="fas fa-plus text-danger m2-2"></i>
                                        @if ($showEditModal)
                                        <span>Edit User</span>
                                        @else  
                                        <span>Add New User</span>
                                        @endif
                                </button>
                        </div>
                    </div>
                    <div class="card-body">
                        
                         <div>
                            @if (session()->has('message'))
                            <div class="alert alert-warning alert-dismissible fade show mb-2" role="alert">
                                <strong>{{ session('message') }}</strong> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif
                        </div>

                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody wire:loading.class="searchLoading">
                                @forelse ($users as $key => $user)
                                    <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    {{-- <td>
                                        @if ($user->avatar)
                                        <img src="{{ asset('storage/avatars/'.$user->avatar) }}" style="width: 70px; height:70px;">
                                        @else
                                        <img src="{{url('noimage.png')}}" style="width: 70px; height:70px;" alt="">
                                        @endif
                                    </td> --}}
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- <td>
                                      <select class="form-control" wire:change="changeRole({{ $user }}, $event.target.value)">
                                        <option value="admin" {{ ($user->role === 'admin') ? 'selected' : '' }}>ADMIN</option>
                                        <option value="user" {{ ($user->role === 'user') ? 'selected' : '' }}>USER</option>
                                      </select>
                                    </td> --}}
                                    <td>
                                        <a href="" wire:click.prevent="showEditUserModal({{ $user }})">
                                            <i class="fas fa-edit text-warning m2-2"></i>
                                        </a>
                                        <a href="" wire:click.prevent="showDeleteUserModal({{ $user->id }})">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                             <img src="{{ asset('image/search.svg') }}" alt="">
                                             <br><br>
                                             <p>No Results Found</p>
                                        </td>         
                                    </tr>

                                @endforelse
                            </tbody>
                            </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                       {{-- Laravel default paginating. This also required for livewire pagination --}}
                       {{ $users->links() }}
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

  <!-- Add New user modal Modal -->
    <!-- Modal -->
    <div class="modal fade" id="add_Edit_UserForm" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header  p-0 bg-gray-dark d-flex justify-content-center">
                        <h3 class="text-light">
                            @if ($showEditModal)
                              <span>Edit & Update User</span>
                              @else  
                              <span>Add New User</span>
                            @endif
                        </h3>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="true" wire:submit.prevent="{{ $showEditModal ? 'Edit_And_UpdateUser' : 'createUser'}}">
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" wire:model.defer="ArrayForUserInputFieldValue.name" class="form-control @error('name') is-invalid  @enderror" id="name" placeholder="Enter your name">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" wire:model.defer="ArrayForUserInputFieldValue.email" class="form-control @error('email') is-invalid  @enderror" id="email" placeholder="Enter email">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" wire:model.defer="ArrayForUserInputFieldValue.password" class="form-control @error('password') is-invalid  @enderror" id="password" placeholder="Password">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" wire:model.defer="ArrayForUserInputFieldValue.password_confirmation" class="form-control" id="cpassword" placeholder="Confirm Password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancle</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                                    @if ($showEditModal)
                                       <span>Update</span> 
                                    @else
                                       <span>Save</span>
                                    @endif
                                </button>
                            </div>
                        </form>                       
                    </div>
                </div>
                </div>
    </div>

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

</script>
