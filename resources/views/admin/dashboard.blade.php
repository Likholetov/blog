@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
              <a href="#" class="list-group-item list-group-item-action">Создать категорию</a>
              <a class="list-group-item list-group-item-action" href="#">
                <h4>Категория первая</h4>
                <p>Кол-во материалов</p>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="#" class="list-group-item list-group-item-action">Создать материал</a>
              <a class="list-group-item list-group-item-action" href="#">
                  <h4>Материал первый</h4>
                  <p>Категория</p>
              </a>
            </div>
        </div>
    </div>
@endsection
