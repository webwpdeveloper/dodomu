jQuery(function ($) {
    let maps = [];

    function initMap(element) {

        let infoBoxWidth = (winW < 768) ? 288 : 288,
            infoBoxOptions = {
                alignBottom: true,
                content: 'text',
                pixelOffset: (winW < 768) ? new google.maps.Size(infoBoxWidth / -2, infoBoxWidth / -5) : new google.maps.Size(infoBoxWidth / -2, infoBoxWidth / -5),
                boxStyle: {
                    width: `${infoBoxWidth}px`
                },
                closeBoxMargin: "0",
                closeBoxURL: 'img/icon-close.png'
            },
            infoBox = new InfoBox(infoBoxOptions),
            markersArr = [],
            mapStyles = [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#686868"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "lightness": "-22"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "saturation": "11"
                        },
                        {
                            "lightness": "-51"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "saturation": "3"
                        },
                        {
                            "lightness": "-56"
                        },
                        {
                            "weight": "2.20"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "lightness": "-52"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "weight": "6.13"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "lightness": "-10"
                        },
                        {
                            "gamma": "0.94"
                        },
                        {
                            "weight": "1.24"
                        },
                        {
                            "saturation": "-100"
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "lightness": "-16"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": "-41"
                        },
                        {
                            "lightness": "-41"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "weight": "5.46"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "weight": "0.72"
                        },
                        {
                            "lightness": "-16"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "lightness": "-37"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#b7e4f4"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ];

        function Map(id, mapOptions) {
            this.map = new google.maps.Map(document.getElementById(id), mapOptions);
            this.markers = [];
            this.infowindows = [];
            this.clusters = null;
        }

        function addMarker(mapId, location, index, string, image) {
            maps[mapId].markers[index] = new google.maps.Marker({
                position: location,
                map: maps[mapId].map,
                icon: {
                    url: image
                },
                mainImage: image,
                desc: string
            });

            google.maps.event.addListener(maps[mapId].markers[index], 'click', function () {
                infoBox.setContent(string);
                infoBox.setPosition(location);
                infoBox.open(maps[mapId].map);

                maps[mapId].map.setCenter(location);

                if (winW < 768) {
                    maps[mapId].map.panBy(0, -infoBoxWidth);
                } else {
                    maps[mapId].map.panBy(0, infoBoxWidth / -2);
                }

            });
            return maps[mapId].markers[index];
        }

        function initialize(mapInst) {
            let mapId = mapInst.attr('id'),
                lat = mapInst.attr("data-lat"),
                lng = mapInst.attr("data-lng"),
                myLatLng = new google.maps.LatLng(lat, lng),

                zoomOnDesktop = mapInst.attr("data-zoom") ? parseInt(mapInst.attr("data-zoom")) : 12,
                zoomOnMobile = mapInst.attr("data-xs-zoom") ? parseInt(mapInst.attr("data-xs-zoom")) : 10,
                zoomMap = winW < 768 ? zoomOnMobile : zoomOnDesktop;

            const mapUiOptions = {
                zoom: zoomMap,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                scrollwheel: false,
                disableDefaultUI: true,
                streetViewControl: false,
                fullscreenControl: false,
                center: myLatLng,
                styles: mapStyles
            };


            const clusterOptions = {
                gridSize: 60,
                ignoreHiddenMarkers: true,
                styles: [{
                    url: 'img/marker-cluster.png',
                    height: 48,
                    width: 48,
                    textSize: 16,
                    textColor: '#FFFFFF'
                }]
            };


            $.ajax({
                url: $(mapInst).attr('data-link'),
                type: 'get',
                dataType: 'json',
                error: function (data) {
                    console.log("File Not Found");
                },
                success: function (data) {
                    for (let i = 0; i < data.length; i++) {

                        const {
                            dataRel,
                            dataLat,
                            dataLng,
                            marker,
                            mobileMarker,
                            city,
                            street,
                            googleLink,
                            phone,
                            phoneLink,
                            email,
                            workDaysOne,
                            workDaysTwo,
                            logo
                        } = data[i]

                        const imgMarker = winW < 768 ? mobileMarker : marker;

                        const infoWrap = $('<div class="info-box-wrapper">');
                        infoWrap.append($('<div class="btn-close">'));

                        const infoInner = $('<div class="info-box-inner">');

                        if (logo) {
                            const infoImg = $('<div class="info-box-logo">');
                            infoImg.append($(`<img src="${logo}" alt="Logo">`));
                            infoInner.append(infoImg);
                        }

                        if (city && street) {
                            const item = $('<div class="cnt-item">');
                            item.append($(`<div class="cnt-info"><a href="${googleLink ? googleLink : '#'}">${city}, ${street}</a></div>`));
                            infoInner.append(item);
                        }

                        if (phone && phoneLink) {
                            const item = $('<div class="cnt-item">');
                            item.append($(`<div class="cnt-info"><a href="tel:${phoneLink}">${phone}</a></div>`));
                            infoInner.append(item);
                        }

                        if (email) {
                            const item = $('<div class="cnt-item">');
                            item.append($(`<div class="cnt-info"><a href="mailto:${email}">${email}</a></div>`));
                            infoInner.append(item);
                        }

                        if (workDaysOne || workDaysTwo) {
                            const item = $('<div class="cnt-item">');
                            item.append($(`<div class="cnt-info">${workDaysOne ? '<div>' + workDaysOne + '</div>' : ''}${workDaysTwo ? '<div>' + workDaysTwo + '</div>' : ''}</div>`));
                            infoInner.append(item);
                        }

                        infoWrap.append(infoInner);

                        let markerInst = addMarker(
                            dataRel,
                            new google.maps.LatLng(dataLat, dataLng),
                            i,
                            infoWrap[0].outerHTML,
                            imgMarker
                        );

                        markersArr.push(markerInst);
                    }


                    maps[mapId].markerClusterer = new MarkerClusterer(maps[mapId].map, markersArr, clusterOptions);
                    maps[mapId].bounds = new google.maps.LatLngBounds();

                    markersArr.forEach(function (marker) {
                        maps[mapId].bounds.extend(marker.getPosition());
                    });


                    if (lat.length == 0 && lng.length == 0) {
                        maps[mapId].map.fitBounds(maps[mapId].bounds);
                    }
                }
            });

            maps[mapId] = new Map(mapId, mapUiOptions);

            // Close info-box on icon
            // infoBox.addListener('closeclick', function () {
            //     infoBox.close();
            //     maps[mapId].markers.forEach(function (marker) {
            //         marker.active = false;
            //         marker.setIcon(marker.mainImage);
            //     });
            // });

            // Close info-box on icon
            $('.info-box-wrapper .btn-close').on('click', function () {
                infoBox.close();
                maps[mapId].markers.forEach(function (marker) {
                    marker.active = false;
                    marker.setIcon(marker.mainImage);
                });
            });

            // Close info-box on map
            // maps[mapId].map.addListener('click', function () {
            //     infoBox.close();
            //     maps[mapId].markers.forEach(function (marker) {
            //         marker.active = false;
            //         marker.setIcon(marker.mainImage);
            //     });
            // });
        }

        initialize(element);
    }

    $('.map').each(function () {
        initMap($(this))
    });
});