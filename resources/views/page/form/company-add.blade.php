@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="" method="post" role="form">
                    {{ csrf_field() }}
                    <legend>Добавление организации в справочник</legend>

                    <div class="form-group">
                        <label for="short_name">Краткое наименование</label>
                        <input
                                type="text"
                                class="form-control"
                                name="short_name"
                                placeholder="Краткое наименование компании"
                                value="{{ htmlentities(old('short_name'), ENT_QUOTES ) }}"
                        >

                        <label for="full_name">Полное наименование</label>
                        <input
                                type="text"
                                class="form-control"
                                name="full_name"
                                placeholder="Полное наименование компании"
                                value="{{ htmlentities(old('full_name'), ENT_QUOTES ) }}"
                        >

                        <label for="opf_select">Форма собственности</label>
                        <search
                                name="opf_select"
                                url="/ajax/search/opf"
                                on-select="select"
                                target="opf"
                                v-on:update-value="setValue"
                                value="{{ old('opf_select') }}"
                        ></search>
                        <input type="hidden" :value="value.opf" name="opf_id">

                        <label for="address">Адрес</label>
                        <search
                                name="address"
                                url="/ajax/search/address"
                                render="address"
                                value="{{ old('address') }}"
                        ></search>

                        <label for="web">Сайт</label>
                        <input type="text" name="web" class="form-control" value="{{ old('web') }}">

                        <label for="email">Электронная почта</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">

                        <label for="description">Краткое описание</label>
                        <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <pre>
                    {{ var_dump(old()) }}
                </pre>

            </div>
        </div>
    </div>
@endsection