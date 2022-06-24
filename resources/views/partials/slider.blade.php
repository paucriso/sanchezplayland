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

<!-- START Slider 1 REVOLUTION SLIDER 6.5.24 --><p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="slider-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;background-image:url(https://sanchezplayland.com/wp-content/uploads/2022/06/slider_bg.png);background-repeat:no-repeat;background-size:cover;background-position:center center;">
  <rs-module id="rev_slider_1_1" style="" data-version="6.5.24">
    <rs-slides>
      <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide 1" data-in="o:0;" data-out="a:false;">
        <img src="images/transparent.png" alt="" width="1920" height="1080" class="rev-slidebg tp-rs-img" data-no-retina>
<!--
        --><rs-layer
          id="slider-1-slide-1-layer-4" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="xo:64px,64px,64px,53px;yo:20px,20px,20px,10px;"
          data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
          data-dim="w:541px,541px,541px,352px;h:357px,357px,357px,232px;"
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
          data-tsh="c:rgba(0,0,0,0.45);h:10px,10px,10px,3px;v:5px,5px,5px,1px;b:15px,15px,15px,5px;"
          data-rsp_ch="on"
          data-xy="xo:702px,702px,702px,114px;yo:163px,163px,163px,277px;"
          data-text="w:normal;s:40,40,40,25;l:50,50,50,25;a:center;"
          data-dim="minh:0px,0px,0px,none;"
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
          data-xy="xo:664px,664px,664px,99px;yo:-7px,-7px,-7px,-11px;"
          data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
          data-dim="w:419px,419px,419px,287px;h:383px,383px,383px,262px;"
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
          data-tsh="c:rgba(0,0,0,0.45);h:10px,10px,10px,3px;v:5px,5px,5px,1px;b:15px,15px,15px,5px;"
          data-rsp_ch="on"
          data-xy="xo:163px,163px,163px,114px;yo:183px,183px,183px,286px;"
          data-text="w:normal;s:40,40,40,25;l:50,50,50,25;a:center;"
          data-dim="minh:0px,0px,0px,none;"
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
          data-xy="xo:511px,511px,511px,171px;yo:4px,4px,4px,7px;"
          data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
          data-dim="w:311px,311px,311px,154px;h:305px,305px,305px,151px;"
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
          data-tsh="c:rgba(0,0,0,0.45);h:10px,10px,10px,3px;v:5px,5px,5px,1px;b:15px,15px,15px,5px;"
          data-rsp_ch="on"
          data-xy="xo:226px,226px,226px,94px;yo:325px,325px,325px,336px;"
          data-text="w:normal;s:40,40,40,25;l:50,50,50,25;a:center;"
          data-dim="w:814px,814px,814px,314px;h:auto,auto,auto,45px;minh:0px,0px,0px,none;"
          data-frame_999="o:0;st:w;"
          style="z-index:11;font-family:'Fredoka One';"
        >Lorem ipsum dolor sit amet consectetur. 
        </rs-layer><!--

        --><rs-layer
          id="slider-1-slide-3-layer-6" 
          data-type="image"
          data-rsp_ch="on"
          data-xy="xo:900px,900px,900px,270px;yo:34px,34px,34px,171px;"
          data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
          data-dim="w:311px,311px,311px,173px;h:273px,273px,273px,152px;"
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
          data-xy="xo:112px,112px,112px,36px;yo:27px,27px,27px,174px;"
          data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
          data-dim="w:311px,311px,311px,166px;h:284px,284px,284px,152px;"
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
        visibilityLevels:"1240,1240,1240,480",
        gridwidth:"1240,1240,1240,480",
        gridheight:"400,400,400,400",
        perspective:600,
        perspectiveType:"global",
        editorheight:"400,768,960,400",
        responsiveLevels:"1240,1240,1240,480",
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
