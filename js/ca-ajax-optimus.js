var _load   = function(_url,_url_push,_target,is_fix,_width){
    $.ajax({ 
        beforeSend: function(){     
            ca_before_loading(_target)    
        },
        url:_url.replace('#',''),
        success: function(result){
            if(_url_push!==undefined){
                if (window.history.pushState) {    
                    window.history.pushState({
                        url:_url
                    }, '', _url); 
                }
            }
            _result_convert(_target,result,is_fix,_width); 
        }      
    })
}
var _post = function(_data,_url,_url_push,_url_redirect,_target,_is_fix,_width){
    $.ajax({
        type:'POST',
        beforeSend: function(){
            ca_loading();
        },
        url: _url.replace('#',''),
        data: $(_data).serialize(),
        success: function(result){ 
            if(_url_redirect!==undefined){
                _load(_url_redirect,_url_push,_target,_is_fix,_width)
                ca_close_box();
                ca_reset_form();
            }else{
                _result_convert(_target,result,_is_fix,_width)
            }
            ca_notive('Data was submited');
        } 
    })
}
var _method = function(_type,_url,_target,_url_push,_data,_url_redirect,_is_fix,_width){ 
    switch(_type){
        case 'GET':
            $(_data).validation();
            if(!$(_data).validate()){}else{
                $.ajax({
                    type:'GET',
                    beforeSend: function(){
                        ca_loading();   
                    },
                    url:_url.replace('#',''),
                    data: $(_data).serialize(),
                    success: function(result){ 

                        if(_url_redirect!==undefined){
                            _load(_url_redirect,_url_push,_target,_is_fix,_width)
                            ca_close_box(); 
                            ca_reset_form()
                        }else{
                            _result_convert(_target,result,_is_fix,_width)
                        }
                        ca_notive('Data was submited');                        
                    } 
                })
            }
            break;
        case 'POST':
            $(_data).validation();
            if(!$(_data).validate()){}else{
                _post(_data,_url,_url_push,_url_redirect,_target,_is_fix,_width);
            }
            break;
        default:
            _load(_url,_url_push,_target,_is_fix,_width);
            break;
    } 
}
!function ($) {	     
    $(function () {  
        $('html').on('click', '[ca-ajax=true]', function (e) { 
            var $this = $(this)            
            , _type = $this.attr('ca-ajax-type') 
            , _url = ($this.attr('ca-ajax-url')) ? $this.attr('ca-ajax-url') : $this.attr('href')
            , _target = $this.attr('ca-ajax-target')
            , _data = $this.attr('ca-ajax-data')
            , _url_redirect = $this.attr('ca-ajax-redirect') 
            , _url_push = $this.attr('ca-url-push') 
            , _is_fix = ($this.attr('ca-modal-fix')) ? $this.attr('ca-modal-fix') : 'true'
            , _width = ($this.attr('ca-modal-width')) ? $this.attr('ca-modal-width') : '50%'
            e.preventDefault()      
            _method(_type,_url,_target,_url_push,_data,_url_redirect,_is_fix,_width);
        })
        
    })
}(window.jQuery);  
var ca_close_box = function(){ 
    $(".ca-modal-box").remove() 
    $('.ca-modal').remove();
    $(ca_wrapper_+', body').css({
        opacity:1
    });
    
} 
 
