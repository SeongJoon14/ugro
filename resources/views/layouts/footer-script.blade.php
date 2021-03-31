        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/metismenu/metismenu.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/node-waves/node-waves.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/boxicons.init.js') }}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        <script>
            $(window).on('hashchange', function (e) {
                refreshContent()
            });
            if (window.location.hash) {
                $(window).trigger('hashchange')
            }
            $(document).ready(function() {
                $('#sidebar-menu #side-menu a.ajax-menu').click(function(e) {                  
                    $('#sidebar-menu  #side-menu li').removeClass('mm-active');
                    $(this).parent('li').addClass('mm-active');

                    $('#sidebar-menu  #side-menu li a').removeClass('active');
                    $(this).addClass('active');
                });
            });

            function refreshContent() {
                var hash = window.location.hash.substring(1);
                var url="{{ url('')}}"+'/'+hash;
                console.log('targetPage: ', url);    
                ajaxLoadPage(url);           
            }

            function ajaxLoadPage(url) {
                $.ajax({
                    url: url,
                    beforeSend: function() {
                        $(".main-content").hide();
                        $(".ajax-loader").show();
                    },
                    success: function(content) {
                        $(".main-content").html(content);
                        $(".ajax-loader").hide();
                        $(".main-content").show();
                    }
                })
            }

        </script>
        @yield('script-bottom')
