@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Passports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Passports Amount</a></li>
    </ol>
</nav>

<main>

        <div class="m-2 p-2 g-4 mb-3">
            <div class="container">
                <div class="row mb-5">
                    <div class="card col-md-12">
                        <form method="post" action="{{ route('passports.amount') }}">
                            @csrf
                            <div class="card-body d-flex">
                                <div class="m-2 p-2 input-group">
                                    <div class="row">
                                        <div class="col-md-5 mr-3">
                                            <input type="text" name="passport" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Passport Number">
                                        </div>
                                        <div class="col-md-3 mr-3">
                                            <input type="text" name="amount" class="form-control" id="amount" placeholder="Input Amount">
                                        </div>
                                        <div class="col-md-3 mr-3">
                                            <button type="submit" class="btn btn-primary">Add Amount</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table id="myTable" class="table table-bordered table-hover">
                            <thead>
                                <tr class="header">
                                    <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Name</th>
                                        <th scope="col" class="text-center">Passport Number</th>
                                        <th scope="col" class="text-center">Applying Country</th>
                                        <th scope="col" class="text-center">Work Type</th>
                                        <th scope="col" class="text-center">Agent</th>
                                        <th scope="col" class="text-center">Attested</th>
                                        <th scope="col" class="text-center">Amount</th>
                                        <th scope="col" class="text-center">Created At</th>
                                        <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $passports as $data )
                                <tr>
                                    <th scope="row">{{ $loop -> index + 1}}</th>
                                    <td>{{ $data -> name }}</td>
                                    <td>
                                        <a href="{{ route('passports.show',$data->id) }}" class="text-decoration-none">{{ $data -> passport }}</a>
                                    </td>

                                    <td>{{ $data -> applying_country }}</td>
                                    <td>{{ optional($data->services)->service }}</td>
                                    <td>{{ optional($data->agents)->name }}</td>
                                    <td>
                                        @if($data->attested == 1)
                                        Attested
                                        @else
                                        Non-Attested
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($data->amount)
                                        {{ number_format($data->amount, 2, '.', ',') }}
                                        @else

                                        @endif
                                    </td>
                                    <td  class="text-center">{{ $data -> created_at->format('d-m-y') }}</td>
                                    <td class="text-center">
                                        <div class="row">
                                            @if($data -> passportStatus == 'delivered')
                                            <div class="col m-1">
                                                <a class="btn btn-sm btn-info"  href="{{ route('passports.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                                            </div>
                                            @else
                                            <div class="col m-1">
                                                <a class="btn btn-sm btn-warning"  href="{{route('passports.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="col m-1">
                                                <form action="{{route('passports.trash',$data->id)}}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows
        for (i = 1; i < tr.length; i++) {
            // Initialize a boolean variable to determine if the row should be displayed
            var shouldDisplayRow = false;
            // Loop through all columns (td elements) in the current row
            for (j = 0; j < tr[i].getElementsByTagName("td").length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    // If the text in any column matches the search query, set shouldDisplayRow to true
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        shouldDisplayRow = true;
                        break; // Exit the loop if a match is found in this row
                    }
                }
            }
            // Set the display style of the row based on the value of shouldDisplayRow
            tr[i].style.display = shouldDisplayRow ? "" : "none";
        }
    }
</script>

@endsection
