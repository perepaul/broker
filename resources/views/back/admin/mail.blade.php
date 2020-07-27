@extends('layouts.admin')

@section('content')

<section class="users-list-wrapper">
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Email</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.email.send')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="user">User</label>
                            <select name="user_ids[]" id="user" class="form-control select2" multiple>
                                <option value="">Select</option>
                                @foreach ($users->where('is_admin',0) as $user)
                                <option value="{{$user->id}}" @if(!is_null(request('user_id')) && request('user_id') == $user->id) selected @endif>{{$user->fullname}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">message</label>
                            <textarea name="message" id="message" cols="50" class="form-control" rows="40"></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-success btn-round btn-lg">SEND <i class="la la-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
