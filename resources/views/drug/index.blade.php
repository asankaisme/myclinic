@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/dt/jquery.dataTables.min.css') }}"
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row mt-2 mx-2 py-1 float-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDrugModal">
                    Add New Drug
                </button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">{{ __('Drugs List') }}
                    
                </div>
                <div class="card-body">
                    <div id="tblAria" class="col-md-12">
                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Drug Name</th>
                                    <th>Available Quantity</th>
                                    <th>Re-Order Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($drugs as $drug)
                                        <tr>
                                            <td>{{ $drug->drgNme }}</td>
                                            <td>{{ $drug->avlQty }}</td>
                                            <td>{{ $drug->rol }}</td>
                                            <td>
                                                <a href="#" data-toggle="tooltip" title="Edit"><img src="{{ asset('assets/svgs/pen.svg') }}" alt="Bootstrap" width="16" height="16"></span></a>
                                                <a href="#"><img src="{{ asset('assets/svgs/journal-x.svg') }}" alt="Bootstrap" width="16" height="16" data-toggle="tooltip" title="View"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- addDrugModal -->
                    <div class="modal fade" id="addDrugModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Drug</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('drugs.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="drgNme" placeholder="Drug Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="avlQty" placeholder="Available Quantity">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="rol" placeholder="Re-order Level">
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <input type="cancel" class="btn btn-secondary" value="Cancel"> --}}
                                        <input type="submit" class="btn btn-primary" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- end addDrugModal --}}
            </div>
            <p></p>
            @if (session()->has('msgSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Great! </strong> {{ session()->get('msgSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
            @endif
            @if (session()->has('dltMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>OK! </strong> {{ session()->get('msgSuccess') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
            @endif
        </div>
    </div>
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