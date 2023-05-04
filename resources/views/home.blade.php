@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="app">
                            <table class="table">
                                <caption>Записи</caption>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Телефон</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">Время</th>
                                    <th scope="col">Удалить</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="meeting in meetings">
                                    <th scope="row">{* meeting.id *}</th>
                                    <td>{* meeting.client.name *}</td>
                                    <td>{* meeting.client.phone *}</td>
                                    <td>{* meeting.date *}</td>
                                    <td>{* meeting.time *}</td>
                                    <td>
                                        <button type="button"
                                                v-on:click="deleteMeeting(meeting.id)"
                                                class="btn btn-danger">Удалить
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
