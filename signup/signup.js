var passwordtoggle = document.querySelector(".password-toggle");
var togglepassword = document.querySelector(".toggle-password")
let pwdview = false;

function changepwdview() {
    let getpwdview = document.getElementById("viewpassword");
    if (pwdview === false) {
        getpwdview.setAttribute("type", "text");
        pwdview = true;
    }
    else if (pwdview === true) {
        getpwdview.setAttribute("type", "password");
        pwdview = false;
    }
}

function changeviewpwd() {
    let getpwdview = document.getElementById("passwordview");
    if (pwdview === false) {
        getpwdview.setAttribute("type", "text");
        pwdview = true;
    }
    else if (pwdview === true) {
        getpwdview.setAttribute("type", "password");
        pwdview = false;
    }
}

passwordtoggle.addEventListener("click", function () {
    passwordtoggle.classList.toggle("active");
    changepwdview();
})

togglepassword.addEventListener("click", function () {
    togglepassword.classList.toggle("active");
    changeviewpwd();
})

$(document).ready(function () {
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    $('#firstname').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) { input.removeClass("is-invalid").addClass("is-valid"); }
        else { input.removeClass("is-valid").addClass("is-invalid"); }
    });

    $('#lastname').on('input', function () {
        var input = $(this);
        var is_name = input.val();
        if (is_name) { input.removeClass("is-invalid").addClass("is-valid"); }
        else { input.removeClass("is-valid").addClass("is-invalid"); }
    })

    $('#c_email').on('input', function () {
        let email = $('#email');
        var input = $(this);
        let c_email = input.val();
        let e_mail = email.val()
        if (e_mail === c_email) {
            input.removeClass("is-invalid").addClass("is-valid");
        }
        else {
            input.removeClass("is-valid").addClass("is-invalid");
        }
    });

    $('#email').on('input', function () {
        var input = $(this);
        var re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var is_email = re.test(input.val());
        if (is_email) {
            input.removeClass("is-invalid").addClass("is-valid");
        }
        else {
            input.removeClass("is-valid").addClass("is-invalid");
        }
    });

    $('#viewpassword').on('input', function () {
        var input = $(this);
        var re = /^(?=.*\d)[a-zA-Z0-9]{8,}$/;
        var is_password = re.test(input.val());
        if (is_password) {
            input.removeClass("is-invalid").addClass("is-valid");
        }
        else {
            input.removeClass("is-valid").addClass("is-invalid");
        }
    });

    $('#passwordview').on('input', function () {
        let password = $('#viewpassword');
        var input = $(this);
        let c_passwd = input.val();
        let passwd = password.val()
        if (passwd === c_passwd) {
            input.removeClass("is-invalid").addClass("is-valid");
        }
        else {
            input.removeClass("is-valid").addClass("is-invalid");
        }
    });


    $('#phone').on('input', function () {
        var input = $(this);
        var re = /^[\+]?[(]?[0-9]{4}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
        var is_phone = re.test(input.val());
        if (is_phone) {
            input.removeClass("is-invalid").addClass("is-valid");
        }
        else {
            input.removeClass("is-valid").addClass("is-invalid");
        }
    });


    var form = document.querySelector('.needs-validation');
    var input = document.querySelector('input');

    form.addEventListener('submit', function (event) {
        if(form.checkValidity() === false){
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated')
    })

})


