var _view_pop = function(_id,t,_top,_left,_right,_bottom,_header,_content,_icon){ 
    $(ca_wrapper_).removeClass('animated').removeClass(ca_animate_)
    var _make_popover = function(){
        var _version = '1.0', 
        _oleft = t.offset().left,
        _otop = t.offset().top,
        _owidth = t.width(),
        _oheight = t.height() 
        $('html').append("<div id='"+_id+"' style='display:none'><div class='ca-pop-header'><span class='"+_icon+"'></span>&nbsp;"+_header+"</div><div class='ca-pop-content'>"+_content+"</div></div>");  
        var $this=$("#"+_id);
        var _opop_width =$this.width(),
        _opop_height=$this.height();   
        if(_left!='0'){ 
            $("#"+_id).css({ 
                "top" :(_otop)-(_opop_height/2)+ "px",   
                "left" : _oleft -(_opop_width + 30)  + "px" 
            }).append('<span class="icon-caret-right t-carret"></span>');
            $("#"+_id+" span.t-carret").css({
                "position":"absolute",  
                "right":-5,
                "top":(_opop_height/2)+5
            }) 
        } 
        if(_right!='0'){ 
            $("#"+_id).css({ 
                "top" :(_otop)-(_opop_height/2)+ "px",  
                "left" :_owidth + _oleft + 25 + "px" 
            }).append('<span class="icon-caret-left t-carret"></span>');
            $("#"+_id+" span.t-carret").css({
                "position":"absolute",  
                "left":-5,
                "top":(_opop_height/2)+5
            })
        }
        if(_top!='0'){  
            $("#"+_id).css({
                "left" : (_oleft)-(_opop_width/2)+(_owidth/2)+ "px",
                "top" :(_otop -((_oheight*2) +_opop_height))-5+ "px"           
            }).append('<span class="icon-caret-down t-carret"></span>');
            $("#"+_id+" span.t-carret").css({
                "position":"absolute",
                "bottom": -15, 
                "left":(_opop_width / 2)
            })
        }
        if(_bottom!='0'){ 
            $("#"+_id).css({ 
                "top" :(_otop +(_oheight*2))+3+ "px",  
                "left" : _oleft-((_opop_width/2))+(_owidth/2)+ "px"
            }).append('<span class="icon-caret-up t-carret"></span>');
            $("#"+_id+" span.t-carret").css({
                "position":"absolute",
                "top": -14, 
                "left":(_opop_width / 2)
            })
        }
        $("#"+_id).css({
            "z-index":10, 
            "position":"absolute", 
            "display":"none",
            "background":"#FFF"
        }).fadeIn("fast");
        $("#"+_id+" .ca-pop-header").css({ 
            "padding":"5px"
        })
        $("#"+_id+" .ca-pop-content").css({ 
            "padding":"10px"
        })
    }
    _make_popover();
    $(window).resize(function(){
        $("#"+_id).remove();
        t.removeClass('active');
    })
} 
 
!function ($) {	     
    $(function () {
        
        $('html').on('click', '[ca-pop="true"]', function (e) {
            var $this = $(this)            
            , _id = new Date()
            , _left = ($this.hasClass('ca-pop-left')) ? $this.hasClass('ca-pop-left') : '0'
            , _icon = ($this.attr('ca-pop-icon')) ? $this.attr('ca-pop-icon') : '0'
            , _top = ($this.hasClass('ca-pop-top')) ? $this.hasClass('ca-pop-top') : '0'
            , _right = ($this.hasClass('ca-pop-right')) ? $this.hasClass('ca-pop-right') : '0'
            , _bottom = ($this.hasClass('ca-pop-bottom')) ? $this.hasClass('ca-pop-bottom') : '0'
            , _content = ($this.attr('ca-pop-content')) ? $this.attr('ca-pop-content') : 'content popover' 
            , _header = ($this.attr('ca-pop-header')) ? $this.attr('ca-pop-header') : 'header popover'; 
            
            if($this.hasClass('active')){
                $(this).removeClass('active');
                var _id_pop = $this.attr('_id_pop');
                $('#'+_id_pop).remove();
                $(this).attr('_id_pop','');
            }else{
                $(this).attr('_id_pop',''+_id.getTime()+'');
                $(this).addClass('active');
                _view_pop(_id.getTime(),$this,_top,_left,_right,_bottom,_header,_content,_icon) 
            }
            
        })
    })
}(window.jQuery); 
 