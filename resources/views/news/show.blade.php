@extends('layouts.main')
@section('title') Новость {{ $id }} - @parent @stop
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Новость - {{ $id }}</h1>
                <p class="lead text-muted">Новостьи нашего сайта</p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            Новость с id  {{ $id }}
        </div>
    </div>
@endsection
