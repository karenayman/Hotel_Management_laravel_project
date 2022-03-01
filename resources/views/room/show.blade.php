@extends('layout')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Room </h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room
                <a href="{{ url('/admin/rooms') }}" class="float-right btn-primary btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
           
            
            <div class="table-responsive">
                <form action="{{ url('admin/rooms') }}" method="post">
                @csrf
                <table class="table table-bordered">
                  <tr>
                      <th>Title</th>
                      <td>{{ $data->title }}</td>
                  </tr>
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