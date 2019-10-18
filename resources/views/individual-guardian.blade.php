@extends('layouts.main')
@section('content')

<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">
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

          <tr>
            <td 
            class="py-1"><img src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="image"/> 
            </td>
            <td>{{$guardian->first_name}}</td>
            <td>{{$guardian->last_name}}</td>
            <td>{{$guardian->id_no}}</td>
            <td>{{$guardian->s_school}}</td>
            <td>{{$guardian->s_reg_no}}</td>
            <td>{{$guardian->status}}</td>
            <td>
                <button type="button" class="btn btn-rounded btn-outline-light"><a href="{{url('edit-guardian/'.$guardian->id)}}">Edit</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-rounded btn-inverse-danger"><a href="{{url('show-guardian/'.$guardian->id)}}">Delete</a></button>
            </td>
          </tr>

        </table>
        <!--Table-->
      </div>
</section>

@endsection