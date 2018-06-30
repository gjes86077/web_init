
function initialize() {
  var styledMapType = new google.maps.StyledMapType(
    [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ebe3cd"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#523735"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f1e6"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#c9b2a6"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#dcd2be"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ae9e90"
          }
        ]
      },
      {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#93817c"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#a5b076"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#447530"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f1e6"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#fdfcf8"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f8c967"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#e9bc62"
          }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e98d58"
          }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.stroke",
        "stylers": [
          {
            "color": "#db8555"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#806b63"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#8f7d77"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#ebe3cd"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dfd2ae"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#b9d3c2"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#92998d"
          }
        ]
      }
    ],
    { name: '統領／統利旅行社' });
  divmap = document.getElementById("map");
  lat = $(divmap).data("lat");
  lng = $(divmap).data("lng");
  var latlng = new google.maps.LatLng(lat, lng);

  //zoom 參數可控制地圖預設縮放大小
  var settings = {
    zoom: 17,
    center: latlng,
    scrollwheel: true, //滾輪
    mapTypeControl: true,
    mapTypeControlOptions: { style: google.maps.MapTypeControlStyle.DROPDOWN_MENU },
    navigationControl: false,
    navigationControlOptions: { style: google.maps.NavigationControlStyle.SMALL },
    mapTypeControlOptions: { mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map'] },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var infowindow = new google.maps.InfoWindow({ maxWidth: 300 });


  var map = new google.maps.Map(divmap, settings);
  //google.maps.Size = logo.png 圖片尺寸
  //google.maps.Point = logo.png 錨點位置 (尖端部份)
  var plane = new google.maps.MarkerImage('images/loc.png',
    new google.maps.Size(54, 65),
    new google.maps.Point(0, 0),
    new google.maps.Point(27, 65)
  );

  var companyPos = new google.maps.LatLng(lat, lng);
  var contentString = '';
  var infowindow = new google.maps.InfoWindow();
  //title = 滑鼠游標停在 logo.png 時出現的說明文字
  //列印據點辦事處
  var office_0 = new google.maps.Marker({
    position: new google.maps.LatLng(lat, lng),
    map: map,
    icon: plane,
    title: '統領／統利 旅行社',
    addr: '104 台北市南京東路二段 137 號 8 樓',
    content: `<p>服務時間：週一 ~ 週五 /09:00~17:30</p>`
  });

  office_0.addListener('mouseover', function () { ShowInfo(map, this); });



  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');

  function ShowInfo(mapObj, markerObj) {
    if (infowindow) { infowindow.close(); }
    infowindow.setContent(InfoContent(markerObj));
    infowindow.open(mapObj, markerObj);
  }
  function InfoContent(markerObj) {//設定資訊視窗內容要呈現什麼	
    // html = '<h4><a href="#" target="_blank">'+markerObj.content+'</a></h4><div id="content"><ul><li><a href="'+markerObj.school[0].url+'">'+markerObj.school[0].name+'</a></li><li><a href="'+markerObj.school[0].url+'">'+markerObj.school[1].name+'</a></li><li><a href="'+markerObj.school[0].url+'">'+markerObj.school[2].name+'</a></li></ul></div>';
    html = '<h4>' + markerObj.title + '</h4>';
    html += '<div id="content" class="html">';
    html += markerObj.content;
    html += '<div id="addr">';
    html += markerObj.addr;
    html += '</div>';
    html += '</div>';

    return html;
  }

}
//開啟資訊視窗		infowindow.open(map,  bid);