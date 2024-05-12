@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')


<section class="section">
    <div class="row">
     

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add New Blog Post</h5>

            
            <form class="row g-3" action="" method="post">
                {{csrf_field()}}
      
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Title</label>
                <input type="text" name="title"  required class="form-control" id="inputEmail4">
              </div>

              <div class="col-12">
                <label class="form-label">Category</label>
                <select class="form-control" name="category_id">
                <option value="">Select Category</option>
                </select>
              </div>

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Image</label>
                <input type="file" name="title"  class="form-control" name="image_file" required>
              </div>

              <hr>

              

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


              <div class="col-12">
                <label for="inputPassword4" class="form-label">Status</label>
                <select class="form-control" name="status"> 
                    <option {{ old('status') == 1 ? 'selected' : ''}} value="1">Active</option>
                    <option {{ old('status') == 0 ? 'selected' : ''}} value="0">Inactive</option>

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
