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
		<h5>Data Student</h4>
	</center>

	<table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                <th>No Reg</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $s)
            <tr>
                <td>{{ $s->no_reg }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->jk }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->agama }}</td>
                <td>{{ $s->asal_sekolah }}</td>
                <td>{{ $s->jurusan }}</td>
                <td>{{ $s->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>