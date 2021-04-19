@extends('welcome')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">Data Student</h3>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{url('students/cetak_pdf')}}">Export PDF</a>
                            </div>
                        </div>
                        <br>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                            </div>
                            @endif

                            <table id="table_id" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nis</th>
                                    <th>Name</th>
                                    <th>JK</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->no_reg }}</td>
                                    <td>{{ $student->nama }}</td>
                                    <td>{{ $student->jk }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>{{ $student->agama }}</td>
                                    <td>{{ $student->asal_sekolah }}</td>
                                    <td>{{ $student->jurusan }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url('students/edit/'.$student->no_reg)}}">Edit</a>  
                                        <button type="button" class="btn btn-danger btn-secondary" data-toggle="modal" data-target="#myModal">Delete</button>
                                        {{-- <a class="btn btn-danger" href="{{url('students/delete/'.$student->no_reg)}}">Delete</a> --}}
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                <div class="modal-dialog modal-lg" role="document" >
                                <div class="modal-content" style="background: #fff;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Are you sure want to delete this data?</h1>
                                        <a class="btn btn-danger" href="{{url('students/delete/'.$student->no_reg)}}">Delete</a>
                                        <br>
                                    </div>
                                 </div>
                                </div>
                                </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
    
@endsection