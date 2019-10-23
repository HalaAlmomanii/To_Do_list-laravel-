@extends('layout.app')
@section('content')

<form method="post"  >
    @csrf

    <div class="form-group">

        <input type="text" name="title" class="form-control"  placeholder="New task">

    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
