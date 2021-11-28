jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,

        width:777,

        height:360,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        fullwidth:false,

        donotresize:true,

        enabletouchswipe:true,

        fullscreen:false,

        autoplayvideo:false,

        addmargin:true,

        randomplay:false,

        isresponsive:false,

        pauseonmouseover:false,

        playvideoonclickthumb:true,

        slideinterval:5000,

        transitiononfirstslide:false,

        scalemode:"fit",

        loop:0,

        autoplay:true,

        navplayvideoimage:"play-32-32-0.png",

        navpreviewheight:60,

        timerheight:2,

        descriptioncssresponsive:"font-size:12px;",

        shownumbering:false,

        skin:"Ribbon",

        addgooglefonts:false,

        navshowplaypause:true,

        navshowplayvideo:true,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbnavigationarrowimageheight:32,

        navpreviewarrowheight:8,

        lightboxshownavigation:false,

        showshadow:false,

        navfeaturedarrowimagewidth:16,

        navpreviewwidth:120,

        googlefonts:"",

        navborderhighlightcolor:"",

        bordercolor:"#ffffff",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        lightboxthumbwidth:80,

        navthumbnavigationarrowimagewidth:32,

        navthumbtitlehovercss:"text-decoration:underline;",

        texteffectresponsivesize:600,

        navcolor:"#999999",

        arrowwidth:32,

        texteffecteasing:"easeOutCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:4,

        navarrowimage:"navarrows-28-28-0.png",

        ribbonimage:"ribbon_topleft-1.png",

        navwidth:16,

        navheight:16,

        arrowimage:"../img/arrows-32-32-0.png",

        timeropacity:0.6,

        arrowhideonmouseleave:1000,

        navthumbnavigationarrowimage:"../img/carouselarrows-32-32-0.png",

        navshowplaypausestandalone:false,

        texteffect1:"slide",

        navpreviewbordercolor:"#ffffff",

        texteffect2:"slide",

        customcss:"",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"mouseover",

        navthumbtitleheight:20,

        textpositionmargintop:24,

        buttoncssresponsive:"",

        navswitchonmouseover:false,

        playvideoimage:"playvideo-64-64-0.png",

        arrowtop:50,

        textstyle:"static",

        playvideoimageheight:64,

        navfonthighlightcolor:"#666666",

        showbackgroundimage:false,

        navpreviewborder:4,

        navshowplaypausestandaloneheight:28,

        shadowcolor:"#aaaaaa",

        navbuttonshowbgimage:true,

        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",

        textbgcss:"display:none;",

        textpositiondynamic:"bottomleft",

        navpreviewarrowwidth:16,

        playvideoimagewidth:64,

        buttoncss:"display:block; position:relative; margin-top:8px;",

        navshowpreviewontouch:false,

        bottomshadowimagewidth:96,

        showtimer:true,

        navradius:0,

        navmultirows:false,

        navshowpreview:true,

        navmarginy:16,

        navmarginx:16,

        navfeaturedarrowimage:"featuredarrow-16-8-0.png",

        showribbon:false,

        navstyle:"bullets",

        textpositionmarginleft:24,

        descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; margin-top:8px;",

        navplaypauseimage:"navplaypause-28-28-0.png",

        backgroundimagetop:-10,

        timercolor:"#ffffff",

        numberingformat:"%NUM/%TOTAL ",

        navdirection:"horizontal",

        navfontsize:12,

        navhighlightcolor:"#333333",

        texteffectdelay1:1000,

        navimage:"../img/bullet-16-16-0.png",

        texteffectdelay2:1500,

        texteffectduration1:600,

        navshowplaypausestandaloneautohide:false,

        texteffectduration2:600,

        navbuttoncolor:"#999999",

        navshowarrow:true,

        texteffectslidedirection:"left",

        navshowfeaturedarrow:false,

        lightboxbarheight:64,

        titlecss:"display:block; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;",

        ribbonimagey:-8,

        ribbonimagex:-8,

        texteffectslidedistance1:120,

        texteffectslidedistance2:120,

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        navshowbuttons:false,

        lightboxthumbtopmargin:12,

        titlecssresponsive:"font-size:12px;",

        navshowplaypausestandalonewidth:28,

        navfeaturedarrowimageheight:8,

        navopacity:0.8,

        textpositionmarginright:24,

        backgroundimagewidth:120,

        textautohide:true,

        navthumbtitlewidth:120,

        navpreviewposition:"top",

        texteffectseparate:false,

        arrowheight:32,

        arrowmargin:8,

        texteffectduration:600,

        bottomshadowimage:"../img/bottomshadow-110-95-2.png",

        border:0,

        lightboxshowdescription:false,

        timerposition:"bottom",

        navfontcolor:"#333333",

        navthumbnavigationstyle:"arrow",

        borderradius:0,

        navbuttonhighlightcolor:"#333333",

        textpositionstatic:"bottom",

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"imageonly",

        texteffecteasing1:"easeOutCubic",

        textcss:"display:block; padding:12px; text-align:left;",

        navbordercolor:"#ffffff",

        navpreviewarrowimage:"previewarrow-16-8-0.png",

        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",

        showbottomshadow:true,

        texteffectslidedistance:30,

        texteffectdelay:500,

        textpositionmarginstatic:0,

        backgroundimage:"",

        navposition:"bottom",

        texteffectslidedirection1:"right",

        navborder:4,

        textformat:"Bottom left",

        texteffectslidedirection2:"right",

        bottomshadowimagetop:95,

        texteffectresponsive:true,

        shadowsize:5,

        lightboxthumbbottommargin:8,

        textpositionmarginbottom:24,

        lightboxshowtitle:true,

        slice: {

            checked:true,

            effectdirection:0,

            effects:"up,down,updown",

            slicecount:10,

            duration:1500,

            easing:"easeOutCubic"

        },

        transition:"slice",

        scalemode:"fit",

        isfullscreen:false,

        textformat: {



        }

    });

});