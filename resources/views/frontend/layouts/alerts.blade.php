@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.all.min.js"></script>
<script>
    const Toast = Swal.mixin({
  toast: true,
  position: 'top-start',
  iconColor: 'white',
  customClass: {
    popup: 'colored-toast'
  },
  showConfirmButton: false,
  timer: 6000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }

});
</script>
@endpush
@if(session('success'))
@push('scripts')
<script>

Swal.fire({
  title: 'عملية ناجحة',
  text: '{{session('success')}}',
  icon: 'success',
  confirmButtonText: 'Thanks'
});

    // Swal.fire(
    //     'عملية ناجحه',
    //     '{{session('success')}}',
    //     'success'
    // )
</script>
@endpush

@elseif(session('error'))

@push('scripts')
<script>
    Swal.fire(
        'لم يتم إكمال العملية',
        '{{session('error')}}',
        'error'
    )
</script>
@endpush

@endif
