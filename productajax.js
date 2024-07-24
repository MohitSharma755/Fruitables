$(document).ready(function () {
    getdata();
});
function getdata(){
    $.ajax({
        type: "POST",
        url: "productfetch.php",
        data:{
            'action':"product"
        },
        success: function (data) {
            // console.log("hello");
            $('#product').html (data);
            
        }
    });
}
 


