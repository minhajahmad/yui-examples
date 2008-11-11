<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Drag and Drop - Staying in a Region</title>

<style type="text/css">
/*margin and padding on body element
  can introduce errors in determining
  element position and are not recommended;
  we turn them off as a foundation for YUI
  CSS treatments. */
body {
	margin:0;
	padding:0;
}
</style>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.5.1/build/fonts/fonts-min.css" />
<script type="text/javascript" src="http://yui.yahooapis.com/2.5.1/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.5.1/build/dragdrop/dragdrop-min.js"></script>


<!--begin custom header content for this example-->
<style type="text/css">

.dd-demo {
    position: relative;
    text-align: center;
    color: #fff;
    cursor: move;
    height: 60px;
    width: 60px;
    padding: 0;
    margin: 0;
}

.dd-demo div {
    border: 1px solid black;
    height: 58px;
    width: 58px;
}

#dd-demo-canvas1 {
    padding: 55px;
    background-color: #7E5B60;
    border: 1px solid black;
}
#dd-demo-canvas2 {
    padding: 25px;
    background-color: #566F4E;
    border: 1px solid black;
}
#dd-demo-canvas3 {
    padding: 15px;
    background-color: #6D739A;
    border: 1px solid black;
}

#dd-demo-1 { 
    background-color:#6D739A;top:5px; left:5px;
}

#dd-demo-2 { 
    background-color:#566F4E;top:50px; left:100px;
}

#dd-demo-3 {
    background-color:#7E5B60;top:-100px; left:200px;
}

</style>


<!--end custom header content for this example-->

</head>

<body class=" yui-skin-sam">

<h1>Drag and Drop - Staying in a Region</h1>

<div class="exampleIntro">
	<p>This example shows how to keep draggable elements from being dragged out of a region.</p>
<p>The three elements below will not be able to be dragged beyond the borders of their own colored elements.</p>

			
</div>

<!--BEGIN SOURCE CODE FOR EXAMPLE =============================== -->

<div id="dd-demo-canvas1">
    <div id="dd-demo-canvas2">
        <div id="dd-demo-canvas3">
            <div id="dd-demo-1" class="dd-demo"><div>1</div></div>
            <div id="dd-demo-2" class="dd-demo"><div>2</div></div>
            <div id="dd-demo-3" class="dd-demo"><div>3</div></div>
        </div>
    </div>
</div>

<script type="text/javascript">

(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event,
        dd1, dd2, dd3;


    YAHOO.example.DDRegion = function(id, sGroup, config) {
        this.cont = config.cont;
        YAHOO.example.DDRegion.superclass.constructor.apply(this, arguments);
    };

    YAHOO.extend(YAHOO.example.DDRegion, YAHOO.util.DD, {
        cont: null,
        init: function() {
            //Call the parent's init method
            YAHOO.example.DDRegion.superclass.init.apply(this, arguments);
            this.initConstraints();

            Event.on(window, 'resize', function() {
                this.initConstraints();
            }, this, true);
        },
        initConstraints: function() {
            //Get the top, right, bottom and left positions
            var region = Dom.getRegion(this.cont);

            //Get the element we are working on
            var el = this.getEl();

            //Get the xy position of it
            var xy = Dom.getXY(el);

            //Get the width and height
            var width = parseInt(Dom.getStyle(el, 'width'), 10);
            var height = parseInt(Dom.getStyle(el, 'height'), 10);

            //Set left to x minus left
            var left = xy[0] - region.left;

            //Set right to right minus x minus width
            var right = region.right - xy[0] - width;

            //Set top to y minus top
            var top = xy[1] - region.top;

            //Set bottom to bottom minus y minus height
            var bottom = region.bottom - xy[1] - height;

            //Set the constraints based on the above calculations
            this.setXConstraint(left, right);
            this.setYConstraint(top, bottom);

        }
    });


    Event.onDOMReady(function() {
        dd1 = new YAHOO.example.DDRegion('dd-demo-1', '', { cont: 'dd-demo-canvas3' });
        dd2 = new YAHOO.example.DDRegion('dd-demo-2', '', { cont: 'dd-demo-canvas2' }) ;
        dd3 = new YAHOO.example.DDRegion('dd-demo-3', '', { cont: 'dd-demo-canvas1' });
    });

})();

</script>

<!--END SOURCE CODE FOR EXAMPLE =============================== -->


<!--MyBlogLog instrumentation-->
<script type="text/javascript" src="http://track2.mybloglog.com/js/jsserv.php?mblID=2007020704011645"></script>

</body>
</html>
<!-- spaceId: 792404935 -->
<!-- VER-391 -->
<!-- com1.devnet.scd.yahoo.com uncompressed/chunked Sun Mar 23 18:04:21 PDT 2008 -->
