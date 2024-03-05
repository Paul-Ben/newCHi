@extends('admin.blogadmin')

@section('content')


	 <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Gallery Images</h3>
              @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <input name="user_id" value="{{Auth::user()->id}}" hidden>
              </div>
             
              <div class="form-group">

                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attach Image
                  <input type="file" name="image" required>
                </div>
                <p class="help-block">Max. 2MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Post</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
          </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
     


      <!-- <div class="col-md-9"> -->

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Gallery Images</h3>
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
                  @forelse($galleries as $gallery)
                  <tr>
                    <td><img src="{{ asset('storage/gallery/images/' . $gallery->image) }}" alt="" width="70px", height="70px"></td>
                    <td>{{$gallery->image}}</td>
                   <td>
                     <form action="{{route('galleries.destroy', $gallery)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      
                      {{-- <input type="submit" value="Delete">   --}}
                      <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button>                 
                      </form>               
                   </td>
                    
                  </tr>
                  @empty
                      <h3>No Images Found.</h3>   
                  @endforelse
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div>
              {{ $galleries->links() }}
            </div>
          </div>
        </div>
          
    </section>
    

@endsection