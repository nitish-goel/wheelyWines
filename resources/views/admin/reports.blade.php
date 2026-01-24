@extends('Admin.layouts.app')
@section('content')


    <div class="row m-0 mb-4 mt-1 new__sec">
        <div class="col-12">
          <div class="sub__header">
            <h5 class="m-0 text-dark starte__txt">All Users</h5>

            <ol class="breadcrumb float-sm-right mb-0 bg-transparent">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">All Users</li>
            </ol>
          </div>
        </div>
    </div>


    <div class="table__sec">
        <div class="row">
          <div class="col-12">
            <div class="card table__card_dc">

            <div class="card-header">
            <form method="GET" class="w-100" action="Admin/Management/users/">
                  <div class="row">
                    <div class="col-12">
                      <div class="main__center card-header-column-main">
                        <!-- <h4 class="mb-0"> Users</h4> -->

                        <div class="export-table">
                          <a href="Admin/Management/users?export=xls" class="export-btn btn-primary"><img src="{{asset('/admin/img/xls.png')}}">Export to xls</a>
                          <a href="Admin/Management/users?export=csv" class="export-btn btn-success"><img src="{{asset('/admin/img/csv.png')}}">Export to csv</a>
                          <a href="Admin/Management/users?export=txt" class="export-btn btn-info "><img src="{{asset('/admin/img/txt.png')}}">Export to txt</a>
                        </div>

                      </div>
                    </div>

                    <div class="dropdown-divider"></div>


                    <div class="col-12">
                      <div class="New___sub_tabs card-header-column-main">
                        <div class="card__column">
                          <select class="form-control" name="type">
                            <option value="name" <?//php echo $type == 'name' ? 'selected' : ''; ?>>
                              Name</option>
                            <option value="user_id" <?//php echo $type == 'user_id' ? 'selected' : ''; ?>>
                              User ID</option>
                            <option value="phone" <?//php echo $type == 'phone' ? 'selected' : ''; ?>>Phone
                            </option>
                            <option value="email" <?//php echo $type == 'email' ? 'selected' : ''; ?>>Email
                            </option>
                            <option value="wallet_address" <?//php echo $type == 'wallet_address' ? 'selected' : ''; ?>>Wallet Address
                            </option>
                            <option value="sponser_id" <?//php echo $type == 'sponser_id' ? 'selected' : ''; ?>>Sponser ID
                            </option>
                            <option value="area_code" <?//php echo $type == 'area_code' ? 'selected' : ''; ?>>Team Code
                            </option>
                          </select>
                        </div>

                        <div class="card__column">
                          <input type="text" name="value" class="form-control float-right" value="<//?php echo $value; ?>" placeholder="Search">
                        </div>

                        <div class="card__column">
                          <input type="date" name="start_date" class="form-control" value="<//?php echo $start_date; ?>" placeholder="Start Date" />
                        </div>

                        <div class="card__column">
                          <input type="date" name="end_date" class="form-control" value="<//?php echo $end_date; ?>" placeholder="End Date" />
                        </div>

                        <div class="card__column w-25">
                          <input type="submit" class="btn btn-submit btn-info" value="search" />
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Services </th>
                                <th>Updated At</th>
                                <th>Joining Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->services_completed }}</td>
                                <td>{{ $user->updated_at->format('Y-m-d') }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                <!-- Pagination buttons -->
               
            </div>
            <div class="card-footer">

                <div class="row align-items-center footer_table">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="tableView_info" role="status" aria-live="polite">
                            {{ $users->links('pagination::bootstrap-5') }}
                        </div>
                    </div>  
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers d-flex justify-content-end align-items-center" id="tableView_paginate">
                        <!-- {{ $users->links() }} -->
                        <!-- {{ $users->links('pagination::bootstrap-5') }} -->
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
