<div class="modal fade" id="update_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="update_form" method="post" name="add_form" >
            {{csrf_field()}}
            <input type="hidden" name="update_id" id="update_id"/>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required />
                        </div>
                    </div>

                     <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="title" class="form-label">Sub Title</label>
                            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Enter Subtitle" required />
                        </div>
                    </div>

                      <div class="col-lg-4">

                        <div class="mb-3">
                            <label for="title" class="form-label">Link</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Enter Link" required />
                        </div>
                    </div>
 

                   
                     <div class="col-lg-4" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Image</label>
                        <input class="form-control" type="file" name="update_image"  id="formFile" onchange="readURLImage(this,'update_image_preview')" >
                        <img id="update_image_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

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