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
                   <div class="card">
                       <div class="card-body"></div>
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
