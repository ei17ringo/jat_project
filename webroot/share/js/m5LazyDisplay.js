/**
* m5LazyDisplay
*
* @author nori (norimania@gmail.com)
* @copyright 5509 (http://5509.me/)
* @license The MIT License
* @link https://github.com/5509/m5lazydisplay
*
* @modified: 2011/03/17 10:59:28.
*
*/
;(function($) {

    $.fn.m5LazyDisplay = function(options) {
        var _this = this,
            thisLen = _this.length,
            scrollPos = document.body.scrollTop || document.documentElement.scrollTop,
            clientHeight = $("html").attr("clientHeight"),
            line = clientHeight,
            c = $.extend({
                posFix : 0,
                duration : 400
            }, options),
            imgObjs = [],
            currentImg = 0;
            
        for ( var i = 0; i < thisLen; i++ ) {
            imgObjs[i] = {};
            imgObjs[i].y = $(_this[i]).offset().top;
            imgObjs[i].obj = $(_this[i]);
            
            if ( (scrollPos + clientHeight) < imgObjs[i].y ) {
                imgObjs[i].obj.css("opacity", 0);
            } else {
                currentImg++;
            }
        }
        
        imgObjs.sort(
            function(a, b) {
                return a.y - b.y;
            }
        );
        
        $(window)
            .resize(function() {
                clientHeight = $("html").attr("offsetHeight");
            })
            .bind("scroll.LazyDisplayScroll", function() {
                if ( currentImg === thisLen ) {
                    $(window).unbind("scroll.LazyDisplayScroll");
                    return false;
                }
                scrollPos = document.body.scrollTop || document.documentElement.scrollTop;
                while ( imgObjs[currentImg].y <= (scrollPos + c.posFix + clientHeight) ) {
                    imgObjs[currentImg].obj.fadeTo(c.duration, 1);
                    currentImg++;
                    if ( currentImg === thisLen ) {
                        $(window).unbind("scroll.LazyDislayscroll");
                        break;
                    }
                }
            });
    }

}(jQuery));