@extends('group.Home')

@section('content')

<div class="Left">
    <h2>Grouping</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('group.create') }}">Create Group</a>
                </div>
            </div>
        </div>

        <div class="pull-left">
            <a class="btn btn-success" href="{{ route('sched.index') }}">Scheduling Tool</a>
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
        <th>GroupNo</th>
        <th>Slot</th>
        <th>Memberfirst</th>
        <th>Membersecond</th>
        <th>Memberthird</th>
        <th>Memberfourth</th>
        <th>Memberfifth</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($group as $groups)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $groups->GroupNo }}</td>
        <td>{{ $groups->Slot }}</td>
        <td>{{ $groups->Memberfirst }}</td>
        <td>{{ $groups->Membersecond }}</td>
        <td>{{ $groups->Memberthird }}</td>
        <td>{{ $groups->Memberfourth }}</td>
        <td>{{ $groups->Memberfifth }}</td>


        <td>

            <form action="{{route('group.destroy',$groups->id)}}" method="POST">

           

            <a class="btn btn-primary" href="{{route('group.edit', $groups->id)}}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

        @endforeach

        </table>