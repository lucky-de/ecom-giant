
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{$data['page_title']}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{$data['page_title']}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{$data['page_title']}} List </h5>
            </div>
                                            
                



 <form method="post" action="{{ route('admin.systemsetting.update') }}" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Business Name</label>
                            <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Enter Category" value="{{$sysSetting['business_name']}}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Business Tag Line</label>
                            <input type="text" name="business_tag_line" id="business_tag_line" class="form-control" placeholder="Enter tag line" value="{{$sysSetting['business_tag_line']}}" />
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="business_description" class="form-label">Business description</label>
                            <textarea rows="10" name="business_description" id="business_description" class="form-control" placeholder="Business description">{{$sysSetting['business_description']}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-2" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Logo</label>
                        <input class="form-control" type="file" name="business_logo" id="formFile" onchange="readURLImage(this,'business_logo_preview')" >

                        @if(!empty($sysSetting['business_logo']))
                            <img id="business_logo_preview" src="{{config('constants.SYSTEM')}}{{$sysSetting['business_logo']}}" class="figure-img img-fluid rounded mt-1"  />
                        @else
                            <img id="business_logo_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />
                        @endif

                    </div>
                    </div> 

                    <div class="col-lg-5" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Business Banner</label>
                        <input class="form-control" type="file" name="business_banner" id="formFile" onchange="readURLImage(this,'business_banner_preview')" >
                        @if(!empty($sysSetting['business_banner']))
                            <img id="business_banner_preview" src="{{config('constants.SYSTEM')}}{{$sysSetting['business_banner']}}" class="figure-img img-fluid rounded mt-1"  />
                        @else
                            <img id="business_banner_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />
                        @endif

                    </div>
                    </div> 

                    <div class="col-lg-5" >
                     <div class="form-group">
                        <label for="field-1" class="control-label">Login Backupground</label>
                        <input class="form-control" type="file" name="business_login_bg" id="formFile" onchange="readURLImage(this,'business_login_bg_preview')" >
                        @if(!empty($sysSetting['business_login_bg']))
                            <img id="business_login_bg_preview" src="{{config('constants.SYSTEM')}}{{$sysSetting['business_login_bg']}}" class="figure-img img-fluid rounded mt-1"  />
                        @else
                            <img id="business_login_bg_preview" src="{{config('constants.DEFAULT_IMAGE')}}" class="figure-img img-fluid rounded mt-1 hide"  />
                        @endif

                    </div>
                    </div> 

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit"  class="btn btn-success" id="edit-btn">Update</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </form>
            </div>

    </div><!--end col-->
</div><!--end row-->
