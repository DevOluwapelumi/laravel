@extends("nav")

@section("main")

    <h4 class="bg-danger text-center">Hello Oluwapelumi, Welcome to Laravel Class!</h4>
    {{-- <p><b>Name: </b>{{$name}}</p>
    <p><b>School:   </b>{{$school}}</p> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="text-center mb-4">Register</h4> <hr>
                        <form action="/register" method="POST">
                            @csrf
                            <div>
                                @if(isset($message))
                                <sapn class="alert alert-{{$status ? 'success' : 'danger'}}">{{$message}}</sapn>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="userName">UserName:</label>
                                <input type="text" class="form-control" id="userName" name="userName" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Password:</label>
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-dark btn-block w-100 mt-3" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection