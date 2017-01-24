            $(document).ready(function (){
                var viewXS = window.matchMedia("(max-width: 519px)");    
                
                priceTable();
                
                $(function(){
                    $("section#inthenews").load("data/news.txt");
                });
                
                $('.whyspotx-icon').each(function() {
                    var value = $(this).attr("src").split('_'); // get the root of the image name
                    var root = value[0]; // should result in first part of image name (e.g. "img/text")
                    $(this)
                        .mouseover(function(e) { 
                        var src     = $(this).attr("src").match(/[^\.]+/) + "over.png";
                        var spotxscreen  = root + "screen.jpg"; 
                        $('#whyspotximage').attr("src",spotxscreen);
                        $(this).attr("src", src);
                        e.preventdefault;
                        })
                        .mouseout(function() {
                        var src = $(this).attr("src").replace("over.png", ".png");
                        $(this).attr("src", src);
                        });
                });   

            if (!viewXS.matches) {
                
                // Add event handlers for svg animation of lines in the "What makes spotX unique?"
                $('.circle').each(function() {
                    $(this)
                        .mouseover(function(e) {
                            var svg = $(this).find("path").first();
                            $(this).find("svg").first().removeClass("isHidden");
                            var div = $(this).children('div.spotxfeature');
                            var tl = new TimelineMax();
                            //create a timeline with 2 tweens that draw 2 separate strokes
                            tl.add(createLineTween(svg[0]), "-=1");
                            tl.add(TweenLite.to(div, .25, {opacity: 1, display:'block'}) );
                            div.removeClass('isHidden');
                            TweenLite.set(div, {clearProps:"all"});
                            e.preventDefault;
                        })
                        .mouseout(function(e) {
                            var txt = $(this).children('div.spotxfeature');
                            txt.addClass('isHidden');
                            txt.hide();
                            $(this).find("svg").first().addClass('isHidden');
                            e.preventDefault;
                        });
                });
                
            } else {
                $('.circle').each(function() {
                    $(this)
                        .mouseover(function(e) {
                            var myId = $(this).attr("id");
                            var myClass = myId.substr(myId.indexOf("-") + 1);
                            var div = $('div#' +  myClass + "-mobile");
                            div.removeClass('isHidden');
                            e.preventDefault;
                        })
                        .mouseout(function(e) {
                            var myId = $(this).attr("id");
                            var myClass = myId.substr(myId.indexOf("-") + 1);
                            var div = $('div#' +  myClass + "-mobile");
                            div.addClass('isHidden');
                            e.preventDefault;
                        });
                });
                
            }
                //this function creates a single tween that animates the stroke of an svg
                function createLineTween(svg) { 
                    var pathObject = {length:0, pathLength:svg.getTotalLength()}; 
                    var tween = TweenLite.to(pathObject, .25, {length:pathObject.pathLength, onUpdate:drawLine, onUpdateParams:[pathObject, svg], immediateRender:true});
                    return tween;
                };
                //update stroke   
                function drawLine(obj, svg) {
                    svg.style.strokeDasharray = [obj.length, obj.pathLength].join(' ');
                };
                $('#contactus_form').validate();
                function priceTable() {
                    $('th, td').hover(function () {
                        var $table = $(this).closest('table');
                        var $cell = $(this).index() + 1;
                        $table.find('col:nth-child(' + $cell + ')').removeClass('col-default');
                        $table.find('col:nth-child(' + $cell + ')').next().removeClass('col-default');
                        $table.find('col:nth-child(' + $cell + ')').prev().removeClass('col-default');
                        $table.find('col:nth-child(' + $cell + ')').addClass('col-highlight');
                        $table.find('.service-fee td:nth-child(' + ($(this).index() + 1) + ')').addClass('fee-highlight');
                    }, function () {
                        var $table = $(this).closest('table');
                        var $cell = $(this).index() + 1;
                        $table.find('.service-fee td:nth-child(' + $cell + ')').removeClass('fee-highlight');
                        $table.find('col:nth-child(' + $cell + ')').removeClass('col-highlight');
                        $table.find('col:nth-child(' + $cell + ')').prev().addClass('col-default');
                        $table.find('col:nth-child(' + $cell + ')').next().addClass('col-default');
                        $table.find('col:nth-child(' + $cell + ')').addClass('col-default');
                });	
}
//function fontResize(){
//    var perc = parseInt($(window).width())/125;
//    $('body').css('font-size',perc);
//}
//    fontResize();
//
//$(window).resize(function () {
//    fontResize();
//});                
            });


