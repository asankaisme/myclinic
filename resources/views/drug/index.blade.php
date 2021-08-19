@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dt/jquery.dataTables.min.css') }}"
@endsection

@section('content')
    <div class="container">
        @livewire('add-drug')
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" defer ></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        // tooltip initialising script
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endpush