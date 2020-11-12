@extends('layout.app')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
          <div class="form-panel">
              <form role="form" class="form-horizontal style-form"  method="POST" action="{{route('createuser')}}" >
                @csrf
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label"> Name</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" name="name" id="f-name" class="form-control">
                 
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input type="email" placeholder="" id="email2" name="email" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                    <input type="password" placeholder="" id="password" name="pass" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" >Type</label>
                  <div class="col-lg-10">
                  <select class="form-control" name="type">
                  <option value="0" >Admin</option>
                  <option value="1" >User</option>
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