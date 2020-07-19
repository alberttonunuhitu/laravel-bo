<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

@push('page_scripts')
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
@endpush
