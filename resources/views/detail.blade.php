<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <!--    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
        <title>Laravel</title>
          <style type="text/css">
        	


html {
    background-image: url("/img/ka.jpg");
    background-size: cover;
     color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
}
        </style>
    </head>
    <body>
    	<table> 
        <div class="container" >
			<div class="col-lg-12">
			
        	@foreach($tbl_user as $p)
			<form action="/index/update" method="post">
				{{ csrf_field() }}
			<div class="form-row">
   				 <div class="form-group col-md-6">
      			<label for="inputEmail4">ID</label>
				<input type="text" name="id" class="form-control" disabled="disabled" id="inputEmail4" placeholder="Email"  value="{{ $p->id }}"> <br/>
			</div>
			 <div class="form-group col-md-6">
      			<label for="inputEmail4">NIM</label>
				<input type="text" name="nim" class="form-control" disabled="disabled" id="inputEmail4" placeholder="Email"  value="{{ $p->nim }}"> <br/>
			</div>
			</div>
				<div class="form-row">
			<div class="form-group col-md-6">
      			<label for="inputEmail4">Nama</label>
				<input type="text" required="required" name="nama" disabled="disabled" class="form-control" disabled="disabled" id="inputEmail4" placeholder="Email"  value="{{ $p->nama }}"> <br/>
			</div>
				<div class="form-group col-md-6">
      			<label for="inputEmail4">Email</label>
				<input type="text" required="required" name="email" disabled="disabled" class="form-control" disabled="disabled" id="inputEmail4" placeholder="Email"  value="{{ $p->email }}"> <br/>
			</div>
		</div>
				<div class="form-group">
			    <label for="exampleInputEmail1">Alamat</label>
				<input type="text" required="required" name="alamat" disabled="disabled"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->alamat }}">  <br/>
			</div>
				 <button type="button"  class="btn btn-secondary"> <a href="/index"> Home </a></button>
			</form>
			@endforeach
			</div>
</div>
</table>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
