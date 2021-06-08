@extends('sched.Home')

@section('content')

<div class="Left">
    <h2>Schedule</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('sched.create') }}">Create Sched</a>
                </div>
            </div>
        </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">

    <p>{{ $message }}</p>

    </div>

    @endif

    <table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>GroupNumber</th>
        <th>Panel 1</th>
        <th>Panel 2</th>
        <th>Panel 3</th>
        <th>Time</th>
        <th>Date</th>
        <th>Venue</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($sched as $scheds)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $scheds->GroupNumber }}</td>
        <td>{{ $scheds->Panelfirst }}</td>
        <td>{{ $scheds->Panelsecond }}</td>
        <td>{{ $scheds->Panelthird }}</td>
        <td>{{ $scheds->Time }}</td>
        <td>{{ $scheds->Date }}</td>
        <td>{{ $scheds->Venue }}</td>

        <td>

            <form action="{{ route('sched.destroy',$scheds->id) }}" method="POST">

        

            <a class="btn btn-primary" href="{{ route('sched.edit',$scheds->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

        @endforeach

        </table>