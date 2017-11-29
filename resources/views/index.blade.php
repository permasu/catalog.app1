@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Главная страница
            <small>быстрый поиск</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    Поиск организаций
                </div>
                <div class="box-body">
                    <label for="search">Компания</label>
                    <search
                            name="search"
                            placeholder="Название организации..."
                            url="/ajax/search/company"
                            on-select="openLink">
                    </search>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')
    @include('sidebar')
@endsection