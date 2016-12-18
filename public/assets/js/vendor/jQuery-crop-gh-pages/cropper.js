$( function () {
  $( 'img.crop' )
    .on( 'crop', function ( event ) {
        console.log( event.cropX, event.cropY, event.cropW, event.cropH, event.stretch );
    } );

  $( '.crop' ).each( function () {
    var image     = $( this )
      , results = image.next( '.results' )
      , x       = $( '.cropX', results )
      , y       = $( '.cropY', results )
      , w       = $( '.cropW', results )
      , h       = $( '.cropH', results )
      , crop    = image
        .crop( {
          controls : 'Drag to move, scroll to zoom'
        } )
        // display crop info
        .on( 'crop.crop', function( event ) {
          x.text( event.cropX );
          y.text( event.cropY );
          w.text( event.cropW );
          h.text( event.cropH );
        } )
        .data( 'crop' )
    ;

    // zoom on scroll (jquery-mousewheel dependency)
    image
      .on( 'mousewheel.crop', function ( event ) {
        return event.originalEvent.wheelDelta < 0 ?
          crop.zoomIn() :
          crop.zoomOut();
      } )
    ;

    // zoom on pinch touch (hammer dependency)
    Hammer( this )
      .on( 'pinchin', function ( event ) {
        return crop.zoomOut();
      } )
      .on( 'pinchout', function ( event ) {
        return 	crop.zoomIn();
      } )
      .on( 'drag', function ( event ) {
        crop.$image
          .css( {
            left  : '+=' + event.deltaX
            , top : '+=' + event.deltaY
          } )
        ;
        crop.update();
      } )
    ;
  } );

  $("input:file").change(function (){
    var crop = $( 'img.crop' ).data( 'crop' );
    console.log(crop);
  });
} );
