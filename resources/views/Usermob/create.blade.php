</<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

   
</head>
<body>

<h1>register</h1>

<div class="container">

    <form method="POST" action="/useraction">

        {{ csrf_field() }}

       <div>
          <label >user name</label>
          <input type="text" name="uname" placeholder="name">

      </div>
      <div>
          <label >phone number</label>
          <input type="text" name="mobil" placeholder="number">

      </div>
      <div>
          <label >phone number</label>
          <input type="text" name="mobil1" placeholder="number">

      </div>
       <div>
          <label >email</label>
          <input type="text" name="email" placeholder="email">

      </div>
  
      <div>

            <input type="submit" >

      </div>

    </form>  

 </div>   

</body>
</html>