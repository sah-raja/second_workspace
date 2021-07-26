<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('company-details.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div> 
        <label>Company Name</label>
         <input type="text" class="" name="company_name" value="" >
    </div>
    <br>
    <div> 
        <label>Contact Details </label>
         <input type="text" class="" name="contact_details" value="" >
    </div>
    <br>
    <div> 
        <label>File </label>
        <input type="file" name="logo" >
    </div>
    <br>
    <div >
        <button class="" > Submit </button>  
    </div>
    </form>
</body>
</html>