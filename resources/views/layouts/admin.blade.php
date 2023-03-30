        @include('backend.includes.header')

        @include('backend.includes.script')

        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
                @include('backend.includes.navbar')
                <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                    <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                        data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

                        @include('backend.includes.logo')

                        @include('backend.includes.sidebar')
                  </div>

                   @yield('content')

       @include('backend.includes.footer')
