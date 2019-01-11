@extends('dashboard.layout.app')

@section('title', 'Tambah Vendor')

@section('content')

    <div class="form-element segments-page">
        <div class="container">
            <form action="{{ route('vendoradd') }}" method="post">
                {{ csrf_field() }}
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
                <div class="content no-mb">
                    <h5>No Telpon</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="telp">
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