<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')
    @toastr_css

    <!-- Start GA -->

    <!-- /END GA --></head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- Search Pages --}}
            @include('layouts.admin.navbar')

            {{-- Sidebar --}}
            @include('layouts.admin.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                    <h1>@yield('header')</h1>
                    @yield('button-add')
                    <div class="section-header-breadcrumb">
                        @yield('breadcrumb')
                    </div>
                    </div>
                    <div class="section-body">
                        <h2 class="section-title">@yield('header-2')</h2>
                        <p class="section-lead">
                            @yield('desc')
                        </p>
                        @include('layouts.flash')
                        @yield('content')
                    </div>
                </section>
            </div>

            @include('backend.bidangstudi.modal')
            @include('backend.kompetensikeahlian.modal')



            {{-- Footer --}}
            <footer class="main-footer">
                <div class="footer-left">
                Copyright &copy; 2018
                </div>
                <div class="footer-right">

                </div>
            </footer>

        </div>
    </div>

    @yield('script')

    {{-- JS Modal Tag --}}
    <script>
        $('#edit-bs').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('nama')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#nama').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-bs').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('nama')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#nama').val(name)
            modal.find('#id').val(id)
          })
    </script>
    <script>
        $('#edit-kk').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('nama')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#nama').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-kk').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('nama')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#nama').val(name)
            modal.find('#id').val(id)
          })
    </script>

    {{-- some hidden comment --}}
</body>
@toastr_js
@toastr_render
</html>
