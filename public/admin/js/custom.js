// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();
//   });


$(document).ready(function () {
    $('.summernote').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
           ['font', ['strikethrough', 'superscript', 'subscript', 'fontsize', 'fontname']],
           ['color', ['forecolor', 'backcolor']],
           ['para', ['ul', 'ol', 'paragraph']],
           ['height', ['height']],
           ['insert', ['link', 'picture', 'video', 'table', 'hr']],
           ['view', ['fullscreen', 'codeview']],
           ['help', ['help']],
            ['custom', ['rupeeSymbol']], // Add your custom button
        ],
        buttons: {
            rupeeSymbol: RupeeSymbolButton // Define the behavior for the custom button
        },
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '36','38','40','42','44','46',
         '48','50' ,'52', '54','56' ,'58', '60','62' ,'64', '66','68' ,'70', '72','74' ,'76', '78','80' ,
         '82', '84','86' ,'88', '90', '92', '94'] ,// Add font sizes as needed
         lineHeights: ['1', '1.15', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5', '5.5', 
         '6', '6.5','7' ,'7.5','8' ,'8.0' ,'8.5' ,'9'] // Add line heights as needed

    });

     // Define the behavior for the custom button
     function RupeeSymbolButton(context) {
        var ui = $.summernote.ui;

        // create button
        var button = ui.button({
            contents: '₹',
            tooltip: 'Rupee Symbol',
            click: function () {
                // Insert ₹ at the current cursor position
                context.invoke('editor.insertText', '₹');
            }
        });

        return button.render();   // return button as jquery object
    }

    // $('.summernote').summernote();
    $('[data-toggle="tooltip"]').tooltip();
    $('.select2').select2()

    //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#current_pwd').keyup(function () {
        var current_pwd = $(this).val();
        // alert(current_pwd);
        $.ajax({
            type: 'post',
            url: 'check-current-password',
            data: { current_pwd: current_pwd },
            success: function (resp) {
                if (resp == "true") {
                    $('#verifyCurrentPassword').html('Current password is correct');
                } else {
                    $('#verifyCurrentPassword').html('Current password is incorrect!');
                }
            }, error: function () {
                console.log('error', resp);
            }
        });
    });

    // create custom function to update the status
    function updateStatus($status, $id ,$url ,$module) {
            $.ajax({
                type: 'post',
                url: $url,
                data: { status: $status, id: $id },
                success: function (response) {
                    console.log(response);
                    if (response['status'] == 1) {
                        $('#'+$module+'-' + $id).html('<i class="fa-solid fa-toggle-on status"  data-toggle="tooltip" title="Active" style="color:#007bff"' + $module+'_status="Active"></i>');
                    } 
                    else if (response['status'] == 0) {
                        $('#'+$module+'-' + $id).html('<i class="fa-solid fa-toggle-off status"  data-toggle="tooltip" title="Inactive" style="color:grey"'  + $module+'_status="Inactive"></i>');
                    }
                }, error: function (response) {
                    console.log('error' + response);
                }
            });
    }
    // update subadmin status
    $(document).on("click", ".updateSubadminStatus", function () {
        var status = $(this).find(".status").attr("subadmin_status");
        var subadmin_id = $(this).attr('subadmin_id');
        updateStatus(status ,subadmin_id , 'update-subadmin-status' ,'subadmin');
    });


     // update CMS page status
     $(document).on("click", ".updateCmsPageStatus", function () {
        var status = $(this).find(".status").attr("page_status");
        var page_id = $(this).attr('page_id');
        updateStatus( status ,page_id , 'update-cms-page-status' ,'page');
    });




    //delete with sweet alert

        $(document).on("click", ".confirmDelete", function () {

        var module = $(this).attr("module");
        var module_id = $(this).attr("module_id");
        // console.log('module :' +module , 'id:'+ module_id , 'route will be : '+'http://127.0.0.1:8000/admin' + module+'/delete/'+module_id);
        // var route = window.location.href=module+'/delete/'+module_id;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3f6791',
            cancelButtonColor: '#e74c3c',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              window.location.href='http://127.0.0.1:8000/admin/'+module+'/delete/'+module_id;
            }
          });

    });



    // update Category page status
    $(document).on("click", ".updateCategoryStatus", function () {
        var status = $(this).find(".status").attr("category_status");
        var category_id = $(this).attr('category_id');
        updateStatus( status ,category_id , 'update-category-status' ,'category');
    });


     // update Products status
     $(document).on("click", ".updateProductStatus", function () {
        var status = $(this).find(".status").attr("product_status");
        var product_id = $(this).attr('product_id');
        updateStatus( status ,product_id , 'update-product-status' ,'product');
    });

       // update Products status
       $(document).on("click", ".updateFamilyColorStatus", function () {
        var status = $(this).find(".status").attr("family_colors_status");
        var family_colors_id = $(this).attr('family_colors_id');
        updateStatus( status ,family_colors_id , 'update-family-colors-status' ,'family_colors');
    });


    // update Products Attribute status
    $(document).on("click", ".updateProductAttrStatus", function () {
        var status = $(this).find(".status").attr("product_attr_status");
        var productAttr_id = $(this).attr('productAttr_id');
        // var url =window.location.origin+'/admin/update-product-attribute-status';
        // updateStatus( status ,productAttr_id , url ,'productAttr');

        // alert(productAttr_id);
        $.ajax({
            type: 'post',
            url: 'http://127.0.0.1:8000/admin/update-product-attribute-status',
            data: { status: status, productAttr_id: productAttr_id },
            success: function (resp) {
                if (resp['status'] == 1) {
                    $('#productAttr-' + productAttr_id).html('<i class="fa-solid fa-toggle-on status"  data-toggle="tooltip" title="Active" style="color:#007bff"  productAttr_status="Active"></i>');
                } else if (resp['status'] == 0) {
                    $('#productAttr-' + productAttr_id).html('<i class="fa-solid fa-toggle-off status"  data-toggle="tooltip" title="Inactive" style="color:grey"  productAttr_status="Inactive"></i>');
                }
            }, error: function () {
                console.log('error' + resp);
            }
        });
    });


    // update Brand status
    $(document).on("click", ".updateBrandStatus", function () {
        var status = $(this).find(".status").attr("brand_status");
        var brand_id = $(this).attr('brand_id');
        updateStatus( status ,brand_id , 'update-brand-status' ,'brand');
    });


     // update Banner status
     $(document).on("click", ".updateBannerStatus", function () {
        var status = $(this).find(".status").attr("banner_status");
        var banner_id = $(this).attr('banner_id');
        updateStatus( status ,banner_id , 'update-banner-status' ,'banner');
    });




    // add remove fields dynamiclly

    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div  class="d-flex form-group col-12"><input type="text"  class="form-control mr-2" name="size[]" placeholder="Enter size" id="size" style="width: 120px" value=""/><input type="text"  class="form-control mr-2" name="sku[]" placeholder="Enter SKU" id="sku" style="width: 120px" value=""/> <input type="text"  class="form-control mr-2" name="price[]" placeholder="Enter price" id="price" style="width: 120px" value=""/> <input type="text"  class="form-control mr-2" name="stock[]" placeholder="Enter stock" id="stock" style="width: 120px" value=""/> <a href="javascript:void(0);" class="remove_button  mt-2"> <span class = "text-danger"> <i class="fa-solid fa-circle-minus"></i></span></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });

    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });


});
