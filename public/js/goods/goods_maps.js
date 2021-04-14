var mapContainer = document.getElementById('mapview');

function ex_modal_close_default() {
    $('.addEvent').hide();
    $('.exchange_main').remove();
}

function ex_modal_close() {
    ex_modal_close_default();
}

if (navigator.geolocation) {
    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    navigator.geolocation.getCurrentPosition(function(position) {
        var lat = position.coords.latitude, // 위도
            lon = position.coords.longitude; // 경도

        var mapOption = {
            center: new kakao.maps.LatLng(lat, lon), // 지도의 중심좌표
            level: 5 // 지도의 확대 레벨
        };

        var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다\
        map.relayout();

        // 마커를 클릭하면 장소명을 표출할 인포윈도우 입니다
        var infowindow = new kakao.maps.InfoWindow({
            zIndex: 1,
        });

        // 장소 검색 객체를 생성합니다
        var ps = new kakao.maps.services.Places(map);

        // 카테고리로 지하철로 검색합니다
        ps.categorySearch('SW8', placesSearchCB, {
            useMapCenter: true,

        });

        // 키워드 검색 완료 시 호출되는 콜백함수 입니다
        function placesSearchCB(data, status) {
            if (status === kakao.maps.services.Status.OK) {
                for (var i = 0; i < data.length; i++) {
                    displayMarker(data[i]);
                }
            }
        }

        // 지도에 마커를 표시하는 함수입니다
        function displayMarker(place) {
            // 마커를 생성하고 지도에 표시합니다
            var marker = new kakao.maps.Marker({
                map: map,
                position: new kakao.maps.LatLng(place.y, place.x)
            });

            kakao.maps.event.addListener(marker, 'click', function() {
                ex_modal_close_default();

                let codes = marker.getPosition();
                let lat = codes.Ma;
                let lng = codes.La;

                $(document).on('click', "button[id='subway_btn']", function() {
                    var ex_addr_tr = place.place_name;
                    var ex_lo_la_tr = lat + '_' + lng;
                    $('#ex_addr_tr').val(ex_addr_tr);
                    $('#ex_lo_la_tr').val(ex_lo_la_tr);

                    var frm = document.direct_frm;
                    frm.submit();
                });

                // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
                infowindow.setContent('<div class="infowindow"><div>' +
                    place.place_name + '</div><div>' +
                    '<button id="subway_btn">확인</button>' + '</div></div>');
                infowindow.open(map, marker);
            });
        }

        for (var i = 0; i < o_a.length; i++) {
            positions.push(new kakao.maps.LatLng(o_a[i][0], o_a[i][1]));
            addMarker(positions[i]);
        }

        function addMarker(position) {
            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
                map: map, // 마커를 표시할 지도
                position: position, // 마커를 표시할 위치
            });

            kakao.maps.event.addListener(marker, 'click', function() {
                ex_modal_close_default();

                let codes = marker.getPosition();
                let lat = codes.Ma;
                let lng = codes.La;
                let geocoder = new kakao.maps.services.Geocoder();

                let coord = new kakao.maps.LatLng(lat, lng);
                let callback = function(result, status) {
                    if (status === kakao.maps.services.Status.OK) {
                        let ex_addr = result[0].road_address.address_name;
                        console.log(ex_addr);
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "/goods/modal/exchange_modal",
                            async: false,
                            type: 'post',
                            dataType: "json",
                            data: {
                                'ex_addr': ex_addr
                            },
                            success: function(data) {
                                $('.addEvent').append(data.html);
                                $('.addEvent').show();

                                $(document).on('click', "input[id='exchange_main_btn']", function() {
                                    var ex_addr_tr = ex_addr;
                                    var ex_lo_la_tr = lat + '_' + lng;
                                    $('#ex_addr_tr').val(ex_addr_tr);
                                    $('#ex_lo_la_tr').val(ex_lo_la_tr);

                                    var frm = document.direct_frm;
                                    frm.submit();
                                });

                                $(document).on('click', "input[id='btn_map']", function() {
                                    $('.addEvent').hide();
                                    $('.exchange_main').remove('.exchange_main');
                                });
                            },
                            error: function(request, status, error) {
                                console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                                    "error:" + error);
                            }
                        });
                    };
                };
                geocoder.coord2Address(coord.getLng(), coord.getLat(), callback);
            });
        }

        function relayout() {
            map.relayout();
        }
    });
}