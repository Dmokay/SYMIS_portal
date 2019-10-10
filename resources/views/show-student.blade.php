@extends('layouts.main')
@section('content')

<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">

          <!--Table head-->
          <thead>
            <tr>              
              <th> User </th>
              <th> First name </th>
              <th> Last name </th>
              <th> School </th>
              <th> Reg No </th>
              <th> Class </th>
              <th> Stream </th>
              <th> Age </th>
              <th> Status </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
         <tbody>
                        @foreach ($students as $student)
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/logo/SYMIS.jpg')}}" alt="image"/> 
                          </td>
                          <td>{{$student->first_name}}</td>
                          <td>{{$student->last_name}}</td>
                          <td>{{$student->school}}</td>
                          <td>{{$student->reg_no}}</td>
                          <td>{{$student->s_class}}</td>
                          <td>{{$student->stream}}</td>
                          <td>{{$student->age}}</td>
                          <td>{{$student->status}}</td>
                        </tr>
                        
                        @endforeach
                      </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>

@endsection