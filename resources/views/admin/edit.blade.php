@extends('layouts.app')
@section('title', 'Andika | Dashboard')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Edit</strong> Library Buku
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('cruds.update', $crud->id)}}" method="post" class="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Judul</label>
                                        <input type="text" name="judul" class="form-control" value="{{ $crud->judul}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Pengarang</label>
                                        <input type="text" name="pengarang" class="form-control" value="{{ $crud->pengarang}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Penerbit</label>
                                        <input type="text" name="penerbit" class="form-control" value="{{ $crud->penerbit}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Gambar</label>
                                        <input type="file" name="gambar" class="form-control" placeholder="gambar" value="{{ $crud->gambar}}">
                                        <img src="{{asset('admin/images/buku/' . $crud->gambar)}}" width="200px" alt="">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->

    <!-- COPYRIGHT-->

    <!-- END COPYRIGHT-->
</div>
@endsection
