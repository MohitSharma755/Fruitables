
function product(x) {
    // alert("i am here");
    // alert(x);
    var id = x;
    // var cat =y;
    // var cat=$("#cat").Value;
    $.post("cartinsert.php", {
        action: "addtocart",
        id: id,
    },function(data) {
        alert(data);
    });

};



function del(x) {
    // alert(x);
    var id = x;
    $.post("deletecart.php", {
        action: "delete",
        id: id,
        
    },function (data) {
        // alert(data);
       if(data==1){
        
            $.ajax({
                type: "POST",
                url: "cartfetch.php",
                data:{
                    'action':"showdata"
                },
                success: function (data) {
                    // alert(data);
                    $('#addtocart').html(data);
                    
                }
            });
       }
    })

};


