        <!-- Footer start -->
        <footer class="main-footer">© Frederico Dulio 2024</footer>
        <!-- Footer end -->

        </div>

        <!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="{{ asset('Admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('Admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('Admin/js/moment.js') }}"></script>

        <!-- Chartist JS -->
        <script src="{{ asset('Admin/vendor/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('Admin/vendor/apex/examples/radial/basic-radial-graph.js') }}"></script>


        <!-- Main Js Required -->
        <script src="{{ asset('Admin/js/main.js') }}"></script>

        <script src="{{ asset('toastr.min.js') }}"></script>
        <script src="{{ asset('toastr.js') }}"></script>

        <script>
            "use strict";
            var o = "rtl" === $("html").attr("data-textdirection");
            @if (session('success'))
                toastr.success("{{ session('success') }}",
                    "{{Auth::guard('admin')->user()->name}}", {
                        closeButton: !0,
                        tapToDismiss: !0,
                        progressBar: !0,
                        rtl: o
                    }
                );
            @endif
        </script>

        </body>

        </html>
