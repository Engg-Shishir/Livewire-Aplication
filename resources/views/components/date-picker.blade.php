<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <input  type="text" class="form-control datetimepicker-input" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" />
</div>

@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker5').datetimepicker({
                format:'LT',
            });
        });
    </script>  
@endpush