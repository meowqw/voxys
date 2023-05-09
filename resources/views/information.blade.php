@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Заявки</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="appInformation">
                            <table class="table">
                                <caption>Информация</caption>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">text</th>
                                    <th scope="col">Удалить</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="infoItem in information">
                                    <th scope="row">{* infoItem.id *}</th>
                                    <td>{* infoItem.title *}</td>
                                    <td>{* infoItem.text *}</td>
                                    <td>
                                        <button type="button"
                                                v-on:click="deleteInformation(infoItem.id)"
                                                class="btn btn-danger">Удалить
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Оглавление</label>
                                <input v-model="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Оглавление">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Текст</label>
                                <textarea v-model="text" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" @click="addInformation()">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/adminInformation.js') }}"></script>
@endsection
