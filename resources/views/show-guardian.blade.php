@extends('layouts.main2')
@section('content')

<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-hover">

          <!--Table head-->
          <thead>
            <tr>              
              <th> User </th>
              <th> First name </th>
              <th> Last name </th>
              <th> ID number </th>
              <th> Student`s School </th>
              <th> Student`s Reg No. </th>
              <th> Status </th>
              <th> Actions </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
         <tbody>
                        @foreach ($guardians as $guardian)
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="image"/> 
                          </td>
                          <td>{{$guardian->first_name}}</td>
                          <td>{{$guardian->last_name}}</td>
                          <td>{{$guardian->id_no}}</td>
                          <td>{{$guardian->s_school}}</td>
                          <td>{{$guardian->s_reg_no}}</td>
                          <td>{{$guardian->status}}</td>
                          <td>
                            <button type="button" class="btn btn-rounded btn-outline-secondary"><a href="{{url('individual-guardian/'.$guardian->id)}}">View</a></button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-rounded btn-outline-light"><a href="{{url('edit-guardian/'.$guardian->id)}}">Edit</a></button>
                          </td>
                          <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-rounded btn-inverse-danger" data-toggle="modal" data-target="#exampleModal">
                              Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">About to Delete a record</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to DELETE this record?
                                  </div>
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-rounded btn-inverse-danger"><a href="{{url('delete-guardian/'.$guardian->id)}}">Delete</a></button>
                                    <button type="button" class="btn btn-primary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </td>
                        </tr>
                        
                        @endforeach
                      </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>

@endsection