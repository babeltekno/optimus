$(function() {
    $.ajaxSetup({
        error: function(jqXHR, exception) {
            o_str_='<div class="ca-modal-header">'+
            '<button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>'+
            '<h2>Error</h2>'+
            '</div>'+
            '<div class="ca-modal-body"><p>';
            c_str_= '</p></div>';
           
            if (jqXHR.status === 0) {
                ca_return_modalbox(o_str_+'Not connect.\n Verify Network.','true','80%'+c_str_); 
            } else if (jqXHR.status == 404) {
                ca_return_modalbox(o_str_+'Requested page not found. [404]','true','80%'+c_str_);
            } else if (jqXHR.status == 500) {
                ca_return_modalbox(o_str_+'Internal Server Error [500].','true','80%'+c_str_); 
            } else if (exception === 'parsererror') {
                ca_return_modalbox(o_str_+'Requested JSON parse failed.','true','80%'+c_str_); 
            } else if (exception === 'timeout') {
                ca_return_modalbox(o_str_+'Time out error.','true','80%'+c_str_); 
            } else if (exception === 'abort') {
                ca_return_modalbox(o_str_+'Ajax request aborted.','true','80%'+c_str_); 
            } else {
                ca_return_modalbox(o_str_+'Uncaught Error.\n' + jqXHR.responseText,'true','80%'+c_str_); 
            } 
        }
    });
});

var ca_before_loading = function(_target){
    $(_target).removeClass(ca_animate_); 
    $('.ca-pop-content').parent().remove();
    ca_loading();     
} 
var ca_reset_form  = function(){
    $('form input, form textarea').val('');
} 
var ca_loading = function(a){ 
    $(".ca-modal-box").remove(); 
    cmd="<div class='ca-modal-box' style='display:none;padding:0px; z-index:1000;'>"+"<div class='ca-modal-content' style='background: transparent; text-align:center;' align='center'>"+ca_loading_+"</div>"+"</div>"
    $(ca_wrapper_).css({
        opacity:0.5
    });
    $('html').append(cmd);
    var _make_loading = function(){
        var b=$(window).height(),c=$(".ca-modal-box").height(),d=(b-c)/2,e=$(window).width(), f=(e-$(".ca-modal-box").width())/2;
        $(".ca-modal-box").css({
            position:'fixed',
            left:f,
            top:d
        }).fadeIn('slow');
    }
    _make_loading()
    $(window).resize(function(){ 
        _make_loading()
    })
} 

var ca_notive = function(text){ 
    $(".ca-modal-box").remove(); 
    cmd="<div class='ca-modal-box' onclick='$(this).remove()' style='padding:0px; z-index:1000;'>"+"<div class='ca-modal-content' style='background: transparent; text-align:center;' align='center'>"+text+"</div>"+"</div>"
    
    $('html').append(cmd);
    var _make_notive = function(){
        var c=$(".ca-modal-box").height(),d=(10),e=$(window).width(), f=(e-$(".ca-modal-box").width())/2;
        $(".ca-modal-box").css({
            position:'fixed',
            left:f,
            top:d
        })
    }
    _make_notive();
    $(window).resize(function(){ 
        _make_notive()
    })
} 

var _result_convert = function(_target,result,is_fix,_width){ 
    ca_close_box();
    result=ca_convert_link(detect_browser(result));
    $(_target).addClass(ca_animate_).html(result).addClass("animated"); 
    (_target=='ca-modalbox') ?  ca_return_modalbox(result,is_fix,_width) : $(_target).html(result);
    ca_sortable();
    prettyPrint(); 
} 
var ca_return_modalbox = function(content,is_fix,_width){
    ca_close_box();
    $("html").append('<div class="ca-modal">&nbsp;</div>');
    $(".ca-modal").append('<div class="ca-modal-box" style="width:'+_width+'">'+"<div class='ca-modal-content'></div>"+"</div>")
    $(".ca-modal-content").append(content)
    var _make_modalbox = function(){
        var b=$('html').width();
        var c=(b-$(".ca-modal-box").width())/2;
        var d=$(window).height();
        var e=(d-$(".ca-modal-box").height())/2;  
        if(is_fix!=='false'){
            $(".ca-modal-box").css({            
                'position':'fixed',
                left:c,
                top:e 
            });  
        }else{
            $(".ca-modal-box").css({
                'position':'absolute',
                left:c,
                top:e 
            });
        }
    }
    _make_modalbox();
    $(window).resize(function(){ 
        _make_modalbox()
    })
    $(".loading").html("");
    $('.ca-modal').css({
        'height' : $('body').height(),
        'min-height' : '100%'
    })
    $('body').css({
        opacity:.1
    }); 
}
