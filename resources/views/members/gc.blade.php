@extends('admin.master.template')

@section('content')
 @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if(count($errors) > 0 )
<div class="alert alert-danger">
    <strong>Whoooppss !!</strong> There were some problem with your input. <br>
    <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif

<div class="main-panel">
        <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title float-left">ORAJEN Products</h2>
                      <button class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#addcode">Add Codes</button>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>
                                Code
                              </th>
                              <th>
                                Type
                              </th>
                              <th>
                                Activated
                              </th>
                              <th>
                                Date Released
                              </th>
                              <th>
                                Date Used
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($codes as $code)
                                <tr class="{{$code->type}}">
                                    <td>{{$code->code}}</td>
                                    <td>{{$code->type}}</td>
                                    <td>{{($code->is_used) ? "Used" : "Not Used" }}</td>
                                    <td>{{$code->created_at}}</td>
                                    <td>{{($code->is_used) ? $code->updated_at : "---" }}</td>
                                </tr>
                              @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="addcode" tabindex="-1" role="dialog" aria-labelledby="editnodeLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editnodeLabel">Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="input-group mb-1">
                    Add Account
                </div>
                <div class="form-group">
                    {!! Form::open(['id' => 'addCode', 'method' => 'POST', 'url' => 'codes/add']) !!}
                    {!!Form::number('count', null, ['placeholder' => 'Count', 'class' => 'form-control' ])!!}
                    <select name="type" class="form-control">
                        <option value="Activation">Activation</option>
                        <option value="Blue">Blue</option>
                        <option value="Green">Green</option>
                    </select>
                    {!!Form::submit('Add', ['class' => 'btn btn-primary mt-2 float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div> 
        </div>
        </div>
    </div>
 </div>
@endsection