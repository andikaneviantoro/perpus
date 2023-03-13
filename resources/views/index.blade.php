@extends('layouts.main')
@section('title', 'Halaman Beranda')
@section('content')
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-1 m-b-20"><strong>Daftar buku puskom</strong></h3>
                    <div class="table-data__tool">


                        <form class="au-form-icon--sm" action="/cari" method="GET">
                            <input class="au-input--w300 au-input--style2" type="text" name="cari" placeholder="Search for buku" value="{{ old('cari')}}">
                            <button class="au-btn--submit2" type="submit" value="CARI">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>


                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>No</th>
                                        <th style="text-align: center; vertical-align: middle;">Gambar</th>
                                        <th style="text-align: center; vertical-align: middle;">Judul</th>
                                        <th style="text-align: center; vertical-align: middle;">Pengarang</th>
                                        <th style="text-align: center; vertical-align: middle;">Penerbit</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cruds as $index => $crud)
                                    <tr class="tr-shadow">
                                        <td style="text-align: center; vertical-align: middle;">{{ $index + 1 }}</td>
                                        <td style="text-align: center; vertical-align: middle;"><img src="{{asset('admin/images/buku/' . $crud->gambar)}}" width=200 alt=""></td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $crud->judul }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $crud->pengarang }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $crud->penerbit}}</td>
                                    <tr class="spacer"></tr>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                        {{ $cruds->links() }}
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
