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

    <div class="card shadow-sm mx-auto" style="width: 500px">
        <div class="card-body">
            <div class="card-title">Hello dear!</div>
            <p>
            A company summary might include our mission statement, goals, target market, products, and services, as well as how it stands out from competitors
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
    background-image: url(https://media.istockphoto.com/photos/fresh-green-leaf-in-sunny-day-picture-id1224487301?b=1&k=20&m=1224487301&s=170667a&w=0&h=8YpUmdwRVhML3sXPpm-fQl2jkteATVetiyuANuGB_Yc=);
       }
       .text-center ul {
     margin: 1;
     padding: 1;
    font-family: sans-serif;
    list-style: none;
    text-align:right;
    overflow: hidden;
    background-color:lightseagreen;
    }
    .text-center li{
padding: 20px;
display: inline-flex;
font-size: 30px;
}
     .text-center li a:hover {
      background-color:pink;
      }
      a {text-decoration:none;
        color:whitesmoke;
      }
      
        
</style>