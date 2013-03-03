var _view_dropdown = function(t,_relative,_target,_scroll){  
    var _make_dropdown= function(){
        $(ca_wrapper_).removeClass('animated').removeClass(ca_animate_)
        var _version = '1.0',  
        _owidth = t.innerWidth(),
        _oheight = t.innerHeight();
        if(_scroll!==undefined){
            var  _oleft = t.offset().left-($(window).scrollLeft()),
            _otop = (t.offset().top-($(window).scrollTop()))
        }else{
            var _oleft = t.offset().left
            _otop = (t.offset().top)
        }
        var $this=$("."+_target); 
        var _odropdown_width =$this.innerWidth(),
        _odropdown_height=t.innerHeight();   
        $this.css({ 
            "list-style":"none", 
            "top" :(_otop +(_odropdown_height))+ "px"        
        }).fadeIn("fast"); 
        if(_relative=='right'){
            $this.css({
                "left" : _oleft-_odropdown_width+_owidth+ "px" 
            }) 
        }
        if(_relative=='left'){
            $this.css({
                "left" : _oleft+ "px" 
            }) 
        }
        $this.css({ 
            "position":"absolute",
            "z-index":'100'
        }) 
    }
    _make_dropdown();
    $(window).resize(function(){
        _make_dropdown();
    }) 
}  
!function ($) {	     
    $(function () {
        var _par = $('[ca-dropdown="true"]')
        jQuery.each(_par, function() {    
            $('.'+$(this).attr('ca-dropdown-target')).hide()
        })
        $('html').on('click', '[ca-dropdown="true"]', function (e) { 
            var $this = $(this)  
            , _id = new Date()
            , _relative = ($this.attr('ca-dropdown-relative')) ? $this.attr('ca-dropdown-relative') : '0'  
            , _target = ($this.attr('ca-dropdown-target')) ? $this.attr('ca-dropdown-target') : 'ca-dropdown-menu' 
            , _init = ($this.attr('ca-dropdown-init')) ? $this.attr('ca-dropdown-init') : '0' 
            , _scroll = $this.attr('ca-dropdown-scroll') 
            if(_init=='1'){
                $('.ca-dropdown-target').hide();   
            } 
            if($this.hasClass('active')){
                $this.removeClass('active'); 
                $('.'+_target).hide();
                $this.attr('_target_dropdown','');
            }else{
                $this.attr('_target_dropdown',''+_id.getTime()+'');
                $this.addClass('active'); 
                _view_dropdown($this,_relative,_target,_scroll) 
            }
            
        })
    })
}(window.jQuery); 
 