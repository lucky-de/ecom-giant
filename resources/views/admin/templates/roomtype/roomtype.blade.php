@extends('admin.layouts.master-layout')

@section('styles')

@endsection

    @section('content')
            
        @include('admin.templates.roomtype.list')


        @include('admin.templates.roomtype.add')
        @include('admin.templates.roomtype.update')

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
  var API_URL = "{{ route('admin.roomtype.list') }}";
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
     var API_URL = "{{ route('admin.roomtype.store') }}";

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
     var API_URL = "{{route('admin.roomtype.get')}}";
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
                 $('#update_title').val(data["data"]["title"]);
                 $('#update_sequence').val(data["data"]["sequence"]);
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
         var API_URL = "{{ route('admin.roomtype.update') }}";
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
        var API_URL = "{{ route('admin.roomtype.delete') }}";
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