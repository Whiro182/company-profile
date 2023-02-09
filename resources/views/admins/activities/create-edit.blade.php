@extends('admins.app')
@section('content')
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <strong>Activity</strong><span class="small ms-1"></span></div>
    <div class="card-body table-responsive">
        <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label" for="activity_type_id">Activity Type</label>
                    <select class="form-select" aria-label="Default select example" name="activity_type_id">
                        <option selected="">Select Activity Type</option>
                        @foreach ($act_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="title">Activity Title</label>
                    <input class="form-control" id="title" type="text" placeholder="name@example.com" name="title">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="description">Description</label>
                   <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label" for="location">location</label>
                    <input class="form-control" id="location" type="text" placeholder="" name="location">
                </div>
                <div class="row fieldContainer">
                <div class="mb-3 col-6">
                    <label class="form-label" for="date">Date</label>
                    <input class="form-control" id="date" type="date" placeholder="" name="date">
                </div>

                <div class="mb-3 col-6">
                    <label class="form-label" for="preview_img">First Image</label>
                    <input class="form-control" id="preview_img" type="file" placeholder="" name="preview_img">
                    <button class="btn btn-success mt-2" type="button" id="addBtn">Add More</button>
                </div>

                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                    <a class="btn btn-warning" href="{{ route('activities.index') }}">Cancel</a>
                </div>
            </div>

        </form>


    </div>
  </div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10;
        console.log(maxField);
        var addBtn = $('#addBtn');
        var wrapper = $('.fieldContainer');
        var fieldHTML = '<div class="mb-3 col-6"><input class="form-control" id="preview_img" type="file" placeholder="" name="file[]"><button class="btn btn-danger mt-2" type="button" id="removeBtn">Remove</button></div>';
        var x=1;
        $(addBtn).click(function () {
            if(x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });
       $(wrapper).on('click','#removeBtn', function (e) {
           e.preventDefault();
           $(this).parent('div').remove();
           x--;
       });
    });
</script>
@endsection