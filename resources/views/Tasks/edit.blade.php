@extends('layout.app')
@section('content')

    <form method="POST"  >
{{method_field('PATCH')}}
        @csrf
        <div class="form-group">
            <label >Title</label>
            <input type="text" name="title" class="form-control" value="{{$edit['title']}}">
        </div>




        <select  name="iscompleted" class="custom-select">

             @if($edit['iscompleted']==0)
          <option value="0" selected>Un Completed</option>
                <option value="1"> Completed</option>
        @else
             <option value="0" >Un Completed</option>
          <option value="1" selected>Completed</option>
        @endif


        </select>




        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
