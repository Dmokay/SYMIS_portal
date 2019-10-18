@extends('layouts.main')

@section('content')

  <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" form method="post" action="{{url('update-student')}}">
                      @csrf
                      <input type="hidden" name="id" value="{{$student->id}}">
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">School</label>
                            <input type="text" class="form-control" name="school" value="{{$student->school}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Reg No</label>
                            <input type="text" class="form-control" name="reg_no" value="{{$student->reg_no}}">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Study Class</label>
                            <input type="text" class="form-control" name="s_class" value="{{$student->s_class}}">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Stream</label>
                            <input type="text" class="form-control" name="stream" value="{{$student->stream}}">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" class="form-control" name="age" value="{{$student->age}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" value="{{$student->status}}">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Update</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                  </div>
                </div>
              </div>
@endsection

</body>
</html>