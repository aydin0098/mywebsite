<!-- BEGIN: Vendor JS-->
<script src="{{asset('back/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('back/app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/core/app.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/scripts/components.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/scripts/customizer.min.js')}}"></script>
<script src="{{asset('back/app-assets/js/scripts/footer.min.js')}}"></script>
<!-- END: Theme JS-->
@jquery
@toastr_js
@toastr_render
@yield('scripts')

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
