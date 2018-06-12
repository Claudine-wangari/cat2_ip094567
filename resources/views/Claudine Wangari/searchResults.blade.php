<html>
  <head>
    <title>Search Results</title>
  </head>
  <body>
<div>
    @if(isset($details))
        <p> The Search results for student number <b> {{ $query }} </b> are :</p>
    <h2>Student Fee Details</h2>
<table border="1">
    <tr>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Date of Payment</th>
        <th>Amount</th>
    </tr>
  
    @foreach($details as $student)
    <tr>
      <td>{{$student->student_number}}</td>
      <td>{{$student->student_name}}</td>
      <td>{{$student->date_of_payment}}</td>
      <td>{{$student->amount}}</td>
    </tr>
    @endforeach
</table>
    <h1> Total Fees: {{$Tfees}} </h1>
    @endif
</div>
<a href="/">Home</a><br>
</body>
</html>
