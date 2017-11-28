@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-danger panel-collapse">
                    <div class="panel-heading">
                        Автозаполнение
                    </div>
                    <div class="panel-body">
                        Вы можете заполнить часть данных вашей организации автоматически, воспользовавашись поиском ниже.
                        {{--Форма поиска организации на руспрофайл--}}
                        <search
                                name="company"
                                url="/ajax/search/company_profile"
                                on-select="getCompany"
                                placeholder="Название организации"
                                v-on:get-company="getCompany"
                        >
                        </search>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form action="" method="post" role="form" class="form form-default">
                            <legend>Добавление организации в справочник</legend>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="short_name">Краткое наименование</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="short_name"
                                        placeholder="Рога и копыта"
                                        v-model="value.name"
                                >

                                <label for="full_name"></label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="full_name"
                                        placeholder='ООО "Рога и копыта"'
                                        v-model="value.full_name"
                                >

                                <label for="inn">ИНН</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        name="inn"
                                        placeholder="10 или 12 цифр"
                                        v-model="value.inn"
                                >

                                <label for="opf_select">Форма собственности</label>
                                <search
                                        name="opf_select"
                                        url="/ajax/search/opf"
                                        on-select="select"
                                        target="opf_id"
                                        placeholder=""
                                        v-on:update-value="setValue"
                                        v-model="value.opf"
                                ></search>
                                <input
                                        type="hidden"
                                        name="opf_id"
                                        v-model="value.opf_id">

                                <label for="address">Адрес</label>
                                <search
                                        name="address"
                                        url="/ajax/search/address"
                                        render="address"
                                        ref="search"
                                        v-model="value.address"
                                ></search>

                                <label for="web">Сайт</label>
                                <div class="input-group">
                                    <span class="input-group-addon">www</span>
                                    <input type="text" name="web" class="form-control" v-model="value.web">
                                </div>

                                <label for="email">Электронная почта</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" name="email" class="form-control" v-model="value.email">
                                </div>

                                <label for="description">Краткое описание</label>
                                <textarea name="description" rows="3" class="form-control" v-model="value.description"></textarea>

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>


                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('footer-scripts')
    @if ( old() )
    <script type="text/javascript">
        var data = {
            name: '{{ old('short_name') }}',
            full_name: '{{ old('full_name') }}',
            inn: '{{ old('inn') }}',
            opf: '{{ old('opf_select') }}',
            opf_id: '{{ old('opf_id') }}',
            address: '{{ old('address') }}',
            web: '{{ old('web') }}',
            email: '{{ old('email') }}',
            description: '{{ old('description') }}',
        }
    </script>
    @endif
@endpush