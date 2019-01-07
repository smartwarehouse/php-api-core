@extends('dashboard.layout.app')

@section('title', 'Jenis Gudang')

@section('content')

    <div class="list segments-page">
        <div class="container">
            <div class="content waves-effect waves-light-grey">
                <div class="list-img">
                    <img src="images/list1.jpg" alt="" width="1px">
                </div>
                <div class="list-text">
                    <h6>Jack Funky</h6>
                    <p>Lorem ipsum dolor sit amet lorem consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="content waves-effect waves-light-grey">
                <div class="list-img">
                    <img src="images/list1.jpg" alt="" width="1px">
                </div>
                <div class="list-text">
                    <h6>Jack Funky</h6>
                    <p>Lorem ipsum dolor sit amet lorem consectetur adipisicing elit</p>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('jenisgudangadd') }}" method="post">
        {{ csrf_field() }}

    </form>

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