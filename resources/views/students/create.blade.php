@extends('welcome')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Student</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ url('/students/store') }}" method="POST">
                                    {{csrf_field()}} 
                                     <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Nama :</strong>
                                                <input type="text" name="nama" class="form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>JK :</strong>
                                                <select name="jk" id="jk" class="form-control" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Alamat:</strong>
                                                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Agama :</strong>
                                                <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Asal Sekolah :</strong>
                                                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Jurusan :</strong>
                                                <select name="jurusan" id="jurusan" class="form-control"  required>
                                                    <option value="rpl">RPL</option>
                                                    <option value="tkj">TKJ</option>
                                                    <option value="mmd">MMD</option>
                                                    <option value="otkp">OTKP</option>
                                                    <option value="bdp">BDP</option>
                                                    <option value="tbg">TBG</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
