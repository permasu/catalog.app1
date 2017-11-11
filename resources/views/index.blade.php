@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
            <form action="/search" method="post" role="form">
                <legend>Название организации</legend>

                <div class="form-group">
                    <label for="search">Компания</label>
                    <search></search>
                </div>
            </form>

            </div>
        </div>
    </div>

@endsection