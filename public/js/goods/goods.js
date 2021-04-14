var page = 1;
$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        page++;
        loadMoreData(page);
    }
});

function loadMoreData(page) {
    $.ajax({
            url: 'goods?page=' + page,
            type: "get",
        })
        .done(function(data) {
            $(".goods_list").append(data.html);
        })
}

$(document).ready(function() {
    addr_select();
    $('.like').on('click', function(e) {
        $('.like').toggleClass('on');
        if ($('.like').hasClass('on')) {
            $('.like').attr({
                src: 'images/heart_on.png'
            });
        } else {
            $('.like').attr({
                src: 'images/heart_off.png'
            });
        }
    });

    $('.btn_map').on('click', function(e) {
        $('.map_wrap').toggleClass('on');
        if ($('.map_wrap').hasClass('on')) {
            $('.option').hasClass('on');
            $('.btn_map').attr({
                value: $('#btn_map_hid').val()
            });
            $('.btn_map').css('font-weight', 'bold');
            $('.btn_map').css('color', '#6c80f1');
            document.getElementById("btn_map").style.borderTop = "1px solid #6c80f1";
        } else {
            $('.btn_map').attr({
                value: '지도 보기'
            });
            $('.btn_map').css('color', 'black');
            $('.btn_map').css('font-weight', 'normal');
        }
    });
})

function fn_option(code, name) {
    return '<option value="' + code + '">' + name + '</option>';
}

function addr_select() {
    //sido option 추가
    $.each(hangjungdong.sido, function(idx, code) {
        //append를 이용하여 option 하위에 붙여넣음
        $('#sido').append(fn_option(code.sido, code.codeNm));
    });

    //sido 변경시 시군구 option 추가
    $('#sido').change(function() {
        $('#sigugun').show();
        $('#sigugun').empty();
        $('#sigugun').append(fn_option('', '선택'));

        $.each(hangjungdong.sigugun, function(idx, code) {
            if ($('#sido > option:selected').val() == code.sido)
                $('#sigugun').append(fn_option(code.sigugun, code.codeNm));
        });

        //세종특별자치시 예외처리
        //옵션값을 읽어 비교
        if ($('#sido option:selected').val() == '36') {
            $('#sigugun').hide();
            //index를 이용해서 selected 속성(attr)추가
            //기본 선택 옵션이 최상위로 index 0을 가짐
            $('#sigugun option:eq(1)').attr('selected', 'selected');
            //trigger를 이용해 change 실행
            $('#sigugun').trigger('change');
        }
    });

    //시군구 변경시 행정동 옵션추가
    $('#sigugun').change(function() {
        //option 제거
        $('#dong').empty();
        $.each(hangjungdong.dong, function(idx, code) {
            if ($('#sido > option:selected').val() == code.sido && $('#sigugun > option:selected').val() == code.sigugun)
                $('#dong').append(fn_option(code.dong, code.codeNm));
        });
        //option의 맨앞에 추가
        $('#dong').prepend(fn_option('', '선택'));
        //option중 선택을 기본으로 선택
        $('#dong option:eq("")').attr('selected', 'selected');
    });

    $('#dong').change(function() {
        var sido = $('#sido option:selected').text();
        var sigugun = $('#sigugun option:selected').text();
        var dong = $('#dong option:selected').text();
        //최종적으로 이쪽 값이 전송되면 된다
        var addrCode = sido + '_' + sigugun + '_' + dong;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/goods",
            type: 'get',
            dataType: "json",
            data: {
                'addrCode': addrCode,
            },
            success: function(data) {},
            error: function(request, status, error) {
                console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                    "error:" + error);
            }
        });
    });
}