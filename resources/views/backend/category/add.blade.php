@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')


<section class="section">
    <div class="row">
     

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New Category</h5>

            
            <form class="row g-3" action="" method="post">
                {{csrf_field()}}
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Name *</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control" id="inputNanme4">
                <div style="color: red">{{ $errors->first('name') }}</div>
              </div>


              <div class="col-12">
                <label for="inputNanme4" class="form-label">Title *</label>
                <input type="text" name="title" value="{{ old('title') }}" required class="form-control" id="inputNanme4">
                <div style="color: red">{{ $errors->first('title') }}</div>
              </div>
             
              <hr>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Title *</label>
                <input type="text" name="meta_title" value="{{ old('meta_title') }}" required class="form-control" id="inputNanme4">
                <div style="color: red">{{ $errors->first('meta_title') }}</div>
              </div>

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Description</label>
                <textarea class="form-control" name="meta_description" value="{{ old('meta_description') }}" class="form-control" id="inputNanme4"></textarea>
                <div style="color: red">{{ $errors->first('meta_description') }}</div>
              </div>

              

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control" id="inputNanme4">
                <div style="color: red">{{ $errors->first('meta_keywords') }}</div>
              </div>

              <hr>

              <div class="col-12">
                <label for="inputPassword4" class="form-label">Status *</label>
                <select class="form-control" name="status"> 
                    <option  value="1">Active</option>
                    <option  value="0">Inactive</option>

                </select>
              </div>
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
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