@extends('dashboard.layout.app')

@section('title', 'Tambah Gudang')

@section('content')

    <div class="form-element segments-page">
        <div class="container">
            <form action="{{ route('gudangadd') }}" method="post">
                {{ csrf_field() }}
                <div class="content no-mb">
                    <h5>ID Gudang</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="id_gudang">
                    </div>
                </div>
                <div class="content no-mb">
                    <h5>Nama</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="nama">
                    </div>
                </div>
                <div class="content">
                    <h5>Alamat</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="alamat">
                    </div>
                </div>
                <div class="content">
                    <h5>Jenis Gudang</h5>
                    <div class="input-field">
                        <select name="id_jenis_gudang">
                            <option value="" disabled selected>Pilih Jenis Gudang</option>
                            @foreach($data as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col s12">
                            <div class="contents">
                                <button class="button waves-effect button-full blue b-shadow">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection