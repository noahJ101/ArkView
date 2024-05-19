@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')


<section class="section">
    <div class="row">
     

      <div class="col-lg-12">
        @include('layouts._messages')
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Account Setting</h5>

            
            <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
              <div class="col-12">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="{{ $getUser->name }}" required class="form-control">

                <label class="form-label">Email</label>
                <input type="text" readonly value="{{ $getUser->email }}" class="form-control">
                
              </div>
              <div class="col-12">
                <label class="form-label">Profile Picture</label>
                <input type="file" name="profile_pic"  class="form-control">
               <img src="{{ $getUser->getProfile() }}" style="height: 100px;width: 100px;object-fit:cover;" alt="">
              </div>
              

              
                
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Update Setting</button>
              </div>
            </form>

          </div>
        </div>

       

      </div>
    </div>
  </section>  

    @endsection

    @section('script')
@endsection
