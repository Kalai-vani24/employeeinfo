
@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row mt-5">
			<div class=" offset-md-4 col-md-5  ">
				<div class="login-circle text-center"><i class="fa fa-user-circle fa-6x"></i></div>
				<div class="login-form bg-dark p-5 ">
					<h2 class="text-white">Employee Details </h2>
					<form  class="" action="{{route('employeesave')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="mb-2">
                            <label for="id" class="form-label text-white">ID:</label>
                            <input type="text" class="form-control " id="id" placeholder="Enter Your Id" name="id">
                          </div> -->
                        <div class="mb-3 mt-3">
                          <label for="Employee Name" class="form-label text-white"> Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" >
                        </div>
                        <div class="mb-3">
                          <label for="designation" class="form-label text-white">Designation:</label>
                          <input type="text" class="form-control" id="designation" placeholder="Enter Your designation" name="designation">
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label text-white">Salary:</label>
                            <input type="number" class="form-control" id="salary" placeholder="Enter Confirm salary" name="salary">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="emp_id" class="form-label text-white">emp_id:</label>
                            <input type="text" class="form-control" id="emp_id" placeholder="Enter Your emp_id" name="emp_id">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="dmax" class="form-label text-white">dmax:</label>
                            <input type="Number" class="form-control" id="dmax" placeholder="Enter Your dmax score" name="dmax">
                          </div>
                          <div class="mb-3 mt-3">
                            <label for="cl" class="form-label text-white">CL:</label>
                            <input type="text" class="form-control" id="cl" placeholder="Enter Your dmax score" name="cl">
                          </div>
                        <div class="form-check mb-3">
                          <label class="form-check-label text-white">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <div class="d-grid mb-3">
                          <div class="row">
                            <div class="col-md-3 me-5"><a href="{{url('home')}}" class="btn btn-primary px-5 cancel"> Cancel </a> </div>
                            <div class="col-md-3 ms-5"> <button type="submit" class="btn btn-primary  px-5 submit" value="save">Save</button></div>
                          </div>
                         
                        </div>
                       <a class=" text-white " href="#">Foreget your password?</a>
                      </form>
				</div>
			</div>
		</div>
	</div>
					
            
                       
    @endsection
