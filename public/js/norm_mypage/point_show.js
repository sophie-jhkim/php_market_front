$(document).ready(function(){

    $('#datePick_from, #from_icon').datepicker({
        dateFormat: "yy-mm-dd",
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        changeMonth: true,
        changeYear: true,
        showOn:"button",
        // buttonImage:"/images/calendar-outline.svg",
        buttonIamgeOnly:true,
        minDate:'-1y',
        maxDate:"D",
        yearSuffix: '년',
        //종료일이 시작일 이후로만 선택할 수 있도록
        onClose : function (selcetedDate){
            $('#datePick_to').datepicker("option", "minDate", selcetedDate);
        }
    });

    $('#datePick_to, #to_icon').datepicker({
        dateFormat: "yy-mm-dd",
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        changeMonth: true,
        changeYear: true,
        showOn:"button",
        // buttonImage:"/images/calendar-outline.svg",
        buttonIamgeOnly:true,
        minDate:'-1y',
        maxDate:"D",
        yearSuffix: '년',
        onClose : function (selcetedDate){
            $('#datePick_from').datepicker("option", "maxDate", selcetedDate);
        }
    });

    var now = new Date();
    $('#datePick_to').datepicker("setDate", now);
    $('#datePick_from').datepicker("setDate", new Date(now.setMonth(now.getMonth()-1)));

})
