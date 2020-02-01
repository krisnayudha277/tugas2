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
            html, body {
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
            .tabel{
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
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="content">
                <div class="title m-b-md">
               SISTEM KEANGGOTAAN
                </div>
                <div class="col-4">
                 <button  type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><a href="/index/tambah" style="color: black;">Tambah Anggota Baru</a></button>
                 </div>

	
        </div>
        <div class="container">
            <table  class="table table-hover"  style=" width: 75%; margin: 150px;" >
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
        @foreach($tbl_user as $p)
        <tr>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
                <a href="/index/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                |
                <a href="/index/hapus/{{ $p->id }}" class="btn btn-warning btn-sm">Hapus</a>
                |
                <a href="/index/detail/{{ $p->id }}" class="btn btn-warning btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </table>
        </div>
    </body>
</html>
