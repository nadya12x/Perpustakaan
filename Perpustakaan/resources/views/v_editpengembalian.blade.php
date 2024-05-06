@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $judul }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No Hp</label>
                            <input class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengembalian</label>
                            <input class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection