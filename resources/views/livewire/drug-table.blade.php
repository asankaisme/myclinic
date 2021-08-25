<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('All Available List') }}
            </div>
            <div class="card-body">
                
                <div id="tblAria" class="col-md-12">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Drug Name</th>
                                <th>Available Quantity</th>
                                <th>ROL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($drugs->count() > 0)
                                @foreach ($drugs as $drug)
                                    <tr>
                                        <td>{{ $drug->drgNme }}</td>
                                        <td>{{ $drug->avlQty }}</td>
                                        <td>{{ $drug->rol }}</td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" title="Edit"><img src="{{ asset('assets/svgs/pen.svg') }}" alt="Bootstrap" width="16" height="16"></span></a>
                                            <a href="#" data-toggle="tooltip" title="Delete"><img src="{{ asset('assets/svgs/trash.svg') }}" alt="Bootstrap" width="16" height="16"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                
                            @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
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