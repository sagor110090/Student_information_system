@extends('layout\master')

@section('content')

<div class="container">




<table class="table table-bordered table-hover" >
    <tr>
        <td>#</td>
       
        <td>Student Id</td>
        <td>Name</td>
        <td>Department Name</td>
        <td>Student Info</td>
        <td>Action</td>
      </tr>

  
 @php
     $i=0;
 @endphp
@foreach ($students as $student)
@php
    $i++;
@endphp
<tr>
<td>{{ $i }}</td>
    
    <td>{{ $student->student_id }} </td> 
    <td>{{ $student->name }} </td>
    <td>{{ $student->department_name }} </td>
    <td>{{ $student->student_info }} </td>
<td ><a href="{{route('edit',$student->id)}}" class="btn btn-success"> Edit </a>
<a href="{{route('delete',$student->id)}}" class="btn btn-danger"> Delete </a></td>
    

</tr>
@endforeach
</table>  
</div>


@endsection
