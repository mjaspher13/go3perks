function initMap() {
            setTimeout(function() {
            var imus = {lat: 40.730610, lng: -73.935242};
                                                                                                    
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: imus
            });

            var marker = new google.maps.Marker({
            position: imus,
            map: map
            });
                }, 3000);                                                                           
    };
$(document).ready(function () {
   
        
          
                                                                                           
});
                                                                                
                                                                                