@extends('layouts.main')


@section('content')
    <section class="content-header">
        <h1>
            Добавление организации
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-5 col-md-push-7">
                <div class="box box-danger">
                    <div class="box-header">
                        <div class="box-title">
                            Автозаполнение
                        </div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        Вы можете заполнить часть данных вашей организации автоматически, воспользовавашись поиском
                        ниже.
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

                @if (count($errors) > 0)
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <div class="box-title">
                                Исправьте ошибки!
                            </div>
                        </div>
                        <div class="box-body">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

            </div>
            <div class="col-md-7 col-md-pull-5">
                <div class="box box-default">
                    <div class="box-header">
                        <div class="box-title">
                            Заполните форму
                        </div>
                    </div>
                    <div class="box-body">
                        <form action="/company/add" method="post" role="form" class="form form-default">
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
                                <label for="phone">Телефон</label>
                                <phone
                                        name="phone"

                                ></phone>

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
                                <!-- -->



                                <script src={{ asset('js/vue.js') }}></script>

                                <div id="root">
                                    <ul id="example-1">
                                        <li v-for="item in items">
                                            <ul>
                                                <li>@{{ item.weight }}</li>
                                                <li>@{{ item.volume }}</li>
                                                <li>@{{ item.cost }}</li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <button v-on:click="addItem">Add one</button>

                                </div>


                            </div>
                            <script>
                                var root = new Vue({
                                    el: '#root',
                                    data: {
                                        items: [
                                            {weight: 100.0, volume: 0.01, cost: 45},
                                            {weight: 200.0, volume: 0.02, cost: 66}
                                        ]
                                    },
                                    methods: {
                                        addItem: function () {
                                            this.items.push({weight: 300.0, volume: 0.06, cost: 30});
                                        }
                                    }

                                });
                            </script>


                            <!-- -->

                            <label for="description">Краткое описание</label>
                            <textarea name="description" rows="3" class="form-control"
                                      v-model="value.description"></textarea>


                            <button type="submit" class="btn btn-primary">Submit</button>>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
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