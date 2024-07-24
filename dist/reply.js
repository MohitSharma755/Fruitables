 $(document).ready(function () {
    document.getElementById("mypostbtn").addEventListener('click', function () {
        var name = $("#name").val();
        var email = document.getElementById('email').value;
        var review = document.getElementById('review').value;

        $.post("reply.php", {
            action: "reply",
            name: name,
            email: email,
            review: review,
        }, function (data) {
            alert(data);
        });
    });
});

// function insert(){

//     alert("wrk");
//
//     // action: i m calling whatsapp.
// }


