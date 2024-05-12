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
            
            <h5 class="card-title">Blog List
                <a href="{{ url('panel/blog/add') }}" class="btn btn-primary" style="float: right;
                margin-top: -12px;">Add New</a>
            </h5>

           
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Email Verified</th>
                  <th scope="col">Status</th>
                  <th scope="col">Created Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
                
              </tbody>
            </table>
            
           

          </div>
        </div>

       

      </div>
    </div>
  </section>
    @endsection

    @section('script')
@endsection
