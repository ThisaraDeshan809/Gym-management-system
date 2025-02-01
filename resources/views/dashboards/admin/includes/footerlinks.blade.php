<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/threejs.js')}}"></script>
<script src="{{asset('/assets/js/plugins/orbit-controls.js')}}"></script>
<script src="{{asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/choices.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/datatables.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/quill.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/flatpickr.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/fullcalendar.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/dropzone.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jkanban.min.js')}}"></script>
    <script src="{{asset('/assets/js/plugins/dragula.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    @if(Session::has('message'))
        Toastify({
            text: "{{ Session::get('message') }}",
            duration: 5000,  // Duration in milliseconds
            close: true,
            gravity: "bottom",  // Toast position: "top", "bottom", "left", "right"
            position: "right",  // Toast position: "top", "bottom", "left", "right"
            backgroundColor: "{{ Session::get('alert-type') === 'success' ? '#4CAF50' : '#FF3333' }}",  // Background color based on alert type
        }).showToast();
    @endif
</script>


<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;

       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;

       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;

       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break;
    }
    @endif
</script>

<script>
  // Make sure this code is placed after including the Flatpickr library and the form HTML

  document.addEventListener("DOMContentLoaded", function () {
      flatpickr("#voucherDate", {
          allowInput: true,
          minDate: "today",
          dateFormat: "Y-m-d", // Set the desired date format
      });
  });

  </script>

<script>
    function ConfirmDelete(event, id) {
        event.preventDefault();

        // Show SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="{{asset('/assets/js/soft-ui-dashboard-pro-tailwind.js?v=1.0.1')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js" integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('script')
