@extends('admin.layouts.master-layout')

@section('styles')

@endsection

    @section('content')

        @include('admin.templates.orders.list')

        @include('admin.templates.orders.view')

    @endsection

@section('scripts')



<script type="text/javascript">

$().ready(function() {

    $("#add_form").validate({
        rules: {
            title: "required"
        },
        messages: {
            title: {
                required: "Please enter a title ",
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
  var API_URL = "{{ route('admin.orders.list') }}";
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

function get_row(id)
{
    $('#view_email').val('');
    $('#view_status').val('');
    $('#view_total_price').val('');
    $('#view_row_modal .modal-body .row .row').html('');

    var API_URL = "{{route('admin.orders.get')}}";
    $.ajax({
        url: API_URL,
        type: 'POST',
       data: {'id': id,'_token': '{!! csrf_token() !!}'},
        async: false,
        dataType: 'json',
        success: function(data)
        {
            $('#view_email').val(data["data"]["email"]);
            $('#view_status').val(data["data"]["status"]);
            $('#view_total_price').val('$' + data["data"]["total"]);

            $.each(data.data.product, function(key, value) {
                $('#view_row_modal .modal-body .row .row').append('<div class="col-lg-3">\n' +
                    '<div class="mb-3">\n' +
                    '<label for="items" class="form-label">Product ID</label>\n' +
                    '<input type="text" class="form-control" value="' + value.product_id + '" disabled/>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-lg-6">\n' +
                    '<div class="mb-3">\n' +
                    '<label for="items" class="form-label">Name</label>\n' +
                    '<input type="text" class="form-control" value="' + value.detail.title + '" disabled/>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '<div class="col-lg-3">\n' +
                    '<div class="mb-3">\n' +
                    '<label for="items" class="form-label">Subtotal</label>\n' +
                    '<input type="text" class="form-control" value="' + value.total_price + '" disabled/>\n' +
                    '</div>\n' +
                    '</div>');
            });

            $('#view_row_modal').modal("show");
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
         formData.append('update_image', $('input[type=file]')[0].files[0]);

         var API_URL = "{{ route('admin.products.update') }}";
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
        var API_URL = "{{ route('admin.products.delete') }}";
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
