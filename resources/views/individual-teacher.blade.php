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
              <th> School </th>
              <th> Tsc number</th>
              <th> Status </th>
              <th> Actions </th>
            </tr>
          </thead>

          <tr>
            <td 
            class="py-1"><img src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="image"/> 
            </td>
            <td>{{$teacher->first_name}}</td>
            <td>{{$teacher->last_name}}</td>
            <td>{{$teacher->id_no}}</td>
            <td>{{$teacher->school}}</td>
            <td>{{$teacher->tsc_no}}</td>
            <td>{{$teacher->status}}</td>
            <td>
                <button type="button" class="btn btn-rounded btn-outline-light"><a href="{{url('edit-teacher/'.$teacher->id)}}">Edit</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-rounded btn-inverse-danger"><a href="{{url('delete-teacher/'.$teacher->id)}}">Delete</a></button>
            </td>
          </tr>

        </table>
        <!--Table-->
      </div>
</section>

@endsection