<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Jobs</title>
</head>
<body>
    <div class="">
		<header>
			<h1> Jobs Posted </h1>
		</header>
	</div>
		
	<div class="table">
		<table border="1">
			<thead>
				<tr class="">
                <th colspan=2> Action</th>
                <th>S.N</th>
				<th> Company Name </th>
				<th> Contact Details </th>
				<th> Logo</th>              
				</tr>
			</thead>
			
			<tbody>
            @foreach($company as $company)
			<tr>
                <td><a href="{{ route('company.edit',$company->id) }}"> Edit </a></td>
                <td><a href="{{ route('company.delete',$company->id) }}"> Delete </a></td> 
                <td> {{ $company->id }}</td>
				<td> {{ $company->name }}</td>
				<td> {{ $company->contact_details  }}</td>
                <td> <img src="{{ asset('images/'.$company->logo) }}" 
                    style="width:100px;height:100px;
                    alt="" </td>
			
			</tr>
            @endforeach
			</tbody>
		</table>
	</div>
</body>
</html>