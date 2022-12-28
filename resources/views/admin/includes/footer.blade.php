<!-- JAVASCRIPT -->
<!-- <script src="https://jqueryvalidation.org/files/lib/jquery.js"></script> -->

<script src="{{ URL::to('admin/assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

 <script src="{{ URL::to('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{ URL::to('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
 <script src="{{ URL::to('admin/assets/libs/node-waves/waves.min.js')}}"></script>
 <script src="{{ URL::to('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
 <script src="{{ URL::to('admin/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
 <script src="{{ URL::to('admin/assets/js/plugins.js')}}"></script>


<!--datatable js-->
<script src="{{ URL::to('admin/assets/libs/datatables/1.11.5/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/libs/datatables/1.11.5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/libs/datatables/responsive/2.2.9/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/libs/datatables/buttons/2.2.2/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/libs/datatables/buttons/2.2.2/js/buttons.print.min.js')}}"></script>
<script src="{{ URL::to('admin/assets/libs/datatables/buttons/2.2.2/js/buttons.html5.min.js')}}"></script>

 <!-- apexcharts -->
 <script src="{{ URL::to('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

 <!-- Vector map-->
 <script src="{{ URL::to('admin/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
 <script src="{{ URL::to('admin/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

 <!--Swiper slider js-->
 <script src="{{ URL::to('admin/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

 <!-- Dashboard init -->
 <script src="{{ URL::to('admin/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

   <!-- Sweet Alerts js -->
    <script src="{{ URL::to('admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Sweet alert init js-->
<script src="{{ URL::to('admin/assets/js/pages/sweetalerts.init.js')}}"></script>
<script src="{{URL::to('admin/assets/js/pages/datatables.init.js')}}"></script>
<script src="{{URL::to('admin/assets/js/pages/notifications.init.js')}}"></script>
<script src="{{URL::to('admin/assets/libs/prismjs/prism.js')}}"></script>



<!-- <script src="{{URL::to('admin/assets/js/pages/form-validation.init.js')}}"></script> -->

 <!-- App js -->
 <script src="{{ URL::to('admin/assets/js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>

	<script type="text/javascript">
    function blank_readURLImage(img_preview) {
        $('#'+img_preview).attr('src','');
    }

    function update_readURLImage(img_url,img_preview) 
    {
        $('#'+img_preview).removeClass('hide');
        $('#'+img_preview).attr('src',img_url);
    }
    function readURLImage(input,img_preview) 
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#'+img_preview).removeClass('hide');
            $('#'+img_preview).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    function success_notification(msg)
    {
      Toastify({
        text: msg,
        duration: 3000,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        style: {
          
          background: "linear-gradient(to right, #007500, #00A300)",
        },
      }).showToast();
    }

    function error_notification(msg)
    {
      Toastify({
        text: msg,
        duration: 3000,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        style: {
          background: "linear-gradient(to right, #BA0F30, #FF2511)",
        },
      }).showToast();
    }

</script>
