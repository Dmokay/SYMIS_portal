@extends('layouts.main')

@section('content')
	<div class="main-panel">
     <table>
       <thead>
         <tr>
           <th>First Name</th>
           <th>ID</th>
         </tr>
       </thead>
       <tbody>
         @foreach($guardians as $guardian)
         <tr>
           <td>{{$guardian->first_name}}</td>
           <td>{{$guardian->id_no}}</td>
         </tr>
         @endforeach
       </tbody>
     </table>         
  </div>
@endsection
</body>
</html>



	