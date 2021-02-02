<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="third.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
      <nav>
          <img src="hyundai.jpg" alt="logo">
           

            <ul class="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Products</a>
                        <ul>
                              <li><a href="#">Product 1</a></li>
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
        <input type="text" name="model" id="model" required />
        <div class="label-text">Car Model</div>

        
    </label>
    <button type="submit" value="Submit" id="button">Submit</button>
</form> 
</form>      
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var name=$("#name").val();
                var email=$("#email").val();
                var model=$("#model").val();                
                $.ajax({
                    url:'save.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        model:model
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