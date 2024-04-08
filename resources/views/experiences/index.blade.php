@extends('home')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Experiences</h4>
                        <div class="card-header-action">
                            <a href="{{ route('experience.create') }}" class="btn btn-success">Create Experience</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="80px">S.No</th>
                                    <th>Year</th>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                    <th>Duty</th>
                                    <th width="150px">Action</th>
                                </tr>
                                @foreach ($experience as $experiences)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $experiences->year }}</td>
                                    <td>{{ $experiences->job_title }}</td>
                                    <td>{{ $experiences->company }}</td>
                                    <td>{{ $experiences->duty }}</td>
                                    <td>
                                    <form action="{{ route('experience.destroy',$experiences->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('experience.edit',$experiences->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection