<div class="modal fade" id="update_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">{{$data['page_title']}} Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="update_form" method="post" name="add_form" >
            {{csrf_field()}}
            <input type="hidden" name="update_id" id="update_id"/>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="title" class="form-label">Product Name</label>
                            <input type="text" name="update_title" id="update_title" class="form-control" placeholder="Enter Category" required />
                        </div>
                    </div>

                     <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                             <select class="form-control selectpicker" data-live-search="true" data-style="btn-white" required id="update_category_id" name="update_category_id">
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
                            <input type="text" id="update_price" name="update_price" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="bulk_price" class="form-label">Bulk Price</label>
                            <input type="text" id="update_bulk_price" name="update_bulk_price" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="min_quantity" class="form-label">Min quantity</label>
                            <input type="text" id="update_min_quantity" name="update_min_quantity" id="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="b2b_Price" class="form-label">B2B Price</label>
                            <input type="text" id="update_b2b_Price" name="update_b2b_Price" id="" class="form-control" />
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="status-field" class="form-label">Status</label>
                            <select class="form-control" data-trigger name="update_status" id="update_status">
                                <option value="">Select Status</option>
                                <option value="pending">Pending</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                     <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image 1</label>
                        <input class="form-control" type="file" name="update_image"  id="formFile" onchange="readURLImage(this,'update_image_preview')" >
                        <img id="update_image_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                    </div>
                    </div>

                    <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image 2</label>
                        <input class="form-control" type="file" name="update_image_second"  id="formFile" onchange="readURLImage(this,'update_image_second_preview')" >
                        <img id="update_image_second_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                    </div>
                    </div>

                    <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image 3</label>
                        <input class="form-control" type="file" name="update_image_third"  id="formFile" onchange="readURLImage(this,'update_image_third_preview')" >
                        <img id="update_image_third_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

                    </div>
                    </div>

                    </div>

                      <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="update_description" name="update_description" id="" class="form-control" rows="5"></textarea>
                        </div>
                    </div>


                </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" onclick="update_row()" class="btn btn-success" id="edit-btn">Update</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
