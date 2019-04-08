@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumbs')
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i>
        </a>

    </div>
@endsection()