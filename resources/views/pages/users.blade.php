@extends('layouts.default')

@section('content')
<div class="container">
   
    @livewire('user.main')




</div>
@endsection
@section('customcss')
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/dashboard/users.css">
@endsection
@section('customscript')
    
<script>
   

    window.addEventListener('showdelConfirm',event =>{
    
    Swal.fire({
          title: 'Delete User ?',
          text: "Are you sure u want to delete the following User Account",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Delete'
        }).then((result) => {
          if (result.isConfirmed) {
              Livewire.emit('delUserConfirmed')
          }
        })
  })
  
  window.addEventListener('Userdeleted',event =>{
    Swal.fire(
        'Deleted!',
        'The following account has been removed from system.',
        'success'
      )
  })

</script>

@endsection