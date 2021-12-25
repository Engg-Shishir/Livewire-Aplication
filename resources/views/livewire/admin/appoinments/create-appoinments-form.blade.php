

<div>
    <div class="content-header ">
        <div class="container-fluid ">
            <div class="card">
                <div class="card-header  bg-cyan">
                    <div class="row">
                        <div class="col-sm-6">
                           <h1 class="m-0 text-dark">Appointments</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item text-dark"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{ route('admin.appoinments') }}">Appointments</a></li>
                                <li class="breadcrumb-item active text-dark">Create</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form wire:submit.prevent="createAppointment" autocomplete="off">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title float-sm-right text-dark">
                                    <strong>Add New Appointment</strong>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="appointmentDate">Appoinment Date:</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                              </div>

                                              <x-date-picker wire:model.defer="state.date" id="appointmentDate" :error="'date'" />
                                                
                                                @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="appointmentTime">Appointment Time</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                </div>

                                                <x-timePicker wire:model.defer="state.time" id="appointmentTime" />
                                            </div>                                            
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group" wire:ignore.self>
                                            <label>Color picker:</label>
                                            <div class="input-group" id="ColorPicker">
                                                <input name="color" wire:model.defer="state.color" type="text" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-square"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div wire:ignore class="form-group">
                                            <label for="note">Note:</label>
                                            <textarea id="summernote" data-note="@this" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto">
                                <button type="button" class="btn btn-danger"><i class="fa fa-times mr-1"></i> Cancel</button>
                                <button id="submit" type="submit" class="btn btn-info"><i class="fa fa-save mr-1"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@push('scripts')
<script type="text/javascript">
    // Initialize Summernote Html Text Editor. Also set Livewire wire:ignore property using eval()
    $('#summernote').summernote({
            callbacks: {
                onBlur: function() {
                    let note = $(this).data('note');
                    eval(note).set('state.note', $('#summernote').val());
                }
            }
    });

</script>  

<script>
    //Initialize color Picker
    $('#ColorPicker').colorpicker().on('change', function(event) {
        // Show color Preview in its icon
        $('#ColorPicker .input-group-text').css('background-color', event.color.toString());
    });
</script>

<script>
    
  // Global toast notification section
  window.addEventListener('alertSuccess', event =>{
    toastr.success(event.detail.message, 'Success!');
  });
  window.addEventListener('alertWarning', event =>{
    toastr.warning(event.detail.message, 'Warning!');
  });
  window.addEventListener('alertDanger', event =>{
    toastr.danger(event.detail.message, 'Danger!');
  });


    $('form').submit(function() {
        // Get color and set it inside its wire:model
        @this.set('state.color', $('[name=color]').val());
    })
</script>


@endpush
