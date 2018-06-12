<html>
  <head>
    <title>Student Details</title>
  </head>
  <body>
   <form method="post" action="/studentC">
    @if(count($errors))
      <div>
        <strong>Whoops!</strong> There were some problems with your input.
        <br/>
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
      <div>
        <div {{ $errors->has('studentNumber') ? 'has-error' : '' }}>
          Student Number:<input type="number"name="studentNumber" placeholder="studentNumber" value="{{old('studentNumber')}}"><br><br>
          <span>{{ $errors->first('firstname') }}</span>
        </div>
      </div>
      <div>
        <div {{ $errors->has('fullName') ? 'has-error' : '' }}>
          Student Name:<input type="text" name="fullName"  placeholder="fullName" value="{{old('fullName')}}"><br><br>
          <span>{{ $errors->first('fullName') }}</span>
        </div>
      </div>
    </div>
    <div>
      <div>
        <div {{ $errors->has('DOB') ? 'has-error' : '' }}>
          Date of Birth:<input type="date" name="DOB"  placeholder="DOB" value="{{old('DOB')}}"><br><br>
          <span>{{ $errors->first('DOB') }}</span>
        </div>
      </div>
      <div>
        <div {{ $errors->has('address') ? 'has-error' : '' }}>
        Address: <input type="text" name="address"  placeholder="address" value="{{old('address')}}"><br><br>
          <span>{{ $errors->first('address') }}</span>
        </div>
      </div>
      <div>
       <button type="submit" name="submit">SAVE</button>
      </div>
    </div>
    </form>
  </body>
</html>