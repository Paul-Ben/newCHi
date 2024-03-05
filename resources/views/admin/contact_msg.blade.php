@extends('admin.blogadmin')

@section('content')


	 <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact Message</h3>
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
              <form action="#" enctype="multipart/form-data">
              <div class="form-group">
                <input class="form-control" name="title" value="{{$contact->name}}" readonly>
              </div>
              <div class="form-group">
                <input class="form-control" name="author"  value="{{$contact->email}}" readonly>
              </div>
              <div class="form-group">
                <input class="form-control" name="slug" value="{{$contact->subject}}" placeholder="Subject:" readonly>
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 200px"  placeholder="Type your message Here" readonly>
                      {{$contact->message}}
                    </textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('contacts.index')}}" class="btn btn-info"><i class="fa fa-times"></i>Back</a>
            </div>
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
      </form>


      <!-- <div class="col-md-9"> -->
          
    </section>
    

@endsection