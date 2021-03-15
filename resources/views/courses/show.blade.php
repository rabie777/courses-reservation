
 <html>
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 </head>
 <body>
 
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E_Mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">category</th>
      <th scope="col">course</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
     
  @foreach($courses as $offer)
    <tr>
      <th scope="row">{{$offer->id}}</th>
      <td>{{$offer->firstname}}</td>
      <td>{{$offer->lastname}}</td>
      <td>{{$offer->email}}</td>
      <td>{{$offer->phone}}</td>
      <td>{{$offer->category}}</td>
      <td>{{$offer->course}}</td>
      <td>
      <a href="{{route('course_edit',[$offer->id])}}" class="btn btn-outline-warning" >Edit</a>
      <a href="{{route('course_delete',$offer->id)}}" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

 

 </body>
 </html>




 