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
                <h5 class="card-title mb-0">{{$data['page_title']}} List</h5>
            </div>

            <div class="card-body">
                <table id="dataTables_table_init" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                        <th data-ordering="false">Order No</th>
                        <th data-ordering="false">Email</th>
                        <th data-ordering="false">Total Price</th>
                        <th data-ordering="false">Created Date</th>
                        <th data-ordering="false">Status</th>
                        <th class="sort" data-sort="action">Action</th>
                    </tr>
                    </thead>
                    <tbody id="TableRecordList">


                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
