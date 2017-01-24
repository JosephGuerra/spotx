(function($) {
    var wh = window.innerHeight,
        viewXS = window.matchMedia("(max-width: 519px)"), // no animation on mobile

    //intro - carousel
        $carousel1 = $('.carousel1'),
        $carousel2 = $('.carousel2'),
        $carousel3 = $('.carousel3'),
        $carousel4 = $('.carousel4'),
    //section 360 spot
        $first360  = $('#first360'),
        $second360 = $('#second360'),
        $third360  = $('.third360'),
        $fourth360 = $('#fourth360'),
    //section whyspotx?
        $whyspotxHeader     = $('.whyspotx-header'), 
        $whyspotxUnderline  = $('.whyspotx-underline'), 
        $whyspotxHeadercopy = $('.whyspotx-header-headercopy'),
        $textmsg            = $('.textmsg'),
        $sos                = $('.sos'),
        $track              = $('.track'),
        $checkin            = $('.checkin'),
        $social             = $('.social'),
        $sov                = $('.sov'),
        $navigate           = $('.navigate'),
//        $whyspotximage      = $('.textmsg'),
    //section spotxunique
        $sxuHeader          = $('#spotxunique-header'),
        $sxuUnderline       = $('#spotxunique-underline'), 
        $sxuImg             = $('#spotxunique-img'), 
        $circle             = $('.circle'), 
    //section service pricing and coverage
        $serviceHeader      = $('#servicecoverage-header'),
        $serviceUnderline   = $('#servicecoverage-underline'),
        $serviceHeaderCopy  = $('#servicecoverage-header-headercopy'),
        $serviceHeaderCopy2 = $('#servicecoverage-header-headercopy2'),
        $serviceCoverageM   = $('#monthly-service'),
        $coverageMap        = $('#coveragemap-img'),
        $additionalInfo     = $('#moreinfo'),
        $serviceCoverageY   = $('#annual-service'),
    //section tech and support
        $supportBg          = $('.support-bg'),
        $supportHeader      = $('#support-header'),
        $supportUnderline   = $('#support-underline'),
        $supportIncludedHdr = $('#support-included-hdr'),
        $supportStrap       = $('.support-strap'),
        $supportDatacable   = $('.support-datacable'),
        $supportDataText    = $('.support-datacable-text'),
        $supportWalladapter = $('.support-walladapter'),
        $supportSpotX       = $('#support-spotx'),
        $supportQSG         = $('.support-qsg'),
        $supportUserguide   = $('.support-userguide'),
        $supportFirmware    = $('.support-firmware'),
        $supportSupport     = $('.support-support'),        
    //How to get Spot X
        $getspotxHeader     = $('#getspotx-header'),
        $getspotxBG         = $('#howtogetspotx'),
        $getspotxUnderline  = $('#getspotx-underline'),
        $getspotxHdrCopy    = $('#getspotx-headercopy'),
        $getspotxForm       = $('.formContents');
        
        TweenMax.defaultEase = Expo.easeOut;
        
    // initialize ScrollMagic controller
    var ctrl = new ScrollMagic.Controller({
        globalSceneOptions: {
            loglevel: 2,
            force3D:true
        }
    });

    // Create scenes - This will pin the sections so they parallax
    $("section").each(function() {

        new ScrollMagic.Scene({
            triggerElement: this,
            duration: '60%'
        })
        .setPin(this)
        .addTo(ctrl);
    });
  //================ Carousel 
    var tlcarousel = new TimelineMax();
    tlcarousel
        .from($carousel1, .25, {opacity: 0, y: 500})
        .from($carousel2, .25, {opacity: 0, y: 500})
        .from($carousel3, .25, {opacity: 0, y: 500})
        .from($carousel4, .25, {opacity: 0, y: 500});

    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('div#carousel')[0],
        triggerHook: 'onEnter',
        reverse: false
    })
    .setTween(tlcarousel)
    .addTo(ctrl);
 
    //======================= timeline for the SpotX section with the 360 rotatable image
    var tl360 = new TimelineMax();
    tl360
        .fromTo($first360, .5, {opacity: 0, ease: Power4.easeInOut}, {opacity: 1})
        .fromTo($second360, .5, {opacity: 0, ease: Power4.easeInOut}, {opacity: 1})
        .from($third360, .5,  {opacity: 0, yPercent: -5, scale: 0.98})
        .from($fourth360, .5,  {opacity: 0, yPercent: -5, scale: 0.98});
                    

    // SpotX 360 back to stylesheet position
    new ScrollMagic.Scene({
        triggerElement: $('#spotx360')[0],
        reverse: false,
        triggerHook: 'onEnter',        
        offset: wh*0.6
    })
    .setTween(tl360)
    .addTo(ctrl);

   //================ WHY SPOT X? timeline 
    var tlwhySpotX = new TimelineMax();
    tlwhySpotX
        .from($whyspotxHeader, .5, {opacity: 0, y:500})
        .from($whyspotxUnderline, .5, {opacity: 0, y: 500})
        .from($whyspotxHeadercopy, .5, {opacity: 0, y: 500})
        .fromTo($textmsg, .5, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($sos, .75, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($track, .75, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($checkin, .75, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($social, .75, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($sov, .75, {opacity: 0, y: 500}, {opacity:1, y: 0})
        .fromTo($navigate, .75, {opacity: 0, y: 500}, {opacity:1, y: 0});


    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('#whyspotx')[0],
        triggerHook: "onEnter",
        reverse: false,
        offset: wh*0.6 
    })
    .setTween(tlwhySpotX)
    .addTo(ctrl);

  //================ What makes Spot X Unique? timeline 
       
    var tlspotxunique = new TimelineMax();
    tlspotxunique
        .from($sxuHeader, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($sxuUnderline, .5, {opacity: 0, y: 500})
        .from($sxuImg, .5, {opacity: 0, y:500})
        .from($circle, .5, {opacity: 0, scale: 0, y:500});

    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('#spotxunique')[0],
        triggerHook: 'onCenter',
        reverse: false,
        offset: wh*0.6 
    })
    .setTween(tlspotxunique)
    .addTo(ctrl);

    //================ Service Pricing and Coverage timeline 
    var tlservice = new TimelineMax();
    tlservice
        .from($serviceHeader, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($serviceUnderline, .5, {opacity: 0, y: 500})
        .from($serviceHeaderCopy, .5, {opacity: 0, y:500})
        .from($serviceHeaderCopy2, .5, {opacity: 0, scale: 0, y:500})
        .from($serviceCoverageM, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($serviceCoverageY, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($additionalInfo, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($coverageMap, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500});


    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('#servicecoverage')[0],
        triggerHook: 'onEnter',
        reverse: false,
        offset: wh*0.8 
    })
    .setTween(tlservice)
    .addTo(ctrl);

    //================ Technical Support and What's Included timeline 
    var tlsupport = new TimelineMax();
    tlsupport
        .from($supportBg, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($supportHeader, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($supportUnderline, .5, {opacity: 0, y: 500})
        .from($supportIncludedHdr, .5, {opacity: 0, y:500})
        .from($supportStrap, .5, {opacity: 0, scale: 0, y:500})
        .from($supportDatacable, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($supportDataText, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($supportWalladapter, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($supportSpotX, .5, {opacity: 0, scale: 1, transformY: 500, xPercent:-500})
        .from($supportQSG, .5, {opacity: 0, scale: 1, transformY: 500, xPercent:-500})
        .from($supportUserguide , .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($supportFirmware, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500})
        .from($supportSupport, .5, {opacity: 0, scale: 0, transformY: 500, yPercent:500});

    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('#techsupport')[0],
        triggerHook: 'onEnter',
        reverse: false,
        offset: wh*0.8 
    })
    .setTween(tlsupport)
    .addTo(ctrl);

    //================ How to Get Spot X timeline 
    var tlgetspotx = new TimelineMax();
    tlgetspotx
        .from($getspotxHeader, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($getspotxBG, .5, {opacity: 0, ease: Power4.easeInOut, y:500})
        .from($getspotxUnderline, .5, {opacity: 0, y: 500})
        .from($getspotxHdrCopy, .5, {opacity: 0, y:500})
        .from($getspotxForm, .5, {opacity: 0, scale: 0, y:500});

    // Why SpotX onto screen
    new ScrollMagic.Scene({
        triggerElement: $('#howtogetspotx')[0],
        triggerHook: 'onEnter',
        reverse: false,
        offset: wh*0.8 
    })
    .setTween(tlgetspotx)
    .addTo(ctrl);
    
})(jQuery);