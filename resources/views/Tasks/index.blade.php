@extends('layout.app')
@section('content')


<table class="table">
  <thead>
    <tr>
       <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Is completed</th>
         <th scope="col">Edit</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>


@foreach($task as $mini)
    <tr>
   <td>{{$mini['id']}}</td>
    <td>{{$mini['title']}}</td>
        @if($mini['iscompleted']==0)
          <td>No</td>
        @else
          <td>Yes</td>
@endif
<td>
<form method="get"  action="/edit/{{$mini['id']}}">

  <button type="submit" class="btn btn-primary">Edit</button>
</form>


</td>
     <td>
<form method="post" action="/index/{{$mini['id']}}">
{{method_field('DELETE')}}
    @csrf

  <button value="{{$mini['id']}}" type="submit" class="btn btn-danger">Remove</button>
</form>


</td>

    @endforeach

    </tr>



  </tbody>
</table>
@endsection
