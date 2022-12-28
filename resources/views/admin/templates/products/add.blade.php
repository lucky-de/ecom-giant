<div class="modal fade" id="add_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">{{$data['page_title']}} Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
             <!-- <form id="add_form" method="post" name="add_form" class="needs-validation" novalidate> -->
            <form id="add_form" method="post" name="add_form" >
            {{csrf_field()}}
                <input type="hidden" name="type" value="common" />
                <div class="modal-body">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input type="text" id="title" name="title" id="" class="form-control" placeholder="Enter Name" required />
                            <div class="invalid-feedback">Please provide a valid Product Name..</div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                             <select class="form-control selectpicker" data-live-search="true" data-style="btn-white" required id="category_id" name="category_id">
                                <option value="">Select category</option>
                                @foreach($data['categories'] as $category)
                                    <option value="{{$category['id']}}">{{$category['title']}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" id="price" name="price" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="bulk_price" class="form-label">Bulk Price</label>
                            <input type="text" id="bulk_price" name="bulk_price" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="min_quantity" class="form-label">Min quantity</label>
                            <input type="text" id="min_quantity" name="min_quantity" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="b2b_Price" class="form-label">B2B Price</label>
                            <input type="text" id="b2b_Price" name="b2b_Price" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="row">
                     <div class="col-lg-4" >
                         <div class="form-group">
                            <label for="field-1" class="control-label">Image Upload</label>
                            <input class="form-control" type="file" name="category_image"  id="formFile" onchange="readURLImage(this,'image_preview')" >
                            <img id="image_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                        </div>
                    </div>

                    <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image 2</label>
                        <input class="form-control" type="file" name="image_second"  id="formFile" onchange="readURLImage(this,'image_second_preview')" >
                        <img id="image_second_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                    </div>
                    </div>

                      <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image 3</label>
                        <input class="form-control" type="file" name="image_third"  id="formFile" onchange="readURLImage(this,'image_third_preview')" >
                        <img id="image_third_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                    </div>
                    </div>
                    </div>

                     <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" id="" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <!-- <button type="submit" onclick="add_row('save')" class="btn btn-success" id="edit-btn">Save</button> -->
                        <input type="submit" value="Save" class="btn btn-success"/>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
