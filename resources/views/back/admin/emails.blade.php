@extends('layouts.admin')

@section('content')

<section class="users-list-wrapper">
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Email history</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <select name="user_id" id="user" class="select2 form-control">
                                        <option value="">Select User</option>
                                        @foreach($users->where('is_admin',0) as $user)
                                            <option value="{{$user->id}}">{{$user->fullname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachemnt">Has attachment</label>
                                    <select name="attachemnt" id="attachemnt" class="select2 form-control">
                                        <option value="">None</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="start">Start Date</label>
                                    <input type="date" name="start" id="start" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="end">End Date</label>
                                    <input type="date" name="end" id="end" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="email-history">
                            <thead>
                                <tr>
                                    <th>To</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Attachments?</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
