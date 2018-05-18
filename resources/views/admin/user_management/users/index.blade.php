@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
  @slot('title') Список пользователей @endslot
  @slot('parent') Главная @endslot
  @slot('active') Пользователи @endslot
@endcomponent

<hr>

<a href="{{route('admin.user_management.user.create')}}" class='btn btn-primary float-right'><i class="fa fa-plus-square-o"> Создать пользователя</i></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Имя</th>
      <th scope="col">e-mail</th>
      <th scope="col" class="text-right">Действие</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td class="text-right">
          <form onsubmit="if(confirm('Удалить?')){return true}else{return false}" class="" action="{{route('admin.user_management.user.destroy', $user)}}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <a class="btn btn-primary" href="{{route('admin.user_management.user.edit', $user)}}" ><i class="fa fa-edit"></i></a>

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
          {{$users->links()}}
        </ul>
      </td>
    </tr>
  </tfoot>
</table>
</div>

@endsection
