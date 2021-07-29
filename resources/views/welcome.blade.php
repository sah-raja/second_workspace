<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li><a href="{{ route('register.admin') }}"> Admin Register </a></li>
        <li><a href="{{ route('login.admin') }}"> Admin Login </a></li>
        <li><a href="{{ route('register.user') }}"> User Register </a></li>
        <li><a href="{{ route('login.user') }}"> User Login </a></li>
        <li><a href="{{ route('register.employer') }}"> Employer Register </a></li>
        <li><a href="{{ route('login.employer') }}"> Employer Login </a></li>
        
    </ul> 
</body>
</html>