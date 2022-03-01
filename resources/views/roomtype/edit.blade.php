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
                <form action="{{ url('admin/roomtype/'.$data->id) }}" method="post" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <table class="table table-bordered">
                  <tr>
                      <th>Title</th>
                      <td><input type="text" name="title" value="{{ $data->title }}" class="form-control"></td>
                  </tr>
                  <tr>
                    <th>price</th>
                    <td><input type="text" name="price" value="{{ $data->price }}" class="form-control"></td>
                </tr>
                  <tr>
                      <th>Detail</th>
                      <td><textarea name="detail" class="form-control" cols="30" rows="10">{{ $data->detail }}</textarea></td>
                  </tr>
                  <tr>
                    <th>Gallery Images</th>
                    <td>
                        <table class="table table-bordered mt-3">
                            <tr>
                                <input type="file" multiple name="imgs[]" /> 
                                @foreach($data->roomtypeimgs as $img)
                                <td class="imgcol{{$img->id}}">
                                    <img width="150" src="{{asset('storage/app/'.$img->img_src)}}" />
<p class="mt-2">
<button type="button" onclick="return confirm('Are you sure you want to delete this image??')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$img->id}}"><i class="fa fa-trash"></i></button>
</p>
                                </td>
                                @endforeach
                            </tr>


                  <td colspan="2">
                      <input type="submit" class="btn btn-success btn-sm" value="Update">
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
  <script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var _img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"{{url('admin/roomtypeimage/delete')}}/"+_img_id,
                dataType:'json',
                beforeSend:function(){
                    _vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+_img_id).remove();
                    }
                    _vm.removeClass('disabled');
                }
            });
        });
    });
</script>
   <!-- Custom styles for this page -->
   <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
   @endsection
@endsection