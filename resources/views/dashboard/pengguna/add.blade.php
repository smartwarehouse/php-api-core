@extends('dashboard.layout.app')

@section('title', 'Tambah Pengguna')

@section('content')

    <div class="form-element segments-page">
        <div class="container">
            <form action="{{ route('penggunaadd') }}" method="post">
                {{ csrf_field() }}
                <div class="content no-mb">
                    <h5>Nama</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="name">
                    </div>
                </div>
                <div class="content">
                    <h5>email</h5>
                    <div class="input-field">
                        <input type="email" id="with-label" placeholder="Tulis disini" name="email">
                    </div>
                </div>
                <div class="content no-mb">
                    <h5>Password</h5>
                    <div class="input-field">
                        <input type="text" id="with-label" placeholder="Tulis disini" name="password">
                    </div>
                </div>
                <div class="content">
                    <h5>User Role</h5>
                    <div class="input-field">
                        <select name="role">
                            <option value="" disabled selected>Pilih User Role</option>
                            <option value="A">Root</option>
                            <option value="B">Pegawai Non Gudang</option>
                            <option value="C">Pegawai Gudang</option>
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