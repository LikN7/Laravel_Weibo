@extends('layouts.default')
@section('title','所有用户 ')
@section('content')
<div class="offset-md-2 col-md-8">
    <h2 class="mb-4 text-center">所有用户</h2>
    <div class="list-group list-group-flush">
        @foreach($users_list as $user)
            <div class="list-group-item">
                <img class="mr-3"  src="{{ $user->gravatar() }}" alt="{{$user->name}}" width=32>
                <a href="{{route('users.show',$user)}}">
                    {{$user->name}}
                </a>
            </div>
                @can('destroy', $user)
                    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
                    </form>
            </div>
            @endcan
            @endforeach
        <div class="mt-3">
            {!! $users_list->render() !!}
        </div>
    </div>
</div>
@stop
