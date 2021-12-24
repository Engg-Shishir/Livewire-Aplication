

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
                                            <label>Start Date:</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                              </div>

                                              <x-date-picker wire:model.defer="state.start_date" id="appointmentStartDate"/>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Date:</label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                              </div>

                                              <x-date-picker wire:model.defer="state.end_date" id="appointmentEndDate"/>

                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Appointment Time:</label>
                                            <div wire:ignore class="input-group date" id="appointmentTime" data-target-input="nearest" data-appoinmenttime="@this">

                                                <input  type="text" class="form-control datetimepicker-input" id="appointmentTimeInput"data-target="#appointmentTimeInput">

                                                <div class="input-group-append" data-target="#appointmentTime" data-toggle="datetimepicker">
                                                    <div class="input-group-text">
                                                        <i class="far fa-clock"></i>
                                                    </div>
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
    // Initialize DatePicker
    $('#appointmentDate').datetimepicker({
        format:'L',
    });

    // Listen Livewire change event.
    $('#appointmentDate').on("change.datetimepicker", function(e){
      let date = $(this).data('appoinmentdate');

    // here eval() meathoad use as proxy of  wire:model.defer="state.date". So we dont need to use any wire model inside input element
      eval(date).set('state.date', $('#appointmentDateInput').val());
    });


    // Intialize Time Picker
    $('#appointmentTime').datetimepicker({
        format: 'LT'
    });
    
    // Listen Livewire change event using js browser event for time picker.
    $('#appointmentTime').on("change.datetimepicker", function(e){
      let time = $(this).data('appoinmenttime');
      eval(time).set('state.time', $('#appointmentTimeInput').val());
    });


    //  Initialize Summernote Html Text Editor. Also set Livewire wire:ignore property using eval()
    $('#summernote').summernote({
            callbacks: {
                onBlur: function() {
                    let note = $(this).data('note');
                    eval(note).set('state.note', $('#summernote').val());
                }
            }
    });

</script>  
@endpush
