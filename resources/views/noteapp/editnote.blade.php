@extends('noteapp.index')

@section('content')
    
<div class="container">
    <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h1 class="text-center text-info">Note App</h1>
            <form action="/noteapp_process" method="post">
                @csrf
                <input type="text" name="title" class="form-control my-5" placeholder="Enter Title">
                <textarea name="content" id="" cols="100" rows="10" placeholder="Write note........."></textarea>
                <button type="submit" class="btn btn-primary w-100">Create Note</button>
            </form>
        </div>
    </div>
</div>
@endsection
