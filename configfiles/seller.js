alert("i m seller");

$(document).ready(function () {
    document.getElementById("seller").addEventListener('click', function () {
        var first = $("#fname").val();
        var last = $("#lname").val();
        var company = $("#cname").val();
        var address = $("#add").val();
        var town = $("#town").val();
        var zip = $("#zip").val();
        var country = $("#country").val();

        var mobile = $("#ph").val();
        var email = $("#mail").val();
        var photo = $("#photo").val();

        alert(first);

        $.post("seller.php", {
            action: "seller",
            first: first,
            last: last,
            company: company,
            address: address,
            town: town,
            zip: zip,
            country: country,

            mobile: mobile,
            email: email,
            photo: photo,


        }, function (data) {
            alert(data);
        });

    });
});


