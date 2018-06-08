//alert message and gone out
$(document).ready (function(){
        $("#success-alert").fadeTo(2000, 2000).slideUp(2000, function(){
            $("#success-alert").slideUp(2000);
        });
});


// $('#delete').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget);
//     var dep_id = button.data('depid');
//     var modal = $(this);
//     modal.find('.modal-body #dep_id').val(dep_id)
// });


