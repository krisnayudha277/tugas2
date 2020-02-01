<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
 
	
	<a href="/dashboard/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<!-- <tr>
			<th>id</th>
			<th>nim</th>
			<th>nama</th>
			<th>email</th>
			<th>alamat</th>
		</tr> -->
		@foreach($user as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/dashboard/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/dashboard/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>