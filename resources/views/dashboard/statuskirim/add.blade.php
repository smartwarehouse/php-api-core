@extends('dashboard.layout.app')

@section('title', 'Tambah Status Kirim')

@section('content')

    <div class="form-element segments-page">
        <div class="container">
            <form action="{{ route('statuskirimadd') }}" method="post">
                {{ csrf_field() }}
                <div class="content no-mb">
                    <h5>Kode</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="kode">
                    </div>
                </div>
                <div class="content no-mb">
                    <h5>Nama</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="nama">
                    </div>
                </div>
                <div class="content">
                    <h5>Deskripsi</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="deskripsi">
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

    <div class="content">
        <br>
        @if (\Session::has('count_money'))
            <div class="box">
                <span class="has-text-weight-bold">Perkiraan anda mendapatkan uang:</span>
                <p>Rp {{ @number_format(\Session::get('count_money'),0, ',', '.') }}</p>
            </div>
        @endif
    </div>
@endsection