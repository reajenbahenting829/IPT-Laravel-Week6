<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prelim Project</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"></link>

</head>
<body>
<div class="text-center">
        <nav class="nav justify-content-center">
            <ul>
           <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
           <li><a href="{{('/about')}}" class="nav-link">About Us</a></li>
           <li> <a href="{{('/profile')}}" class="nav-link">Company Profile</a></li>
</ul>
</nav>
        <h1>Prelim Project</h1>

    <div class="card shadow-sm mx-auto" style="width: 500px">
        <div class="card-body">
            <div class="card-title"> Yes dear!</div>
            <p>
            The company summary in a business plan provides an overview containing a description of the <br> company at a high level.

      </div>
    </div>
</div>

</body>
</html>
<style>
body {
        font-family: sans-serif;
        padding: 20px;
        font-size: 20px;
    background-image: url(https://media.istockphoto.com/photos/leaf-background-picture-id844226534?b=1&k=20&m=844226534&s=612x612&w=0&h=5ApmQETYLQ-f1idri4H97Xfv_5lYP0b6hp3OEHGWrGo=);
}

.text-center ul {
     margin: 0;
     padding: 0;
    font-family: sans-serif;
    list-style: none;
    text-align:right;
    overflow: hidden;
    background-color:lightskyblue;
    }
    .text-center li{
padding: 20px;
display: inline-flex;
font-size: 30px;
}
     .text-center li a:hover {
      background-color: pink;
      }
      a {text-decoration:none;
        color:whitesmoke;
      }
      
</style>