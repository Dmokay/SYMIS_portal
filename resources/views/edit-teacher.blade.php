@extends('layouts.main')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="{{url('update-teacher')}}">
						@csrf
                        <input type="hidden" name="id" value="{{$teacher->id}}">
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{$teacher->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{$teacher->last_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Number</label>
                            <input type="text" class="form-control" name="id_no" value="{{$teacher->id_no}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">School</label>
                            <input type="text" class="form-control" name="school" value="{{$teacher->school}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tsc Number</label>
                            <input type="text" class="form-control" name="tsc_no" value="{{$teacher->tsc_no}}">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" value="{{$teacher->status}}">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Update</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
             </div>
@endsection
</body>
</html>



	