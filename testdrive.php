<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Drive</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="third.css">
</head>
<body>

<header>
      <nav>
          <img src="hyundai.jpg" alt="">
           

            <ul class="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Products</a>
                        <ul>
                              <li><a href="altroz.html">Altroz</a></li>
                              <li><a href="#">Product 2</a></li>
                              <li><a href="#">Product 3</a></li>
                              <li><a href="#">Product 4</a></li>
                        </ul>
                  </li>
                  <li><a href="#">Used Cars</a>
                        <ul>
                              <li><a href="#">Product 1</a></li>
                              <li><a href="#">Product 2</a></li>
                              <li><a href="#">Product 3</a></li>
                              <li><a href="#">Product 4</a></li>
                        </ul>
                  </li>
                  <li><a href="insurance.php">Apply Insurance</a></li>
                  <li><a href="#">About</a></li>
            </ul>
      </nav>
</header>

<form>
    <label>
        <input name="name" id="name" type="text" required />
        <div class="label-text">Full Name</div>
    </label>
    <label>
        <input type="email" name="email" id="email" required />
        <div class="label-text">Email</div>
    </label>
    <label>
        <input type="tel" name="phone" id="phone" required />
        <div class="label-text">Phone Number</div>
    </label>
    <button type="submit" value="Submit" id="button">Submit</button>
</form>


<script>
        $(document).ready(function(){
            $("#button").click(function(){
                var name=$("#name").val();
                var email=$("#email").val();
                var phone=$("#phone").val();
                $.ajax({
                    url:'drivedata.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        phone:phone
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });
        });
    </script>
</body>
</html>