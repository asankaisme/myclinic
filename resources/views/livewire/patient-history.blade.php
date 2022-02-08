<div>
                        <table class="table table-sm table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($treatments as $treatment)
                                <tr>
                                    <td>{{ $treatment->id }}</td>
                                    <td><a href="#">{{ $treatment->created_at->format('d/m/Y') }}</a></td>
                                </tr>
                                {{-- <p>{{ $treatment->created_at->format('d/m/Y') }}</p> --}}
                                @endforeach
                              
                            </tbody>
                        </table>
        
</div>
