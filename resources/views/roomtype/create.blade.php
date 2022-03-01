@extends('layout')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Room Types</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room Types
                <a href="{{ url('/admin/roomtype') }}" class="float-right btn-primary btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            
            <div class="table-responsive">
                <form action="{{ url('admin/roomtype') }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                  <tr>
                      <th>Title</th>
                      <td><input type="text" name="title" class="form-control"></td>
                  </tr>
                  <tr>
                    <th>price</th>
                    <td><input type="text" name="price" class="form-control"></td>
                </tr>
                <tr>
                    <th>Galary</th>
                    <td><input type="file" name="imgs[]" multiple ></td>
                </tr>
                  <tr>
                      <th>Detail</th>
                      <td><textarea name="detail" class="form-control" cols="30" rows="10"></textarea></td>
                  </tr>
                  
                  <td colspan="2">
                      <input type="submit" class="btn btn-success btn-sm">
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