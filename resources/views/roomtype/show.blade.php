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
           
            
            <div class="table-responsive">
                <form action="{{ url('admin/roomtype') }}" method="post">
                @csrf
                <table class="table table-bordered">
                  <tr>
                      <th>Title</th>
                      <td>{{ $data->title }}</td>
                  </tr>
                  <tr>
                      <th>Detail</th>
                      <td>{{ $data->detail }}</td>
                  </tr>
                  <tr>
                    <th>price</th>
                    <td>{{ $data->price }}</td>
                </tr>
                <tr>
                    <th>Gallery Images</th>
                    <td>
                        <table class="table table-bordered mt-3">
                            <tr>
                                @foreach($data->roomtypeimgs as $img)
                                <td class="imgcol{{$img->id}}">
                                    <img width="150" src="{{asset('storage/app/'.$img->img_src)}}" />
                                </td>
                                @endforeach
                            </tr>
                        </table>
                    </td>
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