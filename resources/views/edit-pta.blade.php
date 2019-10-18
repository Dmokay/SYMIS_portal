@extends('layouts.main')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="{{url('update-pta')}}">
						@csrf
                        <input type="hidden" name="id" value="{{$pta->id}}">
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{$pta->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{$pta->last_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Number</label>
                            <input type="text" class="form-control" name="id_no" value="{{$pta->id_no}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">School</label>
                            <input type="text" class="form-control" name="school" value="{{$pta->school}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pta Code</label>
                            <input type="text" class="form-control" name="pta_code" value="{{$pta->pta_code}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" value="{{$pta->status}}">
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



	