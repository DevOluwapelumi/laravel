@extends('student.index')

@section('content')
<div class="container">
    {[id(Auth::user())]}
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped mt-5">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>PhoneNo</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Created At</th>
                        <th class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->full_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td>
                                <a href="/displaystudent/delete/{{$student->student_id}}"><button class="btn btn-danger">Delete</button></a>
                                <a href="/displaystudent/edit/{{$student->student_id}}"><button class="btn btn-success ms-5">Edit</button></a>
                              <a href="/viewstudent/{{$student->student_id}}"><button class="btn btn-primary ms-5">View</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection