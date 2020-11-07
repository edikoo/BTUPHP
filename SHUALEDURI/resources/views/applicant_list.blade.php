@extends('home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">surname</th>
                            <th scope="col">position</th>
                            <th scope="col">phone</th>
                            <th scope="col">status</th>
                            <th scope="col">edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applicants as $applicant)
                            <tr>
                                <th scope="row">{{ $applicant->id }}</th>
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->surname }}</td>
                                <td>{{ $applicant->position }}</td>
                                <td>{{ $applicant->phone }}</td>
                                <td>{!! $applicant->is_hired == 0 ? '<a class="btn btn-danger" href="'.route('hire', $applicant->id).'">'.$applicant->hired.'</a>' : '<button class="btn btn-success">'.$applicant->hired.'</button>' !!}</td>
                                <td><a href="{{ route('edit', $applicant->id) }}" class="btn btn-warning">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
