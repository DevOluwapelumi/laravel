@extends('noteapp.index')

@section('content')
    
<div class="container">
    <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <form action="" method="post">
                <input type="text" name="title">
                <textarea name="content" id="" cols="80" rows="10"></textarea>
                <button type="submit" class="btn btn-primary w-100">Create Note</button>
            </form>
        </div>
    </div>
</div>
@endsection
