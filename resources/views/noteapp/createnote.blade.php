@extends('noteapp.index')

@section('content')
    
<div class="container">
    <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h1 class="text-center text-info">Note App</h1>
            <form action="/noteapp_process" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control my-5" placeholder="Enter Title">
                <div class="custom-file my-2">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <textarea name="content" id="" cols="100" rows="10" placeholder="Write note........."></textarea>
                <button type="submit" class="btn btn-primary w-100">Create Note</button>
            </form>
        </div>
    </div>
</div>
@endsection
