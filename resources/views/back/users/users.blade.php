@extends('layout.app')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
          <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> All Users</h4>
                <a href="{{route('createusers')}}" class="btn btn-primary btn-xs" style="margin: 10px;">New User</a>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>email </th>
                    <th><i class="fa fa-bookmark"></i> Status</th>
                    <th><i class=" fa fa-edit"></i> </th>
                 
                  </tr>
                </thead>
                <tbody>
                @foreach ($Data as $a)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$a->name}}</a>
                    </td>
                    <td class="hidden-phone">{{$a->email}}</td>
                    <td><span class="label label-info label-mini">@if($a->type == 0) Admin @else User @endif</span></td>
                    <td>
                      <a href="{{route('edituser',['id'=>$a->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <button data-toggle="modal" data-target="#delete-modal{{$a->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                   
                                    <div class="modal fade" id="delete-modal{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="delete-modal{{$a->id}}" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="delete-modal{{$a->id}}">Delete User</h4>
                    </div>
                    <form class="form-horizontal" method="get" action="{{route('deleteuser',['id'=>$a->id])}}">
                
                    <div class="modal-body">
                      Are you sure deleting this user ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                                </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
         
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection