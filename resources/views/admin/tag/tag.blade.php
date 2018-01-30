@extends('admin.master')
@section('pgTitle')
    Tag
    @endsection
@section('pgSubTitle')
    Add Tag
    @endsection
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        	<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

				<div class="row">
					<div class="col-md-offset-3 col-md-6">
	              		<div class="form-group">
		                  <label for="name">Tag Title</label>
		                  <input type="text" class="form-control" id="name" name="name" placeholder="Tag Title">
		                </div>
		                <div class="form-group">
		                  <label for="slug">Tag Slug</label>
		                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
		                </div>
						<div class="form-group">
		                <button type="submit" class="btn btn-primary">Submit</button>
		              </div>
	              	</div>
				</div> 				
				
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection