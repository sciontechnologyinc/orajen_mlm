@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
    <li class="nav-item active">
        <a href="{{ url('codes') }}" class="nav-link">Generate Code</a>
    </li>
</ul>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
<<<<<<< HEAD
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
                    <td> {{ $member->memberemail }}</td>
                    <td> {{ $member->sponsorid }}</td>
                    <td> {{ $member->placementid }}</td>
                      <td>
                      <div class="form-group" style="display:inline-flex">
                      <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="members/{!! $member->id !!}/edit"><i class="fa fa-edit"></i></a>
                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/members/' . $member->id]) !!}
                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                    {!! Form::close() !!}
=======
        <div id="tree-simple" style="width:100%; height: 100%"> </div>
      </div>
    </div>
</div>
@endsection
@section('modal')
  <!-- Modal -->
  <div class="modal fade" id="editnode" tabindex="-1" role="dialog" aria-labelledby="editnodeLabel" aria-hidden="true">
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
                  <div class="form-group">
                      {!! Form::open(['id' => 'dataForm', 'method' => 'POST', 'url' => '/members/edit']) !!}
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:170px;">Code</span>
                        </div>
                        {!!Form::text('code', null, ['placeholder' => 'Code', 'class' => 'form-control', 'readOnly' => true ])!!}
>>>>>>> a8662098407b17fbdbdb1cb92579e9beeb1937d1
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:170px;">Name</span>
                        </div>
                        {!!Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control' ])!!}
                      </div>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" style="width:170px;">Direct Referral</span>
                          </div>
                          {!!Form::text('direct_referral', null, ['placeholder' => 'Direct Referral', 'class' => 'form-control' ])!!}
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" style="width:170px;">Global Pool</span>
                            </div>
                            {!!Form::text('global_pool', null, ['placeholder' => 'Global Pool', 'class' => 'form-control' ])!!}
                          </div>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" style="width:170px;">Pass-up</span>
                              </div>
                              {!!Form::text('pass_up', null, ['placeholder' => 'Pass up', 'class' => 'form-control' ])!!}
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" style="width:170px;">Product Voucher</span>
                                </div>
                                {!!Form::text('product_voucher', null, ['placeholder' => 'Product Voucher', 'class' => 'form-control' ])!!}
                              </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:170px;">Income</span>
                        </div>
                        {!!Form::text('income', null, ['placeholder' => 'Income', 'class' => 'form-control' ])!!}
                      </div>
                      <br />
                      {!!Form::submit('Update Account', ['class' => 'btn btn-primary float-right']) !!}
                      {!! Form::close() !!}
                  </div>
                  <div class="input-group mb-1">
                    Add Account
                  </div>
                  <div class="form-group">
                      {!! Form::open(['id' => 'addForm', 'method' => 'POST', 'url' => '/members/add']) !!}
                      {!!Form::hidden('code', null, ['placeholder' => 'Code', 'class' => 'form-control', 'readOnly' => true ])!!}
                      {!!Form::text('activationcode',null, ['placeholder' => 'Activation Code', 'class' => 'form-control col-lg-12', 'required' => '' ])!!}
                      {!!Form::submit('Add', ['class' => 'btn btn-primary mt-2 float-right']) !!}
                      {!! Form::close() !!}
                  </div>
              </div> 
          </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts')
    <script src="{!! asset('vendors/jquery.js') !!}"></script>
    <script src="{!! asset('vendors/jquery.easing.js') !!}"></script>
    <script src="{!! asset('vendors/raphael.js') !!}"></script>
    <script src="{!! asset('js/treant.js') !!}"></script>
    <script>
      $(document).ready(function(){

        var tree = {
          chart: {
            container: "#tree-simple",
            node: {
                collapsable: true
            },
            connectors: {
                type: "step",
                style: {
                    "stroke-width": 2,
                    "stroke": "#ccc",
                    "stroke-dasharray": "--",
                    "arrow-end": "classic-wide-long"
                }
            },
            callback: {
              onAfterPositionNode: function(data){
                data.nodeDOM.addEventListener('click', function(){
                  $.ajax({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                      type: "POST",
                      url: 'members/get/'+data.text["data-id"],
                      data: {  _token: '{{csrf_token()}}' },
                      success: function (data) {
                        $('#editnode').modal('show');
                        console.log($('#editshow [name=code]')[0]);
                        $('[name="code"]').val(data.activationcode);
                        $('[name="name"]').val(data.user.name);
                        $('[name="direct_referral"]').val(data.direct_referral);
                        $('[name="global_pool"]').val(data.global_pool);
                        $('[name="pass_up"]').val(data.pass_up);
                        $('[name="product_voucher"]').val(data.product_voucher);
                        $('[name="income"]').val(data.income);
                      },
                      error: function (data, textStatus, errorThrown) {
                        console.log(data);
                      }
                  });
                });
              }
            }
          },
          nodeStructure: null
        };
        
        function loadTree() {
          $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
              type: "POST",
              url: 'members/display',
              data: {  _token: '{{csrf_token()}}' },
              success: function (data) {
                console.log(data);
                  tree.nodeStructure = data;
                  var chart = new Treant(tree, function(){}, $);
              },
              error: function (data, textStatus, errorThrown) {
                console.log(data);
              }
          });
        }

        $('#dataForm').on('submit', function(e) {
            e.preventDefault(); 
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: "POST",
                url: 'members/edit',
                data: $(this).serialize(),
                success: function(msg) {
                  $('#editnode').modal('hide');
                  loadTree();
                }
            });
        });

        $('#addForm').on('submit', function(e) {
            e.preventDefault(); 
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: "POST",
                url: 'members/add',
                data: $(this).serialize(),
                success: function(msg) {
                  if (msg && typeof msg === 'object' && msg.constructor === Object) {
                    $('#editnode').modal('hide');
                    loadTree();
                  } else {
                    alert(msg);
                  }
                }
            });
        });

        loadTree();
      });
    </script>
@endsection