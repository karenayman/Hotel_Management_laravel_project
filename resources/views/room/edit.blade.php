@extends('layout')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Room</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Room 
                <a href="{{ url('/admin/roomtype') }}" class="float-right btn-primary btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
            
            <div class="table-responsive">
                <form action="{{ url('admin/rooms/'.$data->id) }}" method="post">
                @csrf
                @method('put')
                <table class="table table-bordered">
                    <tr>
                        <th>select room type</th>
                        <td>
                            <select name="rt_id" class="form-control">
                                <option value="0">---select---</option>
                                @foreach ($roomtypes as $rt)
                                <option @if($data->room_type_id==$rt->id) selected @endif value="{{ $rt->id }}">{{ $rt->title }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                      <th>title</th>
                      <td><input type="text" value="{{ $data->title }}" name="title" class="form-control" ></td>
                    </tr>
                  <td colspan="2">
                      <input type="submit" class="btn btn-primary">
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