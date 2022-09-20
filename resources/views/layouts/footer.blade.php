<!-- BEGIN: Vendor JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/vendors.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/jquery/jquery.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/moment.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/socket.io/socket.io.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/clipboard/clipboard.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-invoice-list.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/jkanban/jkanban.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/dragula.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/toastr.min.js"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/js/core/app-menu.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-chat.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/components/components-alerts.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-todo.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-calendar-events.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-calendar.js"></script>
<!-- <script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-project.js"></script> -->
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-user-list.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/page-account-settings-account.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/page-account-settings-security.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-invoice.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/cards/card-advance.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-email.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/modal-add-role.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-access-roles.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-kanban.js"></script>

<!-- END: Page JS-->



<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>




<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25" href="https://atarifix.com/" target="_blank">Atarifix Consulting Limited</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Dervestork 1.0<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->



</body>


</html>