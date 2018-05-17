@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
  @slot('title') Список новостей @endslot
  @slot('parent') Главная @endslot
  @slot('active') Новости @endslot
@endcomponent

<hr>

<a href="{{route('admin.article.create')}}" class='btn btn-primary float-right'><i class="fa fa-plus-square-o"> Создать новость</i></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Публикация</th>
      <th scope="col" class="text-right">Действие</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($articles as $article)
      <tr>
        <td>{{$article->title}}</td>
        <td>{{$article->published}}</td>
        <td class="text-right">
          <form onsubmit="if(confirm('Удалить?')){return true}else{return false}" class="" action="{{route('admin.article.destroy', $article)}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}

            <a class="btn btn-primary" href="{{route('admin.article.edit', $article)}}" ><i class="fa fa-edit"></i></a>

            <button type="submit" class="btn btn-primary"><i class="fa fa-trash-o"></i></button>
          </form>

        </td>
      </tr>
    @empty
      <tr>
        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
      </tr>
    @endforelse
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3">
        <ul class="pagination float-right">
          {{$articles->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</table>
</div>

@endsection
