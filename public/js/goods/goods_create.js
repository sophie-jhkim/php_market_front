$(document).ready(function() {
    $('.map_wrap').hide();
    $('.exchange_info').hide();
    $('.g_release>input').click(function() {
        $(this).toggleClass('on').siblings().removeClass('on');
    });

    $('.btn_nego').click(function() {
        $(this).toggleClass('on');
        if ($('.btn_nego').hasClass('on')) {
            document.getElementById('trade1').value = "네고가능";
        } else {
            document.getElementById('trade2').value = "네고불가"
        }
    });

    $('.btn_direct').click(function() {
        $(this).toggleClass('on');
        if ($('.btn_direct').hasClass('on')) {
            document.getElementById('trade2').value = "직거래가능";
        } else {
            document.getElementById('trade2').value = "직거래불가";
        }
    });

    $('#datePicker').datepicker({
        dateFormat: "yy-mm-dd",
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        // changeMonth: true,
        // changeYear: true,
        maxDate: "D",
    });

    //상품사진 슬라이더 적용하기
    $('.photo_slider').slick({
        slidesToShow: 4,
        infinite: false,
    });

    $('#idk').click(function() {
        document.getElementById('datePicker').value = "";
    });
});

function chk() {
    if (document.getElementById('datePicker') != "") {
        $('#idk').val([]);
    }
}

function writeNullChk() {
    var g_title = document.getElementById('g_title').value;
    var g_category = $("select[name=g_category]").val();
    var g_filter = document.getElementById('filter').value;
    var g_release = $('.g_release>input.on').val();
    var g_brand = document.getElementById('g_brand').value;
    var g_buy_day = document.getElementById('datePicker').value;
    var g_size = document.getElementById('width').value + "_" + document.getElementById('height').value + "_" + document.getElementById('depth').value;
    var g_price = document.getElementById('g_price').value;
    var g_content = document.getElementById('g_content').value;
    var chk_agree = document.writeForm.chk_agree.checked;
    var chk_buy_day = document.writeForm.idk.checked;
    var g_trade1 = document.getElementById('trade1').value;
    var g_trade2 = document.getElementById('trade2').value;
    var g_trade = g_trade1 + '_' + g_trade2;
    var g_exchange = $('#exchange_place').val();
    var trade_name = $('#trade_name').val();
    var g_address_name = $('#ex').val();
    var g_subway = $('#g_subway').val();

    if (g_title == "") {
        alert("제목을 입력해주세요");
        document.writeForm.g_title.focus();
        return false;
    } else if (g_category == "") {
        alert("카테고리를 설정해주세요");
        return false;
    } else if (g_buy_day == "" && !chk_buy_day) {
        alert("상품 구입일 또는 기억안날 경우 기억안남에 체크해주세요");
        if (chk_buy_day == true) {
            document.getElementById('datePicker').val() = "";
        }
    } else if (g_price == "") {
        alert("가격을 입력해주세요");
        document.writeForm.g_price.focus();
        return false;
    } else if (g_content == "") {
        alert("내용을 입력해주세요");
        $('.g_content').focus();
        return false;
    } else if (!chk_agree) {
        alert("약관에 동의해주세요");
        return false;
    }

    var myForm = document.getElementById('writeForm');
    formData = new FormData(myForm);
    $("#sub").prop("disabled", true);

    formData.append('g_release', g_release);
    formData.append('g_size', g_size);
    formData.append('g_trade', g_trade);
    formData.append('ex_lo_la', g_exchange)
    formData.append('trade_name', trade_name);
    formData.append('g_address_name', g_address_name);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/goods/goods_store",
        processData: false,
        contentType: false,
        data: formData,
        type: 'POST',
        success: function(data) {
            location.replace('/goods');
        },
        error: function(request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        }
    });
}