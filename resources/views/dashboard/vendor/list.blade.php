@extends('dashboard.layout.app')

@section('title', 'Vendor')

@section('content')

    <div class="list segments-page">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="contents">
                        <a href="{{route('vendorform')}}"><button class="button waves-effect button-full blue b-shadow">Tambah</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="table-contents default-table">
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telpon</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telp }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection