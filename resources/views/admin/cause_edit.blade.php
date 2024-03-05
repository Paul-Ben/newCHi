@extends('admin.blogadmin')

@section('content')


	 <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Cause</h3>
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
              <form action="{{ route('causes.update', $cause) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                <input class="form-control" name="title" placeholder="Title:" value="{{$cause->title}}" required>
              </div>
              <div class="form-group">
                <input  name="user_id" placeholder="Author:" value="{{ Auth::user()->id }}" hidden>
              </div>
            
              <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px" placeholder="Type your message Here" required>
                        {{$cause->message}}
                    </textarea>
              </div>
              {{-- <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="image">
                </div>
                <p class="help-block">Max. 2MB</p>
              </div> --}}
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                {{-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> --}}
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Post</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      </form>


      <!-- <div class="col-md-9"> -->
          
    </section>
    

@endsection