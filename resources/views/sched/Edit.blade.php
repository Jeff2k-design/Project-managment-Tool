@extends('sched.Home')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit</h2>

        </div>

        <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('sched.index') }}">Back</a>

        </div>

    </div>

</div>

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Oh no!</strong> Input is incorrect. <br><br>

    <ul>

        @foreach($errors->all()as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>


@endif

<form action="{{ route('sched.update',$scheds->id) }}" method="POST">

@csrf

@method('PUT')

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

        <strong>GroupNumber:</strong>

        <input type="text" name="GroupNumber" value="{{ $scheds->GroupNumber }}" class="form-control" placeholder="GroupNumber">
    </div>
</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Panel 1</strong>

            <input type="text" name="Panelfirst" value="{{ $scheds->Panelfirst }}" class="form-control" placeholder="Panelfirst">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Panel 2</strong>

            <input type="text" name="Panelsecond" value="{{ $scheds->Panelsecond }}" class="form-control" placeholder="Panelsecond">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Panel 3</strong>

            <input type="text" name="Panelthird" value="{{ $scheds->Panelthird }}" class="form-control" placeholder="Panelthird">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Time</strong>

            <input type="text" name="Time" value="{{ $scheds->Time }}" class="form-control" placeholder="Time">
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Date</strong>

            <input type="text" name="Date" value="{{ $scheds->Date }}" class="form-control" placeholder="Date">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Venue</strong>

            <input type="text" name="Venue"  value="{{ $scheds->Venue }}" class="form-control" placeholder="Venue">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

</form>

@endsection