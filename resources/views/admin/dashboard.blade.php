@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <h5><span class="badge badge-primary">Категорий {{$count_categories}}</span></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <h5><span class="badge badge-primary">Материалов {{$count_articles}}</span></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <h5><span class="badge badge-primary">Посетителей 0</span></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex justify-content-center">
                    <h5><span class="badge badge-primary">Сегодня 0</span></h5>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
              <div class="list-group">
              <a href="{{route('admin.category.create')}}" class="list-group-item list-group-item-action">Создать категорию</a>
              @foreach ($categories as $category)
                <a class="list-group-item list-group-item-action" href="{{route('admin.category.edit', $category)}}">
                  <h5>{{$category->title}}</h5>
                  {{$category->articles()->count()}}
                </a>
              @endforeach
              </div>
            </div>
            <div class="col-sm-6">
              <div class="list-group">
              <a href="{{route('admin.article.create')}}" class="list-group-item list-group-item-action">Создать материал</a>
              @foreach ($articles as $article)
                <a class="list-group-item list-group-item-action" href="{{route('admin.article.edit', $article)}}">
                  <h5>{{$article->title}}</h5>
                  {{$article->categories()->pluck('title')->implode(', ')}}
                </a>
              @endforeach
              </div>
            </div>
        </div>
    </div>
@endsection
