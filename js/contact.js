(function ($) {
    "use strict";

    $(document).ready(function () {
        var pageContactMap = L.map('page-contact-map').setView([5.5611009,95.2936828], 13);
        L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(pageContactMap);
        pageContactMap.scrollWheelZoom.disable();

        /*var contactIcon = L.icon({
            iconUrl: 'images/map/popup-point.png',
            iconSize: [370, 140]
        });*/

        var contactIcon = new L.HtmlIcon({
            html : '<div class="page-contact__map-point"><div class="page-contact__map-point-title">SiRENBIL</div><div>Banda Aceh, Aceh Indonesia</div>',
            iconSize: [370, 140]
        });

        var marker = L.marker([5.5556338,95.3142822], {icon: contactIcon}).addTo(pageContactMap).bindPopup("I am a green leaf.");
        marker.off('click');
    });
})(jQuery);