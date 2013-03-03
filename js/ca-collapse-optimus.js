!function ($) {      
    $(function () { 
        var _par = $('.ca-collapse')
        jQuery.each(_par, function() {    
            $(this).find('div.ca-coll-child').hide().first().show()
        })
        $('html').on('click', '.ca-coll-menu', function (e) {
            var $this = $(this) 
            , _parent = ($this.parent()) ? $this.parent() : '0'
            , _speed  = (_parent.attr('ca-coll-speed')) ? _parent.attr('ca-coll-speed') : 'fast'
            , _target = ($this.attr('ca-coll-target')) ? $this.attr('ca-coll-target') : '0'
            if($this.hasClass('active-coll-menu')){
                
            }else{
                $(_parent).find('.ca-coll-menu').removeClass('active-coll-menu');
                $this.addClass('active-coll-menu');
                $(_parent).find('.ca-coll-child').hide(_speed).removeClass('active-coll-content');
                $(_parent).find(_target).slideDown(_speed).addClass('active-coll-content'); 
            }
        })         
    })
}(window.jQuery); 
 