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
                  <th>AUTHOR</th>
                  <th>TITLE</th>
                  
                  <th>ACTION</th>
                </tr>
                @forelse($volunteer_request as $volunteer)
                <tr>
                  <td>{{$volunteer->name}}</td>
                  <td>{{$volunteer->email}}</td>
	               <td>
	               	<form action="{{route('volunteers.destroy', $volunteer)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{route('volunteers.show', $volunteer)}}">View Message</a> 
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button>                 
                  </form>               
	               	{{-- <a href="">
	               		<span class="glyphicon glyphicon-trash"></span>
                    <span class="glyphicon-class">Delete Post</span> --}}
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
            {{ $volunteer_request->links() }}
          </div>
        </div>
      </div>


@endsection