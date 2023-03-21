@include('backend.includes.header')

<div id="layout-wrapper">

    {{--  topbar  --}}
    @include('backend.includes.topbar')

    {{--  leftsidebar  --}}
    @include('backend.includes.leftsidebar')

    {{--  contet  --}}
    <div class="main-content">
        @yield('content')
        {{--  endcontent  --}}

        {{--  footercontent  --}}
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())

                        </script> © Minia.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{--  endfootercontent  --}}

    </div>
</div>

{{--  rigtsidebar  --}}
@include('backend.includes.rightsidebar')

{{--  footer  --}}
@include('backend.includes.footer')
