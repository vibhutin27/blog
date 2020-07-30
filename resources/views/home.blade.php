@extends('layouts.app')
@section('content')




<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8"  style='margin-top:5%;'>
            <div class="card">
                <div class="card-header">Data Input Section</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    <div class="card-body">
                        <form action="{{url('excelUpload')}}" method="POST" enctype="multipart/form-data">
                        @csrf     
                            <input type="file" name="file" class="form-control">
                            <br>
                            <input type="submit" value="Import Data">
                        </form>
                    </div>
 
                </div>
            </div>
            <center><a class="nav-link" href="{{('home')}}"><< {{ __('back to home')}}</a></center>
        </div>
    </div>
    </div>
  </div>
  <div class="col-xs-6 col-md-4"><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>
<div class="container">
    <div class="col-sm-4">col-sm-4</div>
    
<div class="col-sm-4">
    <form id="sample_form" method="post" >
        @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form></div>
  <div class="col-sm-4"></div></div>
<script>
$(document).ready(function(){
    $('#')
$.ajax({
                            headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                            type:"POST",
                            url:"{{ route('OnlineSurveyController@store') }}",
                            dataType:"json",
                            data:{PrimaryKey: "L2_101_1_2018", Col9: "2"},
                            success: function( Response ) {
                             console.log(Response);
                                },
                         });  });  
</script>  
@endsection
