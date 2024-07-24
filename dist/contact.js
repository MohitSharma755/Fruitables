// alert("working");
$(document).ready(function () {
    document.getElementById("contactbtn").addEventListener('click', function () {

        var name = $("#name").val();
        var email = $("#email").val();
        var msg = $("#msg").val();

        $.post("contactinsert.php", {
            action: "contact",
            name: name,
            email: email,
            msg: msg,
            // },
            // function(data){
            //     alert(data);
            // }
        })

    })
})