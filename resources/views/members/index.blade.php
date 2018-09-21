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
                          <span class="input-group-text" style="width:100px;">Code</span>
                        </div>
                        {!!Form::text('code', null, ['placeholder' => 'Code', 'class' => 'form-control', 'readOnly' => true ])!!}
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:100px;">Name</span>
                        </div>
                        {!!Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control' ])!!}
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="width:100px;">Income</span>
                        </div>
                        {!!Form::text('income', null, ['placeholder' => 'Income', 'class' => 'form-control' ])!!}
                      </div>
                      <br />
                      {!!Form::submit('Edit Account', ['class' => 'btn btn-primary float-right']) !!}
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
            rootOrientation:  'WEST',
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
                      type: "POST",
                      url: 'members/get/'+data.text["data-id"],
                      data: {  _token: '{{csrf_token()}}' },
                      success: function (data) {
                        $('#editnode').modal('show');
                        console.log($('#editshow [name=code]')[0]);
                        $('[name="code"]').val(data.activationcode);
                        $('[name="name"]').val(data.user.name);
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
              type: "POST",
              url: 'members/display',
              data: {  _token: '{{csrf_token()}}' },
              success: function (data) {
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