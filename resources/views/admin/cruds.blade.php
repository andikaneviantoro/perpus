@extends('layouts.app')
@section('title', 'Andika | Dashboard')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- FORM-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-30">Tambah Barang</h3>
                    <form method="post" action="{{route('cruds.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-floating mb-3">
                            <label for="inputemail" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="inputjudul" placeholder="Judul" name="judul">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputemail" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="inputpengarang" placeholder="Pengarang" name="pengarang">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputemail" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="inputpenerbit" placeholder="Penerbit" name="penerbit">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputname">Gambar</label>
                            <input type="file" class="form-control" id="inputgambar" placeholder="Choose File" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                </div>

            </div>
        </div>
    </section>


    <!-- END FORM-->

    <!-- COPYRIGHT-->

    <!-- END COPYRIGHT-->
</div>
@endsection
