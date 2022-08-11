
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>Ticket</title>
</head>
<body>

    <div class="container" style="margin-top: 50px">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-grey text-black" style="color: blue; font-size: 15px; font-weight: bold; "><i class="fas fa-plus"></i>Create TICKET
                    </div>
                        <div class="card-body" width="800px">
                            <form action="{{ route('ticket.store') }}" method="post">
                                @csrf
                                @if(Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if(Session::get('fail'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif

                            <div class="form-group">

                                <img src="{{ asset('user1.png') }}" alt="" width="100" height="100"
                                style="background-color: gray" />
                            </div>


                            <div class="form-group">
                                {{-- <button class="btn btn-primary" onclick="window.print()">Print</button> --}}
                                <button type="submit" class="btn btn-success">Save Ticket
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Print Ticket
                                </button>

                            </div>

                            </form>

                            <!-- Modal -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">

                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Print Ticket</h5>
                                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>

                                    <div class="modal-body">
                                        @foreach ($tickets as $ticket)

                                        <label style="font-weight:bold" for="">Serial: {{ $ticket->id }}</label><br>
                                        <label style="font-weight:bold" for="">Ticket NO: {{ $ticket->ticket_no }}</label><br>
                                        <label style="font-weight:bold" for="">Date: {{ $ticket->date }}</label><br>
                                        <label style="font-weight:bold" for="">Time: {{$ticket->time }}</label>

                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    {{-- <button type="submit" class="btn btn-primary" onclick="window.print()">Print</button> --}}
                                    <a href="{{ route('ticket.show', ['id' => $ticket->id]) }}" id="print_btn"  class="btn btn-primary">Print</a>
                                    </div>
                                    @endforeach

                                </div>
                                </div>
                            </div>


                        </div>


                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('jquery/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
