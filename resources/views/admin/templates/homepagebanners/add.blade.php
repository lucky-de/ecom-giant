<div class="modal fade" id="add_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"> Add</h5>
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
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title" id="" class="form-control" placeholder="Enter Name" required />
                            <div class="invalid-feedback">Please provide a valid Product Name..</div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Subtitle</label>
                             <input type="text" id="subtitle" name="subtitle" id="" class="form-control" placeholder="Enter Subtitle" required />


                        </div>
                    </div>

                      <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                             <input type="text" id="link" name="link" id="" class="form-control" placeholder="Enter link" required />


                        </div>
                    </div>

                    

                    
                    
                     <div class="col-lg-4" >
                         <div class="form-group">
                            <label for="field-1" class="control-label">Image Upload</label>
                            <input class="form-control" type="file" name="banner_image"  id="formFile" onchange="readURLImage(this,'image_preview')" >
                            <img id="image_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />

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