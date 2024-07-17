@extends('admin.layout.app')
@section('main-content')

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{-- route('transection.index') --}}"  class="link-underline-light link-dark">Travel</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Air Ticket</a></li>
        </ol>
    </div>
</div>

<main>
<!-- main Section Start -->

<div class="container mb-4 p-4">
    <div class="card shadow p-3">
        <div class="card-body">
            <h5>Air Ticket </h5>
            <form action="{{ route('airTicket.store') }}" method="POST">
                @csrf
                @include('validation.validate')

                <div class="row d-flex justify-content-between">
                    <div class="col-md-2">
                        <label class="form-label" for="airline">Airlinces</label>
                        <select class="form-select" id="airline" name="airline">
                            <option value="">--Select Air-Line--</option>
                            <option value="G9">Air Arabia</option>
                            <option value="AK">AirAsia</option>
                            <option value="2A">Air Astra</option>
                            <option value="AI">Air India</option>
                            <option value="YP">Air Premia</option>
                            <option value="OD">Batik Air Malaysia</option>
                            <option value="BG">Biman Bangladesh Airlines</option>
                            <option value="CX">Cathay Pacific</option>
                            <option value="MU">China Eastern Airlines</option>
                            <option value="CZ">China Southern Airlines</option>
                            <option value="KB">Drukair</option>
                            <option value="MS">Egyptair</option>
                            <option value="EK">Emirates</option>
                            <option value="ET">Ethiopian Airlines</option>
                            <option value="FZ">Flydubai</option>
                            <option value="GF">Gulf Air</option>
                            <option value="H9">Himalaya Airlines</option>
                            <option value="6E">IndiGo</option>
                            <option value="J9">Jazeera Airways</option>
                            <option value="LJ">Jin Air</option>
                            <option value="KU">Kuwait Airways</option>
                            <option value="MH">Malaysia Airlines</option>
                            <option value="Q2">Maldivian</option>
                            <option value="VQ">Novoair</option>
                            <option value="WY">Oman Air</option>
                            <option value="QR">Qatar Airways</option>
                            <option value="OV">Salam Air</option>
                            <option value="SV">Saudia</option>
                            <option value="SQ">Singapore Airlines</option>
                            <option value="UL">SriLankan Airlines</option>
                            <option value="FD">Thai AirAsia</option>
                            <option value="TG">Thai Airways International</option>
                            <option value="SL">Thai Lion Air</option>
                            <option value="TK">Turkish Airlines</option>
                            <option value="BS">US-Bangla Airlines</option>
                            <option value="UK">Vistara</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label class="form-label" for="flightFrom">From</label>
                        <input type="text" name="flightFrom" class="form-control" id="flightFrom">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="destination">Destination</label>
                        <input type="text" name="destination" class="form-control" id="destination">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="departureDate">Departure Date</label>
                        <input type="date" name="departureDate" class="form-control" id="departureDate">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label" for="returnDate">Return Date</label>
                        <input type="date" name="returnDate" class="form-control" id="returnDate">
                    </div>
                </div>

                <div class="row d-flex justify-content-between mt-2">
                    <div class="col-md-3">
                        <label class="form-label" for="agentsBd">Buyer Name</label>
                        <select class="form-select" id="agentsBd" name="agentsBd" onchange="toggleFields()">
                            <option value="">--Select--</option>
                            <!-- Display existing options using a loop -->
                            @forelse ($agentsBd as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @empty
                            @endforelse
                            <!-- Provide an option for entering a new value -->
                            <option value="new">Or enter a new Name</option>
                        </select>
                        <!-- Input field for entering a new option (initially hidden) -->
                        <input type="text" class="form-control" id="reciveFrom" name="reciveFrom" placeholder="Recive From" style="display: none;">
                    </div>

                    <div class="col-md-5">
                        <label class="form-label" for="details">Purchese Detail</label>
                        <input type="text" name="details" class="form-control" id="details">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="qty">Quantity</label>
                        <input type="text" name="qty" class="form-control" id="qty" oninput="calculateTotal()">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" oninput="calculateTotal()">
                    </div>
                </div>
                <!-- Display the calculated total amount dynamically -->
                <div class="row pt-2">
                    <div class="d-flex justify-content-end">
                        <label>Total Amount:</label>
                        <span id="totalAmount">0.00</span>
                    </div>
                </div>
                <div class="row d-flex mt-2">
                    <div class="col-md-3">
                        <label class="form-label" for="ticketSellerName">Purchase From</label>
                        <select class="form-select" id="ticketSellerName" name="ticketSellerName">
                            <option value="">--Select--</option>
                            <!-- Display existing options using a loop -->
                            @forelse ($ticketSeller as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @empty
                            @endforelse
                            <!-- Provide an option for entering a new value -->
                            <option value="new">Or enter a new Name</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="price">Purchase Price</label>
                        <input type="text" name="purchasePrice" class="form-control" id="price">
                    </div>
                    <div class="col-md-2 pt-4 justify-content-end text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table id="example" class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Buyer Name</th>
                        <th class="text-center">Airline</th>
                        <th class="text-center">Departure Date</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $airTicket as $data )
                    <tr>
                        <td class="text-center">{{ $loop -> index + 1 }}</td>
                        <td>
                            @if (is_numeric($data->buyer_name))
                                @if ($data->agents)
                                    {{ $data->agents->name }}
                                @else
                                    No Agent Found
                                @endif
                            @else
                            {{ $data -> buyer_name }}
                            @endif
                        </td>
                        <td class="text-center">{{ $data -> airline }}</td>
                        <td class="text-center">{{ $data -> departureDate }}</td>
                        <td>{{ $data -> details }}</td>
                        <td class="text-center">{{ $data -> qty }}</td>
                        <td class="text-end">{{ number_format($data -> price, 2, '.', ',') }}</td>
                        <td class="text-end">{{ number_format($data -> total_price, 2, '.', ',') }}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>

<script>
    function toggleFields() {
        var selectElement = document.getElementById("agentsBd");
        var inputField = document.getElementById("reciveFrom");

        if (selectElement.value === "new") {
            selectElement.style.display = "none";
            inputField.style.display = "block";
        } else {
            selectElement.style.display = "block";
            inputField.style.display = "none";
        }
    }

    function calculateTotal() {
        // Get the quantity and price values
        var qty = document.getElementById('qty').value;
        var price = document.getElementById('price').value;

        // Calculate the total amount
        var totalAmount = parseFloat(qty) * parseFloat(price);

        // Display the total amount in the span tag
        document.getElementById('totalAmount').innerText = totalAmount.toFixed(2);
    }

    function submitForm() {
        // Trigger the calculation one last time before submitting
        calculateTotal();

        // Perform any other validation or actions before submitting the form
        // For example, you can use the following line to submit the form programmatically
        // document.getElementById('airTicketForm').submit();
    }
</script>
@endsection