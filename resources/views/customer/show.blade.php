@extends('layout')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add customer</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add customer
                <a href="{{ url('admin/customer') }}" class="float-right btn-primary btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                          <th>full name</th>
                          <td>{{ $data->full_name }}</td>
                  </tr>
                  <tr>
                          <th>email</th>
                          <td>{{ $data->email }}</td>
                  </tr>
                  <tr>
                          <th>password</th>
                          <td>{{ $data->password }}</td>
                  </tr>
                  <tr>
                          <th>mobile </th>
                          <td>{{ $data->mobile }}</td>
                  </tr>
                  <tr>
                          <th>photo </th>
                          <td><img width="100" src="{{ asset('storage/app'.$data->photo) }}"></td>
                  </tr>

                  <tr>
                    <th>Address</th>
                    <td>{{ $data->address }}</td>
                  </tr>
                  <td colspan="2">
                      <input type="submit" class="btn btn-primary ">
                  </td>
                </table>
            </form>
            </div>
        </div>
    </div>

</div>
@section('script')
<!-- /.container-fluid -->
  <!-- Page level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
   <!-- Custom styles for this page -->
   <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
   @endsection
@endsection