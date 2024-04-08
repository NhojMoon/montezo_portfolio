@extends('home')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of Work's</h4>
                        <div class="card-header-action">
                            <a href="{{ route('work.create') }}" class="btn btn-success">Create New Work</a>
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Type</th>
                                    <th width="150px">Action</th>
                                </tr>
                                @foreach ($work as $works)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                        @if($works->image)
                                            <td>
                                                <img src="{{ asset('storage/' . $works->image) }}" alt="image" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                            </td>
                                            @else
                                            <td>
                                                <img src="{{ asset('assets/img/user.png') }}" alt="image" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                            </td>
                                        @endif
                                    <td>{{ $works->name }}</td>
                                    <td>{{ $works->link }}</td>
                                    <td>{{ $works->type }}</td>
                                    <td>
                                    <form action="{{ route('work.destroy',$works->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('work.edit',$works->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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