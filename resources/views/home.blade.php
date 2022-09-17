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
             <li><a href="{{('/profile')}}" class="nav-link">Company Profile</a></li>
</ul>
</nav>

        <h1>Prelim Project</h1>

    <div class="card shadow-sm mx-auto" style="width: 600px">
        <div class="card-body">
            <div class="card-title">Hi dear!</div>
            <p>
            We're proud that you chose to visit and join our team. We were thrilled to find someone with your abilities, ideas and great attitude.” “We're so happy to have you on our team. We're pleased you decided to join us, and we hope you'll come to us for help when you need it.
            </p>
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
    background-image: url(https://thumbs.dreamstime.com/b/wooden-desk-against-beauty-natural-backgrounds-your-design-37488908.jpg);
}
.text-center ul {
     margin: 0;
     padding: 0;
    font-family: sans-serif;
    list-style: none;
    text-align:right;
    overflow: hidden;
    background-color:lightblue;
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