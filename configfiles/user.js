$(document).ready(function () {
    document.getElementById("userbtn").addEventListener('click', function () {
        var first = $("#fname").val();
        var last = $("#lname").val();
        var company = $("#cname").val();
        var address = $("#add").val();
        var town = $("#town").val();
        var country = $("#country").val();
        var postcode = $("#zip").val();
        var mobile = $("#ph").val();
        var email = $("#mail").val();
        var photo = $("#photo").val();
        
        // alert(first);

        $.post("user.php", {
            action: "user",
            first: first,
            last: last,
            company: company,
            address: address,
            town: town,
            country: country,
            postcode: postcode,
            mobile: mobile,
            email: email,
            photo:photo,

        }, function (data) {
            alert(data);
        });

    });
});


