$(document).ready(function () {
    document.getElementById("myplacebtn").addEventListener('click', function () {
        var first = $("#fname").val();
        var last = $("#lname").val();
        var company = $("#cname").val();
        var address = $("#add").val();
        var town = $("#town").val();
        var country = $("#country").val();
        var postcode = $("#zip").val();
        var mobile = $("#ph").val();
        var email = $("#mail").val();
        var account = $("#check").val();
        var ship = $("#ship").val();
        var orders = $("#order").val();
        // alert(first);

        $.post("check.php", {
            action: "checkout",
            first: first,
            last: last,
            company: company,
            address: address,
            town: town,
            country: country,
            postcode: postcode,
            mobile: mobile,
            email: email,
            account: account,
            ship: ship,
            orders: orders,

        }, function (data) {
            window.location.href="Thankyou.php";
        //  here data will return from above php file
        });

    });
});


