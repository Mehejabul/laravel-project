<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer ">
    <!--begin::Footer container-->
    <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2023&copy;</span>
            <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<!--begin::App layout builder-->
<div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings"
    data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
    data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
    data-kt-drawer-close="#kt_app_layout_builder_close">
</div>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('backend')}}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('backend')}}/assets/js/scripts.bundle.js"></script>
<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('backend')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="{{asset('backend')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('backend')}}/assets/js/widgets.bundle.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/widgets.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/utilities/modals/new-target.js"></script>
<script src="{{asset('backend')}}/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->

</body>

</html>
