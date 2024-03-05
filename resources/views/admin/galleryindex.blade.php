@extends('admin.blogadmin')

@section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">VOLUNTEER REQUESTS</h3>
              @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>IMAGE</th>
                  <th>NAME</th>
                  
                  <th>ACTION</th>
                </tr>
                @forelse($galleryImages as $galleryImage)
                <tr>
                  <td><img src="{{ asset('storage/gallery/images/' . $galleryImage->image) }}" alt="" width="70px", height="70px"></td>
                  <td>{{$galleryImage->image}}</td>
	               <td>
	               	<form action="{{route('galleryimages.destroy', $galleryImage)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <span class="glyphicon glyphicon-trash"></span>
                    {{-- <input type="submit" value="Delete"> --}}
                    <button type="submit">Delete</button>                   
                  </form>               
	               </td>
	                
                </tr>
                @empty
                    <h3>No Requests Found.</h3>   
                @endforelse
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div>
            {{ $galleryImages->links() }}
          </div>
        </div>
      </div>


@endsection