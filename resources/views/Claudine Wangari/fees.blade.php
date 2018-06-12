<html>
  <head>
    <title>Fees Payment Details</title>
  </head>
  <body>
   <form method="post" action="/feesE">
       {{csrf_field()}}
       <input type= "hidden" name ="id">
    Student Number:<input type="number" name="studentNumber" value="{{$student->student_number or ''}}" placeholder="studentNumber"><br><br>
    Student Name:<input type="text" name="studentName" value="{{$student->student_name or ''}}" placeholder="studentName"><br><br>
    Date of Payment:<input type="date" name="DOP" value="{{$student->date_of_payment or ''}}" placeholder="DOP"><br><br>
    Amount:<input type="number" name="amount" value="{{$student->amount or ''}}" placeholder="amount"><br><br>
       <button type="submit" name="submit">SAVE</button>
    </form>
  </body>
</html>