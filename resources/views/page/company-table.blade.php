@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Компании
            <small>адрессный справочник</small>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Список компаний</h3>
            </div>
            <div class="box-body">
                <div class="dataTables_wrapper dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-hove">
                                <thead>
                                    <td>Название</td>
                                    <td>Адрес</td>
                                    <td>ИНН</td>
                                    <td>Сайт</td>
                                    <td>Email</td>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td><a href="{{ route('company.view', $company) }}">{{ $company->short_name }}</a></td>
                                        <td>{{ $company->address }}</td>
                                        <td>{{ $company->inn }}</td>
                                        <td>{{ $company->web }}</td>
                                        <td>{{ $company->email }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection