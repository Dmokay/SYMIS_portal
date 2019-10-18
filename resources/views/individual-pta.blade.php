@extends('layouts.main')
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
              <th> School </th>
              <th> Pta`s Code </th>
              <th> Status </th>
              <th> Actions </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
                        <tbody>
                        
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="image"/> 
                          </td>
                          <td>{{$pta->first_name}}</td>
                          <td>{{$pta->last_name}}</td>
                          <td>{{$pta->id_no}}</td>
                          <td>{{$pta->school}}</td>
                          <td>{{$pta->pta_code}}</td>
                          <td>{{$pta->status}}</td>

                           <td>
                            <button type="button" class="btn btn-rounded btn-outline-light"><a href="{{url('edit-pta/'.$pta->id)}}">Edit</a></button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-rounded btn-inverse-danger"><a href="{{url('show-pta/'.$pta->id)}}">Delete</a></button>
                          </td>
                        </tr>
                        
                      </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>

@endsection