@extends('layouts.default')

@section('content')
<div class="container">
    @livewire('device.detail', ['device' => $device])
</div>
@endsection
@section('customcss')
    <link rel="stylesheet" href="/css/dashboard/details.css">
@endsection
@section('customscript')
    <script>
        window.addEventListener('showdelConfirm',event =>{
    
    Swal.fire({
          title: 'Delete Device History ?',
          text: "Are you sure u want to delete the following Device History",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete'
        }).then((result) => {
          if (result.isConfirmed) {
              Livewire.emit('delConfirmed')
          }
        })
  })

  window.addEventListener('Historycleared',event =>{
    Swal.fire(
        'Deleted!',
        'History has been cleared',
        'success'
      )
  })
    </script>
@endsection