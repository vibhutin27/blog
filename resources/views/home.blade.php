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

@endsection
