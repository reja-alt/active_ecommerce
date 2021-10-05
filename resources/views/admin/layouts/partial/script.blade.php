<!-- Bootstrap bundle JS -->
<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="{{ asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('public/assets/js/table-datatable') }}"></script>
<!--app-->
<script src="{{ asset('public/assets/js/app.js') }}"></script>
<script src="{{ asset('public/assets/js/index2.js') }}"></script>
<script>
new PerfectScrollbar(".best-product")
</script>

{{-- Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- Endm Toastr --}}
<script>
@if (Session::has('message'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.success("{{ session('message') }}");
@endif
@if (Session::has('error'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.error("{{ session('error') }}");
@endif
@if (Session::has('info'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.info("{{ session('info') }}");
@endif
@if (Session::has('warning'))
    toastr.options =
    {
    "closeButton" : true,
    "progressBar" : true
    }
    toastr.warning("{{ session('warning') }}");
@endif
</script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@stack('js')