var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(document).on("click", "#chkAll", function() {
    console.log('check All');
    var checked = $(this).is(":checked");

    if (checked) {
        $(this).parents(".checkBox").find('input').prop("checked", true);
    } else {
        $(this).parents(".checkBox").find('input').prop("checked", false);
    }
});

$(document).on("click", ".policy", function() {
    var is_checked = true;
    $(".checkBox .policy").each(function() {
        is_checked = is_checked && $(this).is(":checked");
    });
    $("#chkAll").prop("checked", is_checked);
});



$(".next").click(function() {
    var chk1 = document.joinForm.terms.checked;
    var chk2 = document.joinForm.privacy.checked;
    var chk3 = document.joinForm.marketing.checked;
    if (!chk1) {
        alert("이용 약관에 동의해주세요");
        return false;
    } else if (!chk2) {
        alert("개인정보 활용에 동의해주세요");
        return false;
    }

    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //show the next fieldset
    next_fs.show();
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            scale = 1 - (1 - now) * 0.2;
            left = (now * 50) + "%";
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale(' + scale + ')',
                'position': 'absolute'
            });
            next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
    console.log("광고 수신 : " + chk3);
});



$(".submit").click(function() {
    var name = document.getElementById('u_name').value;
    var email1 = document.getElementById('u_email1').value;
    var mail = email1 + "@" + $("select[name=u_email2]").val();
    var nick = document.getElementById('u_nick').value;
    var phone = document.getElementById('u_phone').value;
    var chkArray = new Array();
    $('input:checkbox[name=u_interest]:checked').each(function() {
        chkArray.push(this.value);
    });


    if (name == "") {
        alert("이름을 입력해주세요");
        document.joinForm.u_name.focus();
        return false;
    } else if (email1 == "") {
        alert("email을 입력해주세요");
        document.joinForm.u_email1.focus();
        return false;
    } else if (nick == "") {
        alert("닉네임을 입력해주세요");
        document.joinForm.u_nick.focus();
        return false;
    }

    alert("가입을 환영합니다^^. \n확인을 누르시면 홈화면으로 돌아갑니다");
    location.href="/goods_index";

    // var frm = new FormData(document.getElementById('joinForm'));
    // frm.append('u_email', mail);
    // frm.append('u_interest', chkArray);
    // frm.append('password', phone);

    // $.ajax({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     type: "POST",
    //     url: "/auth/user_register",
    //     data: frm,
    //     processData: false,
    //     contentType: false,
    //     success: function(data) {
    //         location.href = "/goods";
    //     },
    //     error: function(request, status, error) {
    //         console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
    //             "error:" + error);
    //     }
    // });
})
