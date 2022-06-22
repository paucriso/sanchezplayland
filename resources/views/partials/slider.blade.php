@section('revheader')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/rs6.css">
<script>
  window.RS_MODULES = window.RS_MODULES || {};
  window.RS_MODULES.modules = window.RS_MODULES.modules || {};
  window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
  window.RS_MODULES.defered = true;
  window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
  window.RS_MODULES.type = 'compiled';
</script>
      <script src="js/rbtools.min.js"></script>
          <script src="js/rs6.min.js"></script>
          
  <script>function setREVStartSize(e){
  //window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
    try {
      var pw = document.getElementById(e.c).parentNode.offsetWidth,
        newh;
      pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
      e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
      e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
      e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
      e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
      e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
      e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
      e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
      if(e.layout==="fullscreen" || e.l==="fullscreen")
        newh = Math.max(e.mh,window.RSIH);
      else{
        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
        for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
        e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
        for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                  
        var nl = new Array(e.rl.length),
          ix = 0,
          sl;
        e.tabw = e.tabhide>=pw ? 0 : e.tabw;
        e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
        e.tabh = e.tabhide>=pw ? 0 : e.tabh;
        e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
        for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
        sl = nl[0];
        for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
        var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
        newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
      }
      var el = document.getElementById(e.c);
      if (el!==null && el) el.style.height = newh+"px";
      el = document.getElementById(e.c+"_wrapper");
      if (el!==null && el) {
        el.style.height = newh+"px";
        el.style.display = "block";
      }
    } catch(e){
      console.log("Failure at Presize of Slider:" + e)
    }
  //});
  };</script>
@endsection

<!-- START Slider 1 REVOLUTION SLIDER 6.5.24 -->
<p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="slider-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;background-image:url(https://sanchezplayland.com/wp-content/uploads/2022/06/slider_bg.png);background-repeat:no-repeat;background-size:cover;background-position:center center;">
  <rs-module id="rev_slider_1_1" data-version="6.5.24">
    <rs-slides>
      <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide 1" data-in="o:0;" data-out="a:false;">
        <img src="images/transparent.png" alt="" width="1920" height="1080" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
        --><rs-layer
          id="slider-1-slide-1-layer-4" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="x:64px;y:20px;"
          data-text="w:normal;"
          data-dim="w:541px;h:357px;"
          data-frame_0="x:left;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:8;"
        ><img src="images/sirenita_t.png" alt="" class="tp-rs-img" width="720" height="475" data-no-retina> 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-1-layer-5" 
          data-type="text"
          data-color="#fff"
          data-tsh="c:rgba(0,0,0,0.45);h:10px;v:5px;b:15px;"
          data-rsp_ch="on"
          data-xy="x:702px;y:163px;"
          data-text="w:normal;s:40;l:50;a:center;"
          data-dim="minh:0px;"
          data-frame_0="x:right;"
          data-frame_0_words="d:5;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:9;font-family:'Fredoka One';"
        >Lorem ipsum dolor <br />
sit amet consectetur <br />
adipiscing elit. 
        </rs-layer><!--
-->						</rs-slide>
      <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide 2" data-in="o:0;" data-out="a:false;">
        <img src="images/transparent.png" alt="" width="1920" height="1080" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
        --><rs-layer
          id="slider-1-slide-2-layer-4" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="x:664px;y:-7px;"
          data-text="w:normal;"
          data-dim="w:419px;h:383px;"
          data-frame_0="x:right;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:8;"
        ><img src="images/spiderman_t.png" alt="" class="tp-rs-img" width="722" height="660" data-no-retina> 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-2-layer-5" 
          data-type="text"
          data-color="#fff"
          data-tsh="c:rgba(0,0,0,0.45);h:10px;v:5px;b:15px;"
          data-rsp_ch="on"
          data-xy="x:163px;y:183px;"
          data-text="w:normal;s:40;l:50;a:center;"
          data-dim="minh:0px;"
          data-frame_0="x:left;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:9;font-family:'Fredoka One';"
        >Lorem ipsum dolor <br />
sit amet consectetur <br />
adipiscing elit. 
        </rs-layer><!--
-->						</rs-slide>
      <rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide 3" data-in="o:0;" data-out="a:false;">
        <img src="images/transparent.png" alt="" width="1920" height="1080" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
        --><rs-layer
          id="slider-1-slide-3-layer-4" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="x:511px;y:4px;"
          data-text="w:normal;"
          data-dim="w:311px;h:305px;"
          data-frame_0="y:bottom;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:10;"
        ><img src="images/castillo_t.png" alt="" class="tp-rs-img" width="678" height="664" data-no-retina> 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-3-layer-5" 
          data-type="text"
          data-color="#fff"
          data-tsh="c:rgba(0,0,0,0.45);h:10px;v:5px;b:15px;"
          data-rsp_ch="on"
          data-xy="x:226px;y:325px;"
          data-text="w:normal;s:40;l:50;a:center;"
          data-dim="w:814px;minh:0px;"
          data-frame_999="o:0;st:w;"
          style="z-index:11;font-family:'Fredoka One';"
        >Lorem ipsum dolor sit amet consectetur. 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-3-layer-6" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="x:900px;y:34px;"
          data-text="w:normal;"
          data-dim="w:311px;h:273px;"
          data-frame_0="x:right;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:8;"
        ><img src="images/caballo.png" alt="" class="tp-rs-img" width="682" height="598" data-no-retina> 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-3-layer-7" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="x:112px;y:27px;"
          data-text="w:normal;"
          data-dim="w:311px;h:284px;"
          data-frame_0="x:left;"
          data-frame_1="sp:1000;"
          data-frame_999="o:0;st:w;"
          style="z-index:9;"
        ><img src="images/trolls.png" alt="" class="tp-rs-img" width="629" height="575" data-no-retina> 
        </rs-layer><!--
-->						</rs-slide>
    </rs-slides>
  </rs-module>
  <script>
    
  </script>
<script>
if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->

<script>
  var	tpj = jQuery;
  if(window.RS_MODULES === undefined) window.RS_MODULES = {};
  if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
  RS_MODULES.modules["revslider11"] = {once: RS_MODULES.modules["revslider11"]!==undefined ? RS_MODULES.modules["revslider11"].once : undefined, init:function() {
    window.revapi1 = window.revapi1===undefined || window.revapi1===null || window.revapi1.length===0  ? document.getElementById("rev_slider_1_1") : window.revapi1;
    if(window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length==0) { window.revapi1initTry = window.revapi1initTry ===undefined ? 0 : window.revapi1initTry+1; if (window.revapi1initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider11"].init()}); return;}
    window.revapi1 = jQuery(window.revapi1);
    if(window.revapi1.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_1_1"); return;}
    revapi1.revolutionInit({
        revapi:"revapi1",
        DPR:"dpr",
        sliderLayout:"fullwidth",
        duration:"4000ms",
        visibilityLevels:"1240,1024,778,480",
        gridwidth:1240,
        gridheight:400,
        perspective:600,
        perspectiveType:"global",
        editorheight:"400,768,960,720",
        responsiveLevels:"1240,1024,778,480",
        progressBar: {
          size:5,
          x:0,
          y:0
          },
        navigation: {
          onHoverStop:false
        },
        viewPort: {
          global:false,
          globalDist:"-200px",
          enable:false
        },
        fallbacks: {
          allowHTML5AutoPlayOnAndroid:true
        },
    });
    
  }} // End of RevInitScript
  if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>