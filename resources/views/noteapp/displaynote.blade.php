@extends('noteapp.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped mt-5">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allnote as $note)
                        <tr>
                            <td>{{ $note->note_id }}</td>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->content }}</td>
                            <td>{{ $note->createdat }}</td>
                            <td>
                                <a href=""><button class="btn btn-danger">Delete</button></a>
                                <a href="/displaynote/edit/{{$note->note_id}}"><button class="btn btn-success ms-5">Edit</button></a>
                              <a href="/viewnote/{{$note->note_id}}"><button class="btn btn-primary ms-5">View</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection