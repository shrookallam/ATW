@extends('layout.app')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
          <div class="form-panel">
              <form role="form" class="form-horizontal style-form"  method="POST" action="{{route('updateuser',['id'=>$user->id])}}" >
                @csrf
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label"> Name</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" name="name" value="{{$user->name}}" id="f-name" class="form-control">
                 
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" placeholder="" id="email2" name="email" value="{{$user->email}}" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" >Type</label>
                  <div class="col-lg-10">
                  <select class="form-control" name="type">
                  <option value="0" @if($user->type == 0) selected @endif >Admin</option>
                  <option value="1" @if($user->type == 1) selected @endif >User</option>
                </select>

                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
         
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection