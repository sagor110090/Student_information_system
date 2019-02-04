@extends('layout\master')

@section('content')

<div class="container" style="margin-top:5%; height:100%; width:42%">


<form action="{{route('update',$student->id)}}" method="post">
    @csrf
        <div class="form-group">
          <label >Student Id</label>
          <input type="number" value="{{$student->student_id}}" name="student_id" class="form-control"  placeholder="id">
          
        </div>

        <div class="form-group">
                <label >Name</label>
                <input type="text" value="{{$student->name}}" name="name" class="form-control"  placeholder="name">
                
        </div>
        <div class="form-group">
                <label >Department Name	</label>
                <input type="text" value="{{$student->department_name}}" name="department_name" class="form-control"  placeholder="Department Name	">
                
        </div>
        <div class="form-group">
                <label >Student Info</label>
                <textarea name="student_info" class="form-control" rows="3"> {{$student->student_info}}</textarea>
                
        </div>
        
        
    
        
        
        <button type="submit" class="btn btn-primary">Update</button>
</form> 
</div>
@endsection



