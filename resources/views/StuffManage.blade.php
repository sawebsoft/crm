@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form method="POST" enctype="multipart/form-data" id="form_entry" action="javascript:void(0)" >  
                   @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="f_name" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName"  name="l_name"  placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"  name="email"  placeholder="Email Address">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"  name="password"  placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  name="confirm_password"  placeholder="Repeat Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                </button>
            </form>
          
        </div>
     
     </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
    $('#form_entry').submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);
       
            $.ajax({
                type:'POST',
                url: "{{ url('stuff-store')}}",
                data: form_data,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                this.reset();
                alert('Data uploaded successfully');
                console.log(data);
                },
                error: function(data){
                console.log(data);
                }
            });
        });
    });
    </script>
@endsection

