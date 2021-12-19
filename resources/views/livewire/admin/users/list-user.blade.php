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
                                    <i class="fas fa-plus text-danger m2-2"></i> Add User
                                </button>
                        </div>
                    </div>
                    <div class="card-body">
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
                            <tbody>
                               
                            </tbody>
                            </table>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                    </div>
                </div>
            </section>
            </div>
        </div>
    </section>

  <!-- Add New user modal Modal -->
    <!-- Modal -->
    <div class="modal fade" id="addUserForm" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header  p-0 bg-gray-dark d-flex justify-content-center">
                    <h3 class="text-light">
                            <span>Add New User</span>
                    </h3>
                </div>
                <div class="modal-body">
                    <form autocomplete="true" wire:submit.prevent="createUser">
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
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i> Save
                            </button>
                        </div>
                    </form>                       
                </div>
            </div>
        </div>
      </div>
</div>


<script>
    window.addEventListener('AddUserModalOpen', event =>{
        $('#addUserForm').modal('show');
    });
</script>
