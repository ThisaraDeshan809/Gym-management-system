<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="main.js"></script>


<script src="{{asset('assets/js/customfile.js')}}"></script>


<script>
    function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle('hidden')
    document.getElementById(collapseID).classList.toggle('block')
  }


AOS.init({
    delay: 200,
    duration: 1200,
    once: false,
  })
</script>


<script>
    function ConfirmDelete(event, id) {
        event.preventDefault();
    
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

                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('/assets/js/soft-ui-dashboard-pro-tailwind.js?v=1.0.1')}}"></script>
