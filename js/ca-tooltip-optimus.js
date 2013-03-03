var _view_tip = function(t,_top,_left,_right,_bottom,_title,_icon){
    $(ca_wrapper_).removeClass('animated').removeClass(ca_animate_)
    var _version = '1.0', 
    _oleft = t.offset().left,
    _otop = t.offset().top,
    _owidth = t.innerWidth(),
    _oheight = t.innerHeight() 
    $("html").append("<p id='ca-tooltip' style='display:none;position:'><span class='"+_icon+"'></span>&nbsp;"+_title+"</p>");  
    var $this=$("p#ca-tooltip");
    var _otip_width =$this.innerWidth(), 
    _otip_height=$this.innerHeight();   
    if(_left!='0'){ 
        $("#ca-tooltip").css({ 
            "top" :(_otop-(_oheight/2)-2)+ "px",  
            "left" : _oleft -(_otip_width+5)  + "px" 
        }).append('<span class="icon-caret-right t-carret"></span>');
        $("span.t-carret").css({
            "position":"absolute",  
            "right":-4
        })
        
    }
    if(_top!='0'){  
        $("#ca-tooltip").css({
            "left" : _oleft-((_otip_width/2))+(_owidth/2)+ "px",
            "top" :(_otop -((_oheight) +_otip_height))+5+ "px"         
        }).append('<span class="icon-caret-down t-carret"></span>');
        $("span.t-carret").css({
            "position":"absolute",
            "bottom": -12, 
            "left":(_otip_width / 2)
        })
    }
    if(_right!='0'){ 
        $("#ca-tooltip").css({ 
            "top" :(_otop-(_oheight/2)-2)+ "px",
            "left" :_owidth + _oleft + 9 + "px" 
        }).append('<span class="icon-caret-left t-carret"></span>');
        $("span.t-carret").css({
            "position":"absolute",  
            "left":-4
        })
    }
    if(_bottom!='0'){ 
        $("#ca-tooltip").css({ 
            "top" :(_otop + _oheight) -7 + "px",  
            "left" : _oleft-((_otip_width/2))+(_owidth/2)+ "px"
        }).append('<span class="icon-caret-up t-carret"></span>');
        $("span.t-carret").css({
            "position":"absolute",
            "top": -11, 
            "left":(_otip_width / 2)
        })
    }
    $("#ca-tooltip").css({
        position:'absolute',
        "z-index":'1000'  
    }).fadeIn("fast");
}  
!function ($) {	     
    $(function () {  
        $('html').on('hover', '[class*="ca-tip"]', function (e) {
            var $this = $(this)            
            , _left = ($this.hasClass('ca-tip-left')) ? $this.hasClass('ca-tip-left') : '0'
            , _icon = ($this.attr('ca-tip-icon')) ? $this.attr('ca-tip-icon') : '0'
            , _top = ($this.hasClass('ca-tip-top')) ? $this.hasClass('ca-tip-top') : '0'
            , _right = ($this.hasClass('ca-tip-right')) ? $this.hasClass('ca-tip-right') : '0'
            , _bottom = ($this.hasClass('ca-tip-bottom')) ? $this.hasClass('ca-tip-bottom') : '0'
            , _title = ($this.attr('ca-original-title')) ? $this.attr('ca-original-title') : 'codeanalytic general tooltip' 
            _view_tip($this,_top,_left,_right,_bottom,_title,_icon)
        })
        $('html').on('mouseleave', '[class*="ca-tip"]', function (e) {
            $('p#ca-tooltip').remove();
        }) 
    })
}(window.jQuery); 
 