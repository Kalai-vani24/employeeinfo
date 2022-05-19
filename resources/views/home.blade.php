@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <h3 style="align-item='center">Employee Information</h1>
                    <table> 
                    <a href="{{route('create-empdata')}}"><button class='btn btn-primary d-flex '> <i class="fa fa-plus pt-1 me-2" aria-hidden="true"></i>Add</button></a>
                        <tr style="height:80px; border-bottom:1pt solid black;">
                            <th style="width:80px; height:30px;">ID</th> 
                            <th style="width:120px; ">NAME</th>
                            <th style="width:150px; ">DESIGNATION</th>
                            <th style="width:100px; ">SALARY</th>
                            <th style="width:100px; ">EMP_ID</th>
                            <th style="width:100px; ">CL</th>
                            <th style="width:100px; ">DMAX</th>
                        </tr>
                        @foreach($employeeDetails as $emp)                         
                     <tr>
                
                            <td style=" height:70px;">{{$emp->id}}</td>
                            <td>{{$emp->name}}</td>
                            <td>{{$emp->designation}}</td>
                            <td>{{$emp->salary}}</td> 
                            <td>{{$emp->emp_id}}</td> 
                            <td>{{$emp->cl}}</td>  
                            <td>{{$emp->dmax}}</td>  
                            <td><a href='{{url("delete-record")}}/{{$emp->id}}'><button type='button' class='btn btn-success text-decoration-none'>view</button></a></td>

                            <td><a href='{{url("edit-record")}}/{{$emp->id}}'><button type='button' class='btn btn-primary d-flex'><i class="fa fa-pencil me-2" aria-hidden="true"></i>Edit</button></a></td>

                            <td><a href='{{url("delete-record")}}/{{$emp->id}}'><button type='button' class='btn btn-danger'>Delete</button></a></td>
                         </tr>   
                        @endforeach 
                        </table>
                    
                    

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
