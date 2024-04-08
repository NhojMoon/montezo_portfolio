@extends('home')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Skills</h4>
                        <div class="card-header-action">
                            <a href="{{ route('skills.create') }}" class="btn btn-success">Create Skill</a>
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
                                    <th>Skill_Name</th>
                                    <th>Percent</th>
                                    <th width="150px">Action</th>
                                </tr>
                                @foreach ($skill as $skills)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $skills->language_name }}</td>
                                    <td>{{ $skills->percent }}</td>
                                    <td>
                                    <form action="{{ route('skills.destroy',$skills->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('skills.edit',$skills->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa-regular fa-pen-to-square"></i></button>
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