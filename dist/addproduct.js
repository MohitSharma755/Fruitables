// alert("i m product");


$(document).ready(function () {
    document.getElementById("addproductbtn").addEventListener('click', function () {
        var product = $("#pr").val();
        alert(product);
        var description = $("#Des").val();
        var quantity = $("#kg").val();
        var rate = $("#rate").val();
        alert(description); 
        alert(quantity);
        alert(rate);
        $.post("product.php",{
            action:"product",
            product:product,
            description:description,
            quantity:quantity,
            rate:rate,
           
        }, function (data){
            // alert(data);
            if(data==1){
                $.ajax({
                    type: "POST",
                    url: "adminajax.php",
                    // data: "data",
                    // dataType: "dataType",
                    success: function (data) {
                        $("#admin").html(data);
                    }
                });
            }
            // if (data) {
            //     $.post("product.php",
            //         {
            //             action: "showformdata"
            //         },
            //         function (data) {
            //             $("#allformdata").html(data);
            //         });
            // }
        });

        });
        });

        

    // });
// });