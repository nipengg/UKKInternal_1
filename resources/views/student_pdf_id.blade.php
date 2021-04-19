<!DOCTYPE html>
<html>
<head>
	<title>Data Student</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    
    <center>
		<h5>Data {{ $students->nama }}</h4>
	</center>

                <p>No. Registrasi : {{ $students->no_reg }}</p>
                <p>Nama : {{ $students->nama }}</p>
                <p>JK : {{ $students->jk }}</p>
                <p>Alamat : {{ $students->alamat }}</p>
                <p>Agama : {{ $students->agama }}</p>
                <p>Asal Sekolah : {{ $students->asal_sekolah }}</p>
                <p>Minat Jurusan : {{ $students->jurusan }}</p>
</body>
</html>