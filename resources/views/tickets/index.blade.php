
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:45px">
       <div class="col-md-6 offset-md-3">
       <h4>Add new Ticket</h4><hr>
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
                <img src="{{ asset('user1.png') }}" alt="" width="100" height="100" style="background-color: gray" />

             </div>
             <div class="form-group">
             <br>
               <button type="submit" class="btn btn-primary">Save</button>
             </div>
          </form>
       </div>
    </div>
    <div class="row" style="margin-top:25px">
    {{-- <div class="col-md-6 offset-md-3">
       <h4>Add new student</h4><hr>
       <div class="table-responsive">
       @if ( count($students) > 0 )
       @php
           $i=1;
       @endphp
       <table class="table table-sm m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($students as $student )
                    <tr>
                        <th>{{ $i++}}</th>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->name}}</td>
                        <td><a href="">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

       @else
           <code>No student found!</code>
       @endif


         </div>
       </div>
    </div> --}}
</div>
@endsection

