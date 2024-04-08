@extends('home')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List of MyBlog</h4>
                        <div class="card-header-action">
                            <a href="{{ route('myblog.create') }}" class="btn btn-success">Create New MyBlog</a>
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
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Content</th>
                                    <th width="180px">Action</th>
                                </tr>
                                @foreach ($myblog as $myblog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                        @if($myblog->avatar)
                                            <td>
                                                <img src="{{ asset('storage/' . $myblog->avatar) }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                            </td>
                                            @else
                                            <td>
                                                <img src="{{ asset('assets/img/user.png') }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-box">
                                            </td>
                                        @endif
                                    <td>{{ $myblog->caption }}</td>
                                    <td>{{ $myblog->date }}</td>
                                    <td>{{ $myblog->author }}</td>
                                    <td>{{ $myblog->content }}</td>
                                    <td>
                                    <form action="{{ route('myblog.destroy',$myblog->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('myblog.edit',$myblog->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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


