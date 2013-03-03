!function ($) {	     
    $(function () { 
        var _par = $('.ca-tab')
        jQuery.each(_par, function() {    
            $($(this).attr('ca-tab-parent')).find('.ca-child-tab').hide().first().show()
        })
        $('html').on('click', '.ca-tab a', function (e) { 
            var $this = $(this) 
            , _parent = ($this.parent().attr('ca-tab-parent')) ? $this.parent().attr('ca-tab-parent') : '0' 
            , _target = ($this.attr('ca-tab-target')) ? $this.attr('ca-tab-target') : '0'
            , _animation = ($this.parent().attr('ca-tab-animation')) ? $this.parent().attr('ca-tab-animation') : 'flash'
            $this.parent().find('a').removeClass('active');
            $this.addClass('active')
            $(_parent+' .ca-child-tab').removeClass(_animation).removeClass('active').hide().addClass("animated"); ;  
            $(_parent+' '+_target).addClass(_animation).addClass('active').show().addClass("animated"); 
        })         
    })
}(window.jQuery); 
 