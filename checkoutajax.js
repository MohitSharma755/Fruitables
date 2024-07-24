$(document).ready(function () {
    getdata();
});
function getdata(){
    $.ajax({
        type: "POST",
        url: "checkoutajax.php",
        data:{
            'action':"checkout"
        },
        success: function (data) {
            // console.log("hello");
            $('#checkout').html (data);
        }
    });
}