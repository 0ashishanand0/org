$(document).ready(function(){

 var _URL = window.URL || window.webkitURL;

 $('#file').change(function () {
  var file = $(this)[0].files[0];

  img = new Image();
  var imgwidth = 0;
  var imgheight = 0;
  var minwidth = 100;
  var minheight = 100;

  img.src = _URL.createObjectURL(file);
  img.onload = function() {
   imgwidth = this.width;
   imgheight = this.height;
 
   $("#width").text(imgwidth);
   $("#height").text(imgheight);
   if(imgwidth >= minwidth && imgheight >= minheight){
 
    var formData = new FormData();
    formData.append('fileToUpload', $('#file')[0].files[0]);

    $("#response").text("Upload successfully");
  }else{
   $("#response").text("Image size must be bigger than "+minwidth+"X"+minheight);
  }
 };
 img.onerror = function() {
 
  $("#response").text("not a valid file: " + file.type);
 }

 });
});

function deleteComapny(companyId) {
    
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Comapany!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'DELETE',
                        url: 'companies/{companyId}',
                        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                        data: {'companyId': companyId},
                        beforeSend: function () {
                        },
                        success: function (data) {
                            if (data.status == 200) {
                                swal("Good job", data.message, 'success').then((willReload) => {
                                    location.reload();
                                });
                            } else {
                                swal("Poof! Something went wrong Plaese try again!", {
                                    icon: "warning",
                                });
                            }
                        },
                        error: function () {
                            swal("Poof! Something went wrong Plaese try again!", {
                                icon: "warning",
                            });
                        }
                    });


                } else {
                    swal("Poof! Your user is safe!", {
                        icon: "success",
                    });
                }
            });
}