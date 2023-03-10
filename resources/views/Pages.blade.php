<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    
    .navigation_bar ul li{
        display:inline-block;
        justify-content: space-between;
         align-items: center;
         margin: 25px;
    }
    .navigation_bar ul li a{
        font-size:24px;
        text-decoration:none;
        color: black;
       text-transform: capitalize;
    }
    h1{
       margin-left:50px
    }
    form{
        display:absoulote;
        : 0 20px;
        
    }
    .form-name{
        margin: 20px;;
    }
    .form-age{
        margin: 20px;;
    }
    form input{
        padding: 10px;
        border-radius:10px;
    }
    form button{
        background-color:green;
        padding: 8px;
        border-radius:10px;
    }
</style>
<body>


    <div class="container">
   
        <div class="navigation_bar ">
        <ul >
         <li><a href="/">Home</a></li>
         <li><a href="/About">About</a></li>
         <li><a href="/Service">Service</a></li>
         <li><a href="/Contant">Contac us</a></li>
            </ul>
        </div>
        <h1> Welcome to Home bage</h1>

        <form action="{{Url('/')}}/About" method="post">
           @csrf
    <label for="">Name</label>
    <input type="text" name="name"class="form-name" id=" " placeholder="Enter your name"><br>
    <label for="">Age</label>
    <input type="text" name="age" class="form-age" id=" " placeholder="Enter your age"><br>
    <button>Submit</button>
</form>
    </div>
</body>
</html>