<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Registered Students</title>
  </head>
  <body>
    <table border="1">
    <tr>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Address</th>
    </tr>
  
    @foreach($students as $student)
    <tr>
      <td>{{$student->student_number}}</td>
      <td>{{$student->full_name}}</td>
      <td>{{$student->address}}</td>
    </tr>
    @endforeach
</table>
<a href="/Students">Go back to previous page</a><br>
<a href="/">Home</a><br>
  </body>
</html>