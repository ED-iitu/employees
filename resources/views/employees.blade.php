@extends('layouts.app')

@section('content')

<div class="container col-md-5 col-md-offset-4">
	 <form class="navbar-form navbar-left" action="/employees" method="get">
                                    <div class="form-group ">
                                      <input type="text" name="search" class="form-control" placeholder="Search">
                                    </div>
                                    
                                  </form>
</div>


<!-- Sort -->

<center>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Sort by
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    	@foreach($departments as $department)
      <li><a href="/employees/sort/{{ $department->dept_name }}">{{ $department->dept_name }}</a></li>

      @endforeach
      
    </ul>
  </div>
</center>
	
<!-- Sort -->


<br>
<div class="container">
	<h1>List of Employees</h1>
    <div class="row col-md-12  custyle">
    <table class="table table-striped custab">
    <thead>
  
        <tr>
            <th>ID</th>
            <th>Birthday</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Hire date</th>
            <th>Dept name</th>
            <th>Salary</th>
            <th>Job title</th>
            <th>From date</th>
            <th>To date</th>
        </tr>
    </thead>
    	@foreach($employees as $employee)

            <tr>
                <td>{{ $employee->emp_no }}</td>
                <td>{{ $employee->birth_date }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->hire_date }}</td>
                <td>{{ $employee->dept_name }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->title }}</td>
                <td>{{ $employee->from_date }}</td>
                <td>{{ $employee->to_date }}</td>
            </tr>

        
        @endforeach    
    </table>

    <center>{{ $employees->links() }}</center>
    </div>
</div>

@endsection