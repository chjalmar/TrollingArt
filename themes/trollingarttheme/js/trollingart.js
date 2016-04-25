$ = jQuery;
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  	initMap();
});

$('#sidebar').affix({
      offset: {
        top: 230,
        bottom: 100
      }
});	
$('#midCol').affix({
      offset: {
        top: 230,
        bottom: 100
      }
});	