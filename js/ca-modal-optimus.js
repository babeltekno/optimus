!function ($) {	     
    $(function () {
        var _par = $('[ca-modal="true"]')
        jQuery.each(_par, function() {    
            $('#'+$(this).attr('ca-modal-target')).hide()
        })
        $('html').on('click', '[ca-modal="true"]', function (e) {
            var $this = $(this)            
            , _id = new Date()
            , _target = $('#'+$this.attr('ca-modal-target'))
            , _is_fix = ($this.attr('ca-modal-fix')) ? $this.attr('ca-modal-fix') : 'true'
            , _width = ($this.attr('ca-modal-width')) ? $this.attr('ca-modal-width') : '50%'
            , _content = _target.html()  
            ca_close_box();
            ca_return_modalbox(_content,_is_fix,_width)
        })
    })
}(window.jQuery); 