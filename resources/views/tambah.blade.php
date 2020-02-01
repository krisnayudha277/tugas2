<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
     <style>



html {
    background-image: url("/img/ka.jpg");
    background-size: cover;
     color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
}
     /*       html, body {
                background-image: url(img/ba.jpg);
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
/*
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/
         /*   .tabel{
                 align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 220px;
            }*/
        </style>
    </head>
    <body>
      
			<div class="container"  style=" width: 75%; margin: 150px;">
			               
				<div class="row">
						<div class="col-lg-12">
						
					<form action="/index/store" method="post">
						{{ csrf_field() }}
						<div class="form-row">
   				 		<div class="form-group col-md-6">
      					<label for="inputEmail4">NIM</label>
						<input type="text" name="nim" class="form-control" id="inputEmail4" placeholder="NIM" ></div> <br/>

						 <div class="form-group col-md-6">
      					<label for="inputEmail4">Nama</label>
						<input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="Nama" ></div> <br/>
						</div>

						<div class="form-row">
						<div class="form-group col-md-6">
      					<label for="inputEmail4">Email</label>
						<input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email"  ></div> <br/>

						<div class="form-group col-md-6">
      					<label for="inputEmail4">Alamat</label>
						<input type="text" name="alamat"class="form-control" id="inputEmail4" placeholder="Alamat"  ></input> <br/>
						</div>
						</div>
						<input type="submit" value="Simpan Data" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
    </body>
</html>

<!-- <form action="/index/store" method="post">
		{{ csrf_field() }}
		nim <input type="text" name="nim"> <br/>
		nama <input type="text" name="nama"> <br/>
		email <input type="text" name="email"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->