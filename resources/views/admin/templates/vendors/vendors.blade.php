@extends('admin.layouts.master-layout')

@section('styles')

@endsection

    @section('content')
            
        @include('admin.templates.vendors.list')


        @include('admin.templates.vendors.add')
        @include('admin.templates.vendors.update')

    @endsection

@section('scripts')



<script type="text/javascript">

$().ready(function() {

    $("#add_form").validate({
        rules: {
            floor_id: "required",
            room_type: "required",
            room_no: "required"

        },
        messages: {
            floor_id: {
                required: "Please select floor ",
            },
            room_type: {
                required: "Please select room type ",
            },
            room_no: {
                required: "Please enter room no ",
            }

        },
         submitHandler: function(form) {
            add_row(form);
        }
    });
});

get_records()
function get_records()
{
  var API_URL = "{{ route('admin.vendors.list') }}";
    $.ajax({
     url: API_URL,
     method: 'post',
     data: {},
     dataType: 'json',
     success: function(response)
     {
        $('#dataTables_table_init').DataTable().destroy();
        $('#TableRecordList').html(response["html"]);
        $('#dataTables_table_init').DataTable();
     }
  });
}

function add_row(form)
{
     //var form = $('#add_form')[0]; 
     var formData = new FormData(form);
     var API_URL = "{{ route('admin.vendors.store') }}";

        $.ajax({
            url: API_URL,
             type: 'POST',
             data: formData,
             async: false,
             dataType: 'json',
             contentType: false, 
             processData: false, 
             success: function (data)
             {
               if (data["status"] == 1){
                    $('#add_form')[0].reset();
                    $('#add_row_modal').modal('hide');


                    success_notification(data['msg'])
                    get_records();
               }else{
                    error_notification(data['msg'])
               }
            },
            error: function (data) {
                alert('server unavailable');
            }
        });
  }

    function get_row(id)
    {
     var API_URL = "{{route('admin.vendors.get')}}";
        $.ajax({
            url: API_URL,
            type: 'POST',
           data: {'id': id,'_token': '{!! csrf_token() !!}'},
            async: false,
            dataType: 'json',
            success: function(data) 
            {
              if (data["status"] == 1){
                 $('#update_id').val(data["data"]["id"]);

                 $('#update_name').val(data["data"]["name"]);
                 $('#update_business_name').val(data["data"]["business_name"]);

                 $('#update_email').val(data["data"]["email"]);
                 $('#update_mobile').val(data["data"]["mobile"]);
                 $('#update_phone').val(data["data"]["phone"]);
                 $('#update_city').val(data["data"]["city"]);
                 $('#update_state').val(data["data"]["state"]);
                 $('#update_zip_code').val(data["data"]["zip_code"]);
                 $('#update_tin_number').val(data["data"]["tin_number"]);
                 $('#business_product_approval').val(data["data"]["business_product_approval"]);
                 

                 $('#update_address').val(data["data"]["address"]);
                 $('#update_about_business').val(data["data"]["about_business"]);

                if(data["data"]["image_url"] != null){
                    $('#business_license_ui').html('<h5> <a target="_blank" href="'+data["data"]["image_url"]+'"><i class=" ri-article-line"></i>View Business License</a></h5');
                } else{
                    $('#business_license_ui').html('No Business License Upload</a>');
                }


                 $('#update_status').val(data["data"]["status"]);
                 $('#GetTypeCheckBox').html(data["html"]);
                 $('#update_row_modal').modal("show");
               }
            },
            error: function (data) {
                alert('server unavailable');
            }
        });
    }

     function update_row()
     {
         var form = $('#update_form')[0]; // You need to use standard javascript object here
         var formData = new FormData(form);
         var API_URL = "{{ route('admin.vendors.update') }}";
            $.ajax({
                url: API_URL,
                 type: 'POST',
                 data: formData,
                 async: false,
                 dataType: 'json',
                 contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                 processData: false, // NEEDED, DON'T OMIT THIS
                success: function (data)
                {
                    if (data["status"] == 1){
                        success_notification(data['msg'])
                        $('#update_row_modal').modal("hide");
                        get_records();
                   }else{
                        error_notification(data['msg'])
                   }

                },
                error: function (data) {
                    alert('server unavailable');
                }
            });
      }

      function delete_row(update_id) {

      Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: !0,
    confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
    cancelButtonClass: "btn btn-danger w-xs mt-2",
    confirmButtonText: "Yes, delete it!",
    buttonsStyling: !1,
}).then(function(t) {
    if(t.value == true){ 
        var API_URL = "{{ route('admin.vendors.delete') }}";
        $.ajax({
            type: "POST",
            url: API_URL,
            data: {'update_id': update_id,'_token': '{!! csrf_token() !!}'},
            dataType: 'json',
            success: function(data) {
                if (data["status"] == 1){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success",
                        confirmButtonClass: "btn btn-primary w-xs mt-2",
                        buttonsStyling: !1
                    }).then(function() {
                        get_records();
                    });

                }

                
            },
            error: function() {
                alert('error');
            }
        })
    }

})


            
      }
    
</script>


@endsection