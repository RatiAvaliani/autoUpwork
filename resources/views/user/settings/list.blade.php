@extends('user.base')

@section('title', 'Settings')

@section('page')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h4 class="text-center">Change Email</h4>
            </div>
            <div class="form-group">
                <label for="change-email-address">Email Address</label>
                <input type="email" class="form-control" id="change-email-address" placeholder="{{ Auth::User()->email }}">
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 mb-2">
                    <h4 class="text-center">Change Password</h4>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="existing-password">Existing Password</label>
                        <input type="password" class="form-control" id="existing-password" placeholder="***********">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" class="form-control" id="new-password" placeholder="***********">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="rep-password">Rep Password</label>
                        <input type="password" class="form-control" id="rep-password" placeholder="***********">
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-2">
                <div class="col-lg-12 mb-2">
                    <h4 class="text-center">Upwork Api</h4>
                </div>
                <div class="form-group col-lg-10">
                    <label for="upwork-api-key">Upwork Api Key</label>
                    <input type="text" class="form-control" id="upwork-api-key">
                </div>
                <div class="form-group col-lg-2">
                    <label for="upwork-request-limit">Upwork Request Limit</label>
                    <input type="text" class="form-control" id="upwork-request-limit">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
       </div>
    </div>
@stop
