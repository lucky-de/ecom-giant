<div class="modal fade" id="update_row_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" >
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
                            <label for="title" class="form-label">Name</label>
                            <input type="text" name="update_name" id="update_name" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Business Name</label>
                            <input type="text" name="update_business_name" id="update_business_name" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Email</label>
                            <input readonly type="text" name="update_email" id="update_email" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Mobile</label>
                            <input type="text" name="update_mobile" id="update_mobile" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Phone</label>
                            <input type="text" name="update_phone" id="update_phone" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">City</label>
                            <input type="text" name="update_city" id="update_city" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">State</label>
                            <input type="text" name="update_state" id="update_state" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Zip code</label>
                            <input type="text" name="update_zip_code" id="update_zip_code" class="form-control"   />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">TIN number</label>
                            <input type="text" name="update_tin_number" id="update_tin_number" class="form-control"   />
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div>
                            <label for="status-field" class="form-label">Status</label>
                            <select class="form-control" data-trigger name="update_status" id="update_status">
                                <option value="new">New</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                     <div class="col-lg-4">
                        <div>
                            <label for="status-field" class="form-label">Product Upload Approval</label>
                            <select class="form-control" data-trigger name="business_product_approval" id="business_product_approval">
                                <option value="0">Not Allowed</option>
                                <option value="1">Allowed</option>
                             </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Address</label>
                            <input type="text" name="update_address" id="update_address" class="form-control"   />
                        </div>
                    </div>
                     <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Description of product</label>
                            <textarea name="update_about_business" id="update_about_business" class="form-control"   /></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <span id="business_license_ui"></span>
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