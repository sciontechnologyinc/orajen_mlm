@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                    <a href="{{ url('create') }}" class="nav-link">Add Member</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('members') }}" class="nav-link">Member`s List</a>
                    </li>
            </ul>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Member List</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>#</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Sponsor ID</th>
                            <th>Placement ID</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($members as $member)
                        <tr>
                        <td> {{ $member->id }}</td>
                        <td> {{ $member->firstname }}</td>
                        <td> {{ $member->middlename }}</td>
                        <td> {{ $member->lastname }}</td>
                        <td> {{ $member->email }}</td>
                        <td> {{ $member->sponsorid }}</td>
                        <td> {{ $member->placementid }}</td>
                          <td>
                          <div class="form-group" style="display:inline-flex">
                          <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="members/{!! $member->id !!}/edit"><i class="fa fa-edit"></i></a>
                        {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                        {!! Form::close() !!}
                          </div>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection