Description
===========
Easy to use jQuery plugin for zoom & pan image cropping.
This plugin is a complete rewrite of http://www.tmatthew.net/jwindowcrop

Demo
====
Visit: http://adriengibrat.github.com/jQuery-crop/

Usage
=====
```javascript
	// minimal
	$( 'img.crop' )
		.crop()
	;
	// typical
	$( 'img.crop' )
		.crop( {
			width    : 300
			, height : 300
		} )
		.on ( 'crop', function( event ) {
			console.log( $( this ).attr( 'id' ), 'x: '+ event.cropX );
		} )
	;
	// using mousewheel event
	$( 'img.crop' )
		.crop()
		.on( 'mousewheel', function ( event ) {
			var crop = $(this).data('crop');
			return event.originalEvent.wheelDelta < 0 ? 
				crop.zoomIn() :
				crop.zoomOut();
		} )
	;
```
Options
=======
<table>
	<tr>
		<th>Option</th>
		<th>Type</th>
		<th>Default</th>
		<th>Required</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>width</td><td>integer</td><td>width&nbsp;attr<br> or 320</td><td>no</td>
		<td>Width in pixels of the cropping window</td>
	</tr>
	<tr>
		<td>height</td><td>integer</td><td>height&nbsp;attr<br> or 180</td><td>no</td>
		<td>Height in pixels of the cropping window</td>
	</tr>
	<tr>
		<td>zoom</td><td>integer</td><td>10</td><td>no</td>
		<td>Number of incremental zoom steps. With the default of 10, you have to click the zoom-in button 9 times to reach 100%</td>
	</tr>
	<tr>
		<td>stretch</td><td>float</td><td>1</td><td>no</td>
		<td>Maximum zoom ratio compared to image natural size (values > 1 could result to pixelated images)</td>
	</tr>
	<tr>
		<td>controls</td><td>boolean/text</td><td>"Click to drag"</td><td>no</td>
		<td>If false, no controls will appears. Otherwise controls and text appears on mouse hover</td>
	</tr>
</table>

Event
========
To get crop results, bind a function on crop event.
```javascript
	$( 'img.crop' )
		.on( 'crop', function ( event ) {
			console.log( event.cropX, event.cropY, event.cropW, event.cropH, event.stretch );
		} );
```
cropX, cropY, cropW, cropH, stretch (boolean) values are added to the event passed to this function.

Advanced
========
A reference to the crop object can be accessed like so:
```javascript
	var crop = $( 'img.crop' ).data( 'crop' );
```
You then have access to all the properties and methods used for that specific element.
