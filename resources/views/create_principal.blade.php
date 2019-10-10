@extends('layouts.main')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="save-principal">
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
                            <label for="exampleInputEmail1">School</label>
                            <input type="text" class="form-control" name="school" placeholder="School">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Principal`s Code</label>
                            <input type="text" class="form-control" name="principal_code" placeholder="Code">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tsc no</label>
                            <input type="text" class="form-control" name="tsc_no" placeholder="Tsc No">
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



	