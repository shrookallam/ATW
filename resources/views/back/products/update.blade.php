@extends('layout.app')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
          <div class="form-panel">
              <form role="form" class="form-horizontal style-form"  method="POST" action="{{route('updateProduct',['id'=>$Product->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label"> Name</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="" name="name" value="{{$Product->name}}" id="f-name" class="form-control">
                 
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label">Price</label>
                  <div class="col-lg-10">
                    <input type="number" placeholder="" value="{{$Product->price}}" id="number" name="price" class="form-control">
                    
                  </div>
                </div>
               
                  <div class="form-group">
                  <label class="control-label col-md-3">Image</label>
                  <div class="controls col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                      <input type="file" class="default"name="image" value="{{$Product->image}}" />
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                
                </div>
                <div class="form-group has-warning">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>

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