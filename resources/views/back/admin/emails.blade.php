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
                    <div class="container p-1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <select name="user_id" id="user_id" class="select2 form-control filter">
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
                                    <select name="attachemnt" id="attachment" class="select2 form-control filter">
                                        <option value="">None</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group start-date-container">
                                    <label for="start">Start Date</label>
                                    <input type="text" name="start" id="start" class="form-control filter">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group end-date-container">
                                    <label for="end">End Date</label>
                                    <input type="text" name="end" id="end" class="form-control filter">
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
