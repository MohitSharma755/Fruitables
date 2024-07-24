// alert("worikng");
$(document).ready(function () {
    getdata();
});

function getdata()
{
    $.ajax({
        type: "POST",
        url: "cartfetch.php",
        data:{
            'action':"showdata",
        },
        success: function (data) {
            // alert(data);
            $('#addtocart').html(data);
            
        }
    });
}


