@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">City</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/city/create') }}" class="btn btn-primary btn-xs" title="Add New City"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> City Id </th><th> City </th><th> Country Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($city as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->city_id }}</td><td>{{ $item->city }}</td><td>{{ $item->country_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/city/' . $item->id) }}" class="btn btn-success btn-xs" title="View City"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/city/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit City"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/city', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete City" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete City',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $city->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection