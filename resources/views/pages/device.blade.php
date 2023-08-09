@extends('layouts.default')

@section('content')
<div class="container">
   
    @livewire('device.main')




</div>
@endsection
@section('customcss')
    <link rel="stylesheet" href="/css/table.css">
    <link rel="stylesheet" href="css/dashboard/devices.css">
@endsection
@section('customscript')
    
<script>
    window.addEventListener('close-modal',event=>{
        
        jQuery('#addmod').modal('hide');
        jQuery('#editmod').modal('hide');
       
    })


    window.addEventListener('showdelConfirm',event =>{
    
    Swal.fire({
          title: 'Delete Device ?',
          text: "Are you sure u want to delete the following Device details",
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
  
  window.addEventListener('Devdeleted',event =>{
    Swal.fire(
        'Deleted!',
        'The following device has successfuly been removed from system.',
        'success'
      )
  })

</script>

@endsection