
<input {{ $attributes }} type="text" class="form-control datetimepicker-input" id="{{ $id }}" data-toggle="datetimepicker" data-target="#{{ $id }}"
onchange="this.dispatchEvent(new InputEvent('input'))"
/>



@push('scripts')
    <script type="text/javascript">
            $('#{{ $id }}').datetimepicker({
                format:'LT',
            });
    </script>    
@endpush