@extends('layout\master')

@section('content')

<div class="container" style="margin-top:5%; height:100%; width:42%">


<form action="{{route('store')}}" method="post" data-parsley-validate>
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="form-group">
          <label >Student Id</label>
          <input type="number" name="student_id" class="form-control"  placeholder="id" required>
          
        </div>

        <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" class="form-control"  placeholder="name" required>
                
        </div>
        <div class="form-group">
                <label >Department Name	</label>
                <input type="text" name="department_name" class="form-control"  placeholder="Department Name" required>
                
        </div>
        <div class="form-group">
                <label >Student Info</label>
                <textarea name="student_info" class="form-control" rows="3"></textarea>
                
        </div>
        
        
    
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
@endsection



