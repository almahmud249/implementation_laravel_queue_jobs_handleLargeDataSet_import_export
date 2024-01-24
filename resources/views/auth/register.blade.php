@extends('frontend.master')

@section('content')
<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">USER <span class="tx-info tx-normal">SIGNIN</span></div>
      <div class="tx-center mg-b-60">wellcome</div>

      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your name">
      </div><!-- form-group -->
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter your email">
      </div><!-- form-group -->
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter your password">
      </div><!-- form-group -->
      <div class="form-group">
        <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Select Your Role</label>
        <div class="row row-xs">
          <div class="col-sm-12">
            <select class="form-control select2" data-placeholder="Month">
              <option value="1">User</option>
              <option value="2">Admin</option>
              <option value="3">Super Admin</option>
            </select>
          </div><!-- col-4 -->
         
        </div><!-- row -->
      </div><!-- form-group -->
      <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
      <button type="submit" class="btn btn-info btn-block">Sign Up</button>

      <div class="mg-t-40 tx-center">Already have an account? <a href="{{ route('user.login') }}" class="tx-info">Sign In</a></div>
    </div><!-- login-wrapper -->
  </div>
@endsection