var _url_craw = function(){
    var b=window.document.location.hash;
    patern="^(#)";
    var c=new RegExp(patern); 
    if(b.match(c)){ 
        _load(b,'',ca_wrapper_); 
    }
} 
window.addEventListener("hashchange", _url_craw, false); 
$(document).ready(function(){ 
    ca_convert_link($('body').html())
    _url_craw();     
}) 
var ca_convert_link = function(a){
    return a.replace(/ca-ajax-url="|href="+/g,'ca-ajax-url="#') 
}  
var  detect_browser = function(a){
    var b={
        init:function(){
            this.browser=this.searchString(this.dataBrowser)||"An unknown browser";
            this.version=this.searchVersion(navigator.userAgent)||this.searchVersion(navigator.appVersion)||"an unknown version";
            this.OS=this.searchString(this.dataOS)||"an unknown OS"
        },
        searchString:function(a){
            for(var b=0;b<a.length;b++){
                var c=a[b].string;
                var d=a[b].prop;
                this.versionSearchString=a[b].versionSearch||a[b].identity;
                if(c){
                    if(c.indexOf(a[b].subString)!=-1)return a[b].identity
                }else if(d)return a[b].identity
            }
        },
        searchVersion:function(a){
            var b=a.indexOf(this.versionSearchString);
            if(b==-1)return;
            return parseFloat(a.substring(b+this.versionSearchString.length+1))
        },
        dataBrowser:[{
            string:navigator.userAgent,
            subString:"Chrome",
            identity:"Chrome"
        },{
            string:navigator.userAgent,
            subString:"OmniWeb",
            versionSearch:"OmniWeb/",
            identity:"OmniWeb"
        },{
            string:navigator.vendor,
            subString:"Apple",
            identity:"Safari",
            versionSearch:"Version"
        },{
            prop:window.opera,
            identity:"Opera",
            versionSearch:"Version"
        },{
            string:navigator.vendor,
            subString:"iCab",
            identity:"iCab"
        },{
            string:navigator.vendor,
            subString:"KDE",
            identity:"Konqueror"
        },{
            string:navigator.userAgent,
            subString:"Firefox",
            identity:"Firefox"
        },{
            string:navigator.vendor,
            subString:"Camino",
            identity:"Camino"
        },{
            string:navigator.userAgent,
            subString:"Netscape",
            identity:"Netscape"
        },{
            string:navigator.userAgent,
            subString:"MSIE",
            identity:"Explorer",
            versionSearch:"MSIE"
        },{
            string:navigator.userAgent,
            subString:"Gecko",
            identity:"Mozilla",
            versionSearch:"rv"
        },{
            string:navigator.userAgent,
            subString:"Mozilla",
            identity:"Netscape",
            versionSearch:"Mozilla"
        }],
        dataOS:[{
            string:navigator.platform,
            subString:"Win",
            identity:"Windows"
        },{
            string:navigator.platform,
            subString:"Mac",
            identity:"Mac"
        },{
            string:navigator.userAgent,
            subString:"iPhone",
            identity:"iPhone/iPod"
        },{
            string:navigator.platform,
            subString:"Linux",
            identity:"Linux"
        }]
    };
    
    b.init();
    switch(b.browser){
        case"Firefox":case"Mozila":
            if(b.version>=2){
                if(b.OS=="Windows"||b.OS=="Linux"){
                    return a.replace(/ALT|Alt|alt+/g,"ALT+Shift")
                }
                if(b.OS=="Mac"){
                    return a.replace(/ALT|Alt|alt+/g,"Ctrl")
                }else{
                    return a
                }
            }
            break;
        case"Chrome":
            if(b.version>=3){
                if(b.OS=="Linux"){
                    return a.replace(/ALT|Alt|alt+/g,"ALT+Shift")
                }
                if(b.OS=="Mac"){
                    return a.replace(/ALT|Alt|alt+/g,"Ctrl")
                }
                if(b.OS=="Windows"){
                    return a
                }else{
                    return a
                }
            }
            break;
        case"Safari":
            if(b.version>=3){
                if(b.OS=="Mac"){
                    return a.replace(/ALT|Alt|alt+/g,"Ctrl")
                }
                if(b.OS=="Windows"){
                    return a
                }else{
                    return a
                }
            }
            break;
        case"Camino":
            return a.replace(/ALT|Alt|alt+/g,"Ctrl");
            break;
        case"Konqueror":
            return a.replace(/ALT|Alt|alt+/g,"Ctrl");
            break;
        case"Opera":
            return a.replace(/ALT|Alt|alt+/g,"Shift+Esc");
            break;
        default:
            return a;
            break
    } 
} 
$(document).keyup(function(e) { 
    if (e.keyCode == 27) {
        ca_close_box();
    }   // esc
});