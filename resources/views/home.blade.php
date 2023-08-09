@extends('layouts.default')

@section('content')
<div class="container">

   @livewire('home.main');
    
        
    




</div>
@endsection
@section('customcss')
    <link rel="stylesheet" href="/css/dashboard/home.css">
    <link rel="stylesheet" href="/css/dashboard/alerts.css">
    <link rel="stylesheet" href="/css/table.css">
@endsection
@section('customscript')
<script>
    jQuery(document).ready(function() {
        jQuery('#borrowmod').on('shown.bs.modal', function() {
            jQuery('#bcode').focus();
        });
    });
    jQuery(document).ready(function() {
        jQuery('#returnmod').on('shown.bs.modal', function() {
            jQuery('#bcodereturn').focus();
        });
    });
    window.addEventListener('close-modal',event=>{
        
        jQuery('#borrowmod').modal('hide');
        jQuery('#returnmod').modal('hide');
       
    })

    
</script>
@endsection