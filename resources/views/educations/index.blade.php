@extends('home')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Education Background</h4>
                        <div class="card-header-action">
                            <a href="{{ route('education.create') }}" class="btn btn-success">Create Education Background</a>
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
                                    <th>School_Year</th>
                                    <th>Educational_stage</th>
                                    <th>School_Name</th>
                                    <th>Decription</th>
                                    <th width="150px">Action</th>
                                </tr>
                                @foreach ($education as $education)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $education->school_year }}</td>
                                    <td>{{ $education->educational_stage }}</td>
                                    <td>{{ $education->school_name }}</td>
                                    <td>{{ $education->school_description }}</td>
                                    <td>
                                    <form action="{{ route('education.destroy',$education->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('education.edit',$education->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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


