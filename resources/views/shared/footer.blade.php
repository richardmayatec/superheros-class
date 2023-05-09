<footer class="fixed-bottom bg-primary py-2">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="mb-0 text-white">&copy; {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

<script>
$(document).ready(function () {
    $('#datatable').DataTable();
});
</script>
</body>
</html>