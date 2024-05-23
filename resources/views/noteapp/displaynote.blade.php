@extends('noteapp.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped mt-5">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allnote as $note)
                        <tr>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->content }}</td>
                            <td>{{ $note->createdat }}</td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-success ms-5">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection