@extends('admin.master.template')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Statistics</h4>
                  <p class="card-description">
                    Statistics List
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Statisctics name
                          </th>
                          <th>
                            Value
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                     <tbody>
                         <tr>
                             <td>
                                 Order Sales
                             </td>
                             <td>
                                6878253.7698
                             </td>
                             <td>
                             <button type="button" class="btn btn-icons btn-rounded btn-warning" data-toggle="tooltip" data-placement="top" title="Refresh">
                                <i class="mdi mdi-refresh"></i>
                            </button>
                             </td>
                         </tr>
                     </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection