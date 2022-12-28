<div class="modal fade" id="update_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
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
                    <div class="col-lg-6">

                        <div class="mb-3">
                            <label for="title" class="form-label">Brnad</label>
                            <input type="text" name="update_title" id="update_title" class="form-control" placeholder="Enter Brnad" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="status-field" class="form-label">Status</label>
                            <select class="form-control" data-trigger name="update_status" id="update_status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
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