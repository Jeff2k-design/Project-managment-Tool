@extends('group.Home')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('group.index') }}">Back</a>
        
        </div>

    </div>

</div>

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Oh no!</strong> Input is incorrect. <br><br>

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

<form action="{{ route('group.store') }}" method="POST">

@csrf

@method('PUT')

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

        <strong>GroupNo:</strong>

        <input type="text" name="GroupNo" class="form-control" placeholder="GroupNo">
    </div>
</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Slot</strong>

            <input type="text" name="Slot" class="form-control" placeholder="Slot">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Member 1</strong>

            <input type="text" name="Memberfirst" class="form-control" placeholder="Memberfirst">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Member 2</strong>

            <input type="text" name="Membersecond" class="form-control" placeholder="Membersecond">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Member 3</strong>

            <input type="text" name="Memberthird" class="form-control" placeholder="Memberthird">
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Member 4</strong>

            <input type="text" name="Memberfourth" class="form-control" placeholder="Memberfourth">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Member 5</strong>

            <input type="text" name="Memberfifth" class="form-control" placeholder="Memberfifth">
        </div>
    </div>

    

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

</form>

@endsection