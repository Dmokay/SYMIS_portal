@extends('layouts.main2')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="{{url('update-guardian')}}">
						@csrf
                          <input type="hidden" name="id" value="{{$guardian->id}}">
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{$guardian->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{$guardian->last_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Number</label>
                            <input type="text" class="form-control" name="id_no" value="{{$guardian->id_no}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">S.School</label>
                            <input type="text" class="form-control" name="s_school" value="{{$guardian->s_school}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">S.Reg no</label>
                            <input type="text" class="form-control" name="s_reg_no" value="{{$guardian->s_reg_no}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" value="{{$guardian->status}}">
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



	