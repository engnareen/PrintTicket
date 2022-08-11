<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>Report</title>
</head>
<body>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-md-12"><strong>Serial:</strong> {{ $tickets->id }}</div>
            <div class="col-md-12"><strong>Ticket NO:</strong> {{ $tickets->ticket_no }}</div>
            <div class="col-md-12"><strong>Date:</strong> {{ $tickets->date }}</div>
            <div class="col-md-12"><strong>Time:</strong> {{$tickets->time }}</div>
        </div>
    </div>





<script src="{{ asset('jquery/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<script type="text/javascript">
    $( document ).ready(function() {
        console.log( "ready!" );
        window.print();
    });
</script>
</body>
</html>
