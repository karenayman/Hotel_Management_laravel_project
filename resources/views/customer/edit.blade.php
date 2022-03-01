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
                <a href="{{ url('/admin/customer') }}" class="float-right btn-primary btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
    @endforeach
@endif

            @if(Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            
            <div class="table-responsive">
                <form action="{{ url('admin/customer/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <table class="table table-bordered">
                  <tr>
                          <th>full name <span class="text-danger">*</span></th>
                          <td><input value="{{ $data->full_name }}" name="full_name" type="text" class="form-control"></td>
                  </tr>
                  <tr>
                          <th>email <span class="text-danger">*</span></th>
                          <td><input name="email" value="{{ $data->email }}"  type="email" class="form-control"></td>
                  </tr>
                  <tr>
                          <th>password  <span class="text-danger">*</span></th>
                          <td><input name="password" value="{{ $data->password }}"  type="password" class="form-control"></td>
                  </tr>
                  <tr>
                          <th>mobile <span class="text-danger">*</span></th>
                          <td><input name="mobile" value="{{ $data->mobile }}"  type="text" class="form-control"></td>
                  </tr>
                  <tr>
                          <th>photo </th>
                          <td>
                              <input name="photo" type="file" >
                              <input type="hidden" name="prev_photo" value="{{ $data->phot }}">
                              <img width="100" src="{{ asset('storage/app'.$data->photo) }}">
                        </td>
                  </tr>

                  <tr>
                    <th>Address</th>
                    <td><textarea name="address" class="form-control" ></textarea></td>
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