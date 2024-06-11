@extends('noteapp.index')

@section('content')
    <div class="container">
        <div class="col-md-9 mx-auto shadow p-2">
            <div class="col-10 mx-auto shadow">
                <p class="text-center text-primary">Title: {{$note->title}}</p>
                <p class="text-center">Content: {{$note->content}}</p>
                <p class="text-center">CreatedAt: {{$note->createdat}}</p>
                <div class="text-center">
                    <img src="/images/{{$note->user_profile}}" alt="" style="max-width: 300px; height: auto; border-radius: 50%;">
                </div>
            </div>
        </div>
    </div>
@endsection
