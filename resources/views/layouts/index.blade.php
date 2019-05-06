<!DOCTYPE html>
<html>

<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','CMS')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
       <div class="container">
           <a href="/" class="navbar-brand">LarCMS</a>
           <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a href="/" class="nav-link">帮助</a></li>
                <li class="nav-item"><a href="" class="nav-link">登陆</a></li>
           </ul>
       </div>
   </nav>
   <div class="container">
       @yield('content')
       
   </div>
</body>

</html>