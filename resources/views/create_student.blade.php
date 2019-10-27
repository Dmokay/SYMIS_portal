@extends('layouts.main')

@section('content')

  <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" form method="post" action="save-student">
                      @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">School</label>
                            <input type="text" class="form-control" name="school" placeholder="School">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Reg No</label>
                            <input type="text" class="form-control" name="reg_no" placeholder="Reg no">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Study Class</label>
                            <input type="text" class="form-control" name="s_class" placeholder="Class">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Stream</label>
                            <input type="text" class="form-control" name="stream" placeholder="Stream">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Age">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="Status">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Save</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                  </div>
                </div>
              </div>
@endsection

</body>
</html>