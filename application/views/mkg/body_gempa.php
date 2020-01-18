
<div class="container-fluid" style="margin-top: 60px;" id="show">
    <div class="row">
        <div class="col-lg-3" style="height: 575px; overflow-y: scroll">
            <div class="list-group" id="navi"></div>
            <div id="isi"></div>
            <script type="text/javascript">
                var data_gempa = <?php echo "$respon";?>;
                var str_gempa = "";
                var str_active = "";
                //alert(data_gempa.length);
                for(var c=0;c<data_gempa.length;c++){
                    if(data_gempa[c].id === <?php echo $this->uri->segment(3);?>){
                        str_active = "active";
                        console.log(data_gempa[c].id);
                    }else{
                        str_active = "";
                    }
                    str_gempa += '<a href="<?php echo site_url();?>mkg/gempa/' + data_gempa[c].id + '"'+
                                 'class="list-group-item '+str_active+'">' + data_gempa[c].current_gempa[8].Wilayah + '</a>';
                }
                document.getElementById("navi").innerHTML = str_gempa; 
            </script>
        </div>
        <div class="col-lg-9" style="height: 600px;">   
            <?php // echo "<pre>$respon</pre>";?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprEkmn5_AWMYHETXDgLD2sBlipH8jZWo"></script>
            <script type="text/javascript">
                function initialize() {
                    for(var c=0;c<data_gempa.length;c++){
                        if(data_gempa[c].id === <?php echo $this->uri->segment(3);?>){
                            var tanggal = data_gempa[c].current_gempa[0].Tanggal;
                            var jam = data_gempa[c].current_gempa[1].Jam;
                            var koordinat = data_gempa[c].current_gempa[2].point;
                            var lintang = data_gempa[c].current_gempa[3].Lintang;
                            var bujur = data_gempa[c].current_gempa[4].Bujur;
                            var magnitude = data_gempa[c].current_gempa[5].Magnitude;
                            var kedalaman = data_gempa[c].current_gempa[6].Kedalaman;
                            var wilayah = data_gempa[c].current_gempa[8].Wilayah;
                        }
                    }
                    
                    var ketemu = 0;
                    var hasil_l = "";
                    var hasil_b = "";
                    for(var c=0;c<koordinat.length;c++){
                        if(ketemu===0 && koordinat[c]!=','){
                            hasil_b += koordinat[c];
                        }else
                        if(ketemu===1 && koordinat[c]!=','){
                            hasil_l += koordinat[c];
                        }else
                        if(ketemu===0 && koordinat[c]===','){
                            ketemu++;
                        }
                    }
                    
                    var isi = '';
                    isi += '<table class="table table-hover">';
                    isi += '<thead>';
                    isi += '<tr><th colspan="3"><label><b>Keterangan</b></label></th></tr>';
                    isi += '</thead>';
                    isi += '<tbody>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Lokasi</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + wilayah + '</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Koordinat</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + lintang + ',' + bujur +'</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Waktu</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + tanggal + ' pukul ' + jam +'</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Magnitude</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + magnitude + '</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Kedalaman</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + kedalaman + '</td>';
                    isi += '</tr>';
                    isi += '</tbody>';
                    isi += '</table>';
                    
                    var myLatlng = new google.maps.LatLng(hasil_l , hasil_b);

                    var mapOptions = {
                      zoom: 6,
                      center: myLatlng,
                      mapTypeId: 'satellite',

                    };

                    CustomMarker.prototype = new google.maps.OverlayView();

                    function CustomMarker(opts) {
                        this.setValues(opts);
                    }

                    CustomMarker.prototype.draw = function() {
                        var self = this;
                        var div = this.div;
                        if (!div) {
                            div = this.div = $('' +
                                '<div>' +
                                '<div class="shadow"></div>' +
                                '<div class="pulse"></div>' +
                                '<div class="pin-wrap">' +
                                '<div class="pin"></div>' +
                                '</div>' +
                                '</div>' +
                                '')[0];
                            this.pinWrap = this.div.getElementsByClassName('pin-wrap');
                            this.pin = this.div.getElementsByClassName('pin');
                            this.pinShadow = this.div.getElementsByClassName('shadow');
                            div.style.position = 'absolute';
                            div.style.cursor = 'pointer';
                            var panes = this.getPanes();
                            panes.overlayImage.appendChild(div);
                            google.maps.event.addDomListener(div, "click", function(event) {
                                google.maps.event.trigger(self, "click", event);
                            });
                        }
                        var point = this.getProjection().fromLatLngToDivPixel(this.position);
                        if (point) {
                            div.style.left = point.x + 'px';
                            div.style.top = point.y + 'px';
                        }
                    };

                    CustomMarker.prototype.animateDrop = function() {
                        dynamics.stop(this.pinWrap);
                        dynamics.css(this.pinWrap, {
                            'transform': 'scaleY(2) translateY(-'+$('#map').outerHeight()+'px)',
                            'opacity': '1',
                        });
                        dynamics.animate(this.pinWrap, {
                            translateY: 0,
                            scaleY: 1.0,
                        }, {
                            type: dynamics.gravity,
                            duration: 1800,
                        });

                        dynamics.stop(this.pin);
                        dynamics.css(this.pin, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pin, {
                            scaleY: 0.8
                        }, {
                            type: dynamics.bounce,
                            duration: 1800,
                            bounciness: 600,
                        })

                        dynamics.stop(this.pinShadow);
                        dynamics.css(this.pinShadow, {
                            'transform': 'scale(0,0)',
                        });
                        dynamics.animate(this.pinShadow, {
                            scale: 1,
                        }, {
                            type: dynamics.gravity,
                            duration: 1800,
                        });
                    }

                    CustomMarker.prototype.animateBounce = function() {
                        dynamics.stop(this.pinWrap);
                        dynamics.css(this.pinWrap, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pinWrap, {
                            translateY: -30
                        }, {
                            type: dynamics.forceWithGravity,
                            bounciness: 0,
                            duration: 500,
                            delay: 150,
                        });

                        dynamics.stop(this.pin);
                        dynamics.css(this.pin, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pin, {
                            scaleY: 0.8
                        }, {
                            type: dynamics.bounce,
                            duration: 800,
                            bounciness: 0,
                        });
                        dynamics.animate(this.pin, {
                            scaleY: 0.8
                        }, {
                            type: dynamics.bounce,
                            duration: 800,
                            bounciness: 600,
                            delay: 650,
                        });

                        dynamics.stop(this.pinShadow);
                        dynamics.css(this.pinShadow, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pinShadow, {
                            scale: 0.6,
                        }, {
                            type: dynamics.forceWithGravity,
                            bounciness: 0,
                            duration: 500,
                            delay: 150,
                        });
                    }

                    CustomMarker.prototype.animateWobble = function() {
                        dynamics.stop(this.pinWrap);
                        dynamics.css(this.pinWrap, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pinWrap, {
                            rotateZ: -45,
                        }, {
                            type: dynamics.bounce,
                            duration: 1800,
                        });

                        dynamics.stop(this.pin);
                        dynamics.css(this.pin, {
                            'transform': 'none',
                        });
                        dynamics.animate(this.pin, {
                            scaleX: 0.8
                        }, {
                            type: dynamics.bounce,
                            duration: 800,
                            bounciness: 1800,
                        });
                    }


                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                    var marker = new CustomMarker({
                        position: myLatlng,
                        map: map,
                        // animation: google.maps.Animation.BOUNCE,
                        //icon: '<?php //echo base_url('assets/images/gempa-bumi.png')?>//'
                    });
                    
                    var infowindow = new google.maps.InfoWindow({
                        content: isi,
                        maxWidth : 500 
                    });
                    
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map,marker);
                        marker.animateWobble();
                   });
                    $('#drop').on('click', function(e) {
                        marker.animateDrop();
                    });

                    $('#wobble').on('click', function(e) {
                        marker.animateWobble();
                    });

                    $('#bounce').on('click', function(e) {
                        marker.animateBounce();
                    })
                  }
                  google.maps.event.addDomListener(window, 'load', initialize);
                function autoRefreshPage()
                {
                    window.location = window.location.href;
                }
                setInterval('autoRefreshPage()', 10000);
            </script>
            <div id="map-canvas"  style="height: 575px;width:100%;"></div>

        </div>
    </div>
</div>

