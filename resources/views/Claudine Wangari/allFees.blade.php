<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Paid Fees</title>
  </head>
  <body>
    <table border="1">
    <tr>
        <th>Student Number</th>
        <th>Student Name</th>
        <th>Date of Payment</th>
        <th>Amount</th>
    </tr>
  
    @foreach($fees as $fee)
    <tr>
      <td>{{$fee->student_number}}</td>
      <td>{{$fee->student_name}}</td>
      <td>{{$fee->date_of_payment}}</td>
      <td>{{$fee->amount}}</td>
    </tr>
    @endforeach
</table>
<h1> Total Fees Paid: {{$Tfees}} </h1>
<a href="/feesB">Go back to previous page</a><br>
<a href="/">Home</a><br>
  </body>
</html>