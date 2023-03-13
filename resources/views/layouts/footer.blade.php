<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
{{-- <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer> --}}
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/auth-login.js')}}"></script>



<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/charts/chart-chartjs.js')}}"></script>
<!-- END: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/app-file-manager.js')}}"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/forms/form-repeater.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/forms/form-file-uploader.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-file-uploader.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/file-uploaders/dropzone.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/forms/form-select2.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })


    /** ---------------------------- //
     *  @group viewport trigger script 
     * for adding or removing classes from elements in view within viewport
     */

    var $animationElements = $('.animate__animated');
    var $window = $(window);

    // ps: Let's FIRST disable triggering on small devices!
    var isMobile = window.matchMedia("only screen and (max-width: 768px)");
    if (isMobile.matches) {
        $animationElements.removeClass('animate__animated');
    }

    function checkIfInView() {

        var windowHeight = $window.height();
        var windowTopPosition = $window.scrollTop();
        var windowBottomPosition = (windowTopPosition + windowHeight);

        $.each($animationElements, function() {
            var $element = $(this);
            var elementHeight = $element.outerHeight();
            var elementTopPosition = $element.offset().top;
            var elementBottomPosition = (elementTopPosition + elementHeight);
            var animacion = $element.data('animate');
            //check to see if this current container is within viewport
            if ((elementBottomPosition >= windowTopPosition) &&
                (elementTopPosition <= windowBottomPosition)) {
                $element.addClass(animacion);
            } else {
                //$element.removeClass(animacion);
            }
        });
    }

    $window.on('scroll resize', checkIfInView);
    $window.trigger('scroll');

    jQuery('.numero').keyup(function() {
        this.value = this.value.replace(/[^1-9\.]/g, '');
    });

    $('#enviar-lead').on('click', function(e) {

        e.preventDefault();

        $('#msj-form').html("")

        var dni = $('#dni').val();
        var celular = $('#celular').val();

        if (dni == "") {
            $('#msj-form').html("Ingrese un número de DNI");
            return false;
        } else if (dni.length < 8) {
            $('#msj-form').html("Ingrese por lo menos 8 dígitos para el DNI.");
            return false;
        } else if (celular == "") {
            $('#msj-form').html("Ingrese un número de celular");
            return false;
        } else if (celular.length < 9) {
            $('#msj-form').html("Ingrese por lo menos 9 dígitos para el celular.");
            return false;
        }



        $(this).prop('enabled', 'false');
        $(this).html('Enviando datos');



        var datos = $('#frm-datos').serialize();

        console.log(datos);

        $.ajax({
            method: 'post',
            data: datos,
            url: 'controller/leadController.php',
            success: function(data) {
                console.log(data);
                setTimeout(function() {
                    if (data == 1) {
                        $('#msj-lead').html("Se envió correctamente sus datos.");
                        $('.input_lead').val("");
                    } else {
                        $('#enviar-lead').prop('enabled', 'true');
                        $('#enviar-lead').html('¡Da el primer paso aquí!');
                    }
                }, 500);
            }
        });
    });
</script>



<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js'>
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" type="text/javascript"></script>

<!-- BEGIN: datatables-->
<script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
{{-- <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script> --}}
<script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>


<script src="{{asset('app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
<script src="{{asset('app-assets/js/funciones_generales.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>

@yield('js')
</body>
<!-- END: Body-->

</html>