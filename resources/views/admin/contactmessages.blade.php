@extends('admin.blogadmin')

@section('content')


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">CONTACT MESSAGES</h3>
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
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>SUBJECT</th>
                  <th>ACTION</th>
                </tr>
                @forelse($contacts as $contact)
                <tr>
                  <td><a href="{{route('contacts.show', $contact)}}">{{$contact->name}}</a></td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->subject}}</td>
	               <td>
	               	<form action="{{route('contacts.destroy', $contact)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{route('contacts.show', $contact)}}">
                      <span class="glyphicon glyphicon-pencil"></span>
                       <span class="glyphicon-class">View Message</span>
                      </a>
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button>                  
                  </form>               
	               	
	               </td>
	                
                </tr>
                @empty
                    
                    <h3>No Messages Found.</h3>   
                @endforelse
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div>
            {{ $contacts->links() }}
          </div>
        </div>
      </div>


@endsection