@extends('admin::layouts.master')

@section('styles')
   <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/admin/global/plugins/bootstrap-formhelpers/dist/css/bootstrap-formhelpers.min.css') }}"/>
   <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
@stop

@section('content')

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>title</th>
            <th>author name</th>
            <th>status</th>
            <th>value</th>
            <th>type</th>
            <th>city</th>
            <th>created at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($topics as $topic)
        <tr>
            <td>{{$topic->title}}</td>
            <td>{{$topic->user->username}}</td>
            <td>
            @if($topic->status == 0)
                Pending
            @else
                Active
            @endif
            </td>
            <td>{{$topic->value}}</td>
            <td>{{$topic->post_type}}</td>
            <td>{{$topic->city}}</td>
            <td>{{$topic->created_at}}</td>
            <td>
                @if($topic->status == 0)
                    <a href="{{route('admin.topic-activate.get', ['id' => $topic->id])}}" class="btn btn-success">Activate</a>
                @else
                    <a href="{{route('admin.topic-deactivate.get', ['id' => $topic->id])}}" class="btn btn-warning">Deactivate</a>
                @endif
                <a href="{{route('admin.topic-delete.get', ['id' => $topic->id])}}" class="btn btn-danger "  onclick="return confirm('Are you sure you want to delete this topic?');">
                    Delete</a>
                    <a href="{{route('admin.topic-edit.get', ['id' => $topic->id])}}" class="btn btn-info "  >
                        View / Edit</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
@section('scripts')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

   <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
   </script>
@stop