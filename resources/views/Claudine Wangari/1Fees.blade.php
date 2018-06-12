<html>
  <head>
    <title> Search for Fees Payment Details for a studen</title>
  </head>
  <body>
<form method="post" action="/search" >
    {{ csrf_field() }}
        Search:<input type="number" name="search" placeholder="Kindly enter the Student Number of the student">
        <button type="submit" name="submit" >Search</button>
</form>
</body>
</html>