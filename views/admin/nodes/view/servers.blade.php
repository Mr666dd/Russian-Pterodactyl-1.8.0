@extends('layouts.admin')

@section('title')
    {{ $node->name }}: Сервера
@endsection

@section('content-header')
    <h1>{{ $node->name }}<small>Все сервера, которые созданны на этой ноде.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Администрация</a></li>
        <li><a href="{{ route('admin.nodes') }}">Ноды</a></li>
        <li><a href="{{ route('admin.nodes.view', $node->id) }}">{{ $node->name }}</a></li>
        <li class="active">Сервера</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="nav-tabs-custom nav-tabs-floating">
            <ul class="nav nav-tabs">
                <li><a href="{{ route('admin.nodes.view', $node->id) }}">Информация</a></li>
                <li><a href="{{ route('admin.nodes.view.settings', $node->id) }}">Настройки</a></li>
                <li><a href="{{ route('admin.nodes.view.configuration', $node->id) }}">Конфигурация</a></li>
                <li><a href="{{ route('admin.nodes.view.allocation', $node->id) }}">Расположения</a></li>
                <li class="active"><a href="{{ route('admin.nodes.view.servers', $node->id) }}">Сервера</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Менеджер серверов</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Имя сервера</th>
                        <th>Владелец</th>
                        <th>Память</th>
                        <th>CPU</th>
                        <th>Место на диске</th>
                        <th>Яйцо</th>
                    </tr>
                    @foreach($servers as $server)
                        <tr data-server="{{ $server->uuid }}">
                            <td><code>{{ $server->uuidShort }}</code></td>
                            <td><a href="{{ route('admin.servers.view', $server->id) }}">{{ $server->name }}</a></td>
                            <td><a href="{{ route('admin.users.view', $server->owner_id) }}">{{ $server->user->username }}</a></td>
                            <td><code title="{{ $server->memory }}">{{ $server->memory }}МБ</code></td>
                            <td><code title="{{ $server->cpu }}">{{ $server->cpu }}%</code></td>
                            <td><code title="{{ $server->disk }}">{{ round($server->disk/1024, 2, PHP_ROUND_HALF_DOWN) }}ГБ</code></td>
                            <td>{{ $server->egg->name }}</td>
                        </tr>
                    @endforeach
                </table>
                @if($servers->hasPages())
                    <div class="box-footer with-border">
                        <div class="col-md-12 text-center">{!! $servers->render() !!}</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
