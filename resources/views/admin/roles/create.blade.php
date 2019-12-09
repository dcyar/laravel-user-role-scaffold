@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>New Role</h5>
                    <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" class="form-control" name="name" id="name" autofocus required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection