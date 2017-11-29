@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Карточка организации
        </h1>
    </section>
    <section class="content">
        @if ( session()->has('message')  )

            <div class="callout callout-success">
                <h4>Сообщение</h4>
                <p>{{ session('message') }}</p>
            </div>
        @endif
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $company->short_name }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full-name">
                            <span class="atr">Наименование:</span>
                            {{ isset($company->full_name) ? $company->full_name : $company->short_name }}
                        </div>
                        <div class="inn">
                            <span class="atr">ИНН:</span>
                            {{ isset( $company->inn) ? $company->inn : 'не задан'  }}
                        </div>
                        <div class="opf">
                            <span class="atr">Правовая форма:</span>
                            {{ isset( $company->opf->full) ? $company->opf->full : 'не задан'  }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="web">
                            <span class="art">Сайт:</span>
                            <a href="{{ $company->web }}">{{ $company->web }}</a>
                        </div>
                        <div class="email">
                            <span class="atr">Почта:</span>
                            <a href="mailto:{{ $company->email }}">{{ $company->email }}</a>

                        </div>
                        <div class="address">
                            <span class="atr">Адрес:</span>
                            {{ $company->address }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="description">
                            {{ $company->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection