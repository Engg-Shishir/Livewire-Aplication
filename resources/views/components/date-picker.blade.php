
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <input {{ $attributes }} type="text" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" 
    onchange="this.dispatchEvent(new InputEvent('input'))"
    />

@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker5').datetimepicker({
                format: 'L'
            });
        });
    </script>
    
@endpush

