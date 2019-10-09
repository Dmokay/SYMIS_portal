@extends('layouts.main')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="save-guardian">
						@csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Number</label>
                            <input type="text" class="form-control" name="id_no" placeholder="Id Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">S.School</label>
                            <input type="text" class="form-control" name="s_school" placeholder="Student`s School">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">S.Reg no</label>
                            <input type="text" class="form-control" name="s_reg_no" placeholder="Student`s Reg no">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="Status">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
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



	