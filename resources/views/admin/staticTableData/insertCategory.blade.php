<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="">
        <header>
            <h1> Insert into Category Table </h1>
        </header>
    </div>
    <form method ="POST" action ="{{ route('category-add.store') }}">
    <div>
        <label>Add to Category list </label>
        <input type="text" class="" name="category" >
    </div>

    <div >
        <button class="" > Submit </button>  
    </div>
    
    
</body>
</html>