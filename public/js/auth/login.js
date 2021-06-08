
var msg_cord = null;
var number = null;

function confirm_push() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: "/sms_confirm",
        dataType: 'json',
        data: {
            u_phone: $('#phone_number').val()
        },
        success: function (data) {

            console.log(data);
            msg_cord = data.confirm_num;
            number = String($('#phone_number').val());
            console.log(number);

            if (data.status == 500) {
                count();
                $('#security_code').css('display','block');
                $('#submit').css('display','block');
                $('#submit').attr('type','button');
                $('#submit').attr('onclick','callPage('+number+')');
            } else {
                count();
                $('#security_code').css('display','block');
                $('#submit').css('display','block');
            }

        },
        error: function (request, status, error) {
            console.log(
                "code:" + request.status + "\nmessage:" + request.responseText + "\nerror:" +
                error
            );
        }
    });

}

function count() {

    // 3 minutes from now
    var time_in_minutes = 3;
    var current_time = Date.parse(new Date());
    var deadline = new Date(current_time + time_in_minutes * 60 * 1000);

    function time_remaining(endtime) {

        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);

        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        return {'total': t, 'minutes': minutes, 'seconds': seconds};

    }

    function run_clock(endtime) {

        function update_clock() {
            var t = time_remaining(endtime);
            $('#btn_chk').val("재전송 [ " + t.minutes + ':' + t.seconds + " ]");
            if (t.total <= 0) {
                clearInterval(timeinterval);
                $('#security_code').css('display','none');
                $('#submit').css('display','none');
                $('#btn_chk').val("인증번호");
            }
        }

        update_clock();

        var timeinterval = setInterval(update_clock, 1000);

    }

    run_clock(deadline);
}


function sign_check() {

    if (msg_cord == $('#security_code').val()) {

        if (number == $('#phone_number').val()) {

            return true;

        } else {

            alert('전화번호불일치');
            return false;

        }

    } else {

        alert('인증번호 불일치');

        return false;

    }

}


function callPage(number) {

    history.pushState(null, null, '/register');

    if (msg_cord == $('#security_code').val()) {

        if (number == $('#phone_number').val()) {

            $.ajax({
                url: '/register',
                dataType: "html",
                success: function (res) {
                    console.log(number);
                    $('#login_wrap').html(res);
                    $('#u_phone').val('0'+number);
                },
                error: function (request, status, error) {
                    console.log(
                        "code:" + request.status + "\nmessage:" + request.responseText + "\nerror:" +
                        error
                    );
                }
            });

        } else {

            alert('전화번호불일치');
            return false;

        }

    } else {

        alert('인증번호 불일치');

        return false;

    }


    }
