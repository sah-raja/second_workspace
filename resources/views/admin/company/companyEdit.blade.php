<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('company.update',$company->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div> 
        <label>Company Name</label>
         <input type="text" class="" name="company_name" value="{{ $company->name }}" >
    </div>
    <br>
    <div> 
        <label>Contact Details </label>
         <input type="text" class="" name="contact_details" value="{{ $company->contact_details }}" >
    </div>
    <br>
    <div> 
        <label>Logo </label>
        <img src="{{ asset('images/'.$company->logo) }}" 
                    style="width:100px;height:50px;
                    alt="" >
         <input type="file" name="logo" >
    </div>
    <br>


    <div >
        <button class="" > Update </button>  
    </div>
    </form>
</body>
</html>