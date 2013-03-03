 
// set chek table
var _ca_set_check = function(_ck){
    if($(_ck).attr('checked')){
        $(_ck).removeAttr('checked').parent().parent().css({
            'opacity':'1'
        });
    }else{
        $(_ck).attr('checked','checked').parent().parent().css({
            'opacity':'0.6'
        });
        if($(_ck).parent().find("td input:checked").length==0){ 
            $('[crud-name=delete],[crud-name=update]').removeAttr('disabled');
        }else{
            $('[crud-name=delete],[crud-name=update]').attr('disabled','disabled');
        }
    }
}
var _crud_cek = function(){
    if($('body').find("td input:checked").length>0){ 
        $('[crud-name=delete],[crud-name=update]').removeAttr('disabled');
    }else{
        $('[crud-name=delete],[crud-name=update]').attr('disabled','disabled');
    }
}
!function ($) {
    $(function () {
        $('html').on('click',"[type='checkbox']",function(e){
            var $this = $(this);
            if($this.parent().parent().attr('ca-table-check-this')!==undefined){
                _ca_set_check(this);
                _crud_cek();
            }
        });
        $('html').on('click', '[ca-table-check-this]', function (e) {
            var $this = $(this),_ck =  $this.find("[type='checkbox']");
            _ca_set_check(_ck);
            _crud_cek();
        });
        $('html').on('click', '[ca-table-check-all=true]', function (e) {
            var $this = $(this),_parent =  $this.parent().parent().parent();
            if($(this).attr('checked')){
                $(this).removeAttr('checked')
            }else{
                $(this).attr('checked','checked')
            }
            if($(_parent).parent().find("td input:checked").length==0){ 
                $('[crud-name=delete],[crud-name=update]').removeAttr('disabled');
            }else{
                $('[crud-name=delete],[crud-name=update]').attr('disabled','disabled');
            }
            $.each($(_parent).find("[type='checkbox']"), function(){
                _ca_set_check(this)
            })
        })
        
        $('html').on('click', '[crud-name=list],[crud-name=create]', function (e) { 
            $('[crud-name=check]').removeAttr('disabled')
            $('[crud-name=delete],[crud-name=update]').attr('disabled','disabled');
        })
        $('html').on('click', '[crud-name=delete],[crud-name=update]', function (e) { 
            var $this = $(this),           
            _act_url = $this.attr('ca-crud-url'),
            _crud_data = $this.attr('ca-crud-data'),
            _crud_redirect = $this.attr('ca-crud-redirect'),
            _act_name = $this.attr('crud-name'),
            _table_taget = $this.attr('ca-crud-table-target') 
            if($(_table_taget+" td input:checked").length==0){ 
                ca_notive("Please Check One")
            }else{
                ca_notive(_act_url+' [name action '+_act_name+']')
                if(_act_name=='delete'){
                    o_str_='<div class="ca-modal-header">'+
                    '<button type="button" class="close" onclick="ca_close_box()" data-dismiss="modal" aria-hidden="true">&times;</button>'+
                    '<h2>Warning</h2>'+
                    '</div>'+
                    '<div class="ca-modal-body"><p>';
                    _message_='Are you sure want to delete this row';
                    f_str='<div class="ca-modal-footer"><p>'+
                    '<button onclick="_post(\''+_crud_data+'\',\''+_act_url+'\',undefined,\''+_crud_redirect+'\',\'#ca-crud-target\')">Yes</button>'+
                    '<button onclick="ca_close_box()">No</button>';
                    c_str_= '</p></div>';
                    ca_return_modalbox(o_str_+_message_+c_str_+f_str);  
                }else{
                    _post(_crud_data,_act_url,undefined,undefined,'#ca-crud-target');
                    $('#ca-tooltip').remove();
                    $('[crud-name=delete],[crud-name=update],[crud-name=check]').attr('disabled','disabled')
                } 
            } 
        })

        $('html').on('keyup', '[ca-crud-search]', function (e) {  
            var $this = $(this),    
            _val = $this.val(),
            _act_target = $this.attr('ca-search-target')
            
            $(_act_target).html(_val)
        })
    })
}(window.jQuery);

var ca_sortable = function (){ 
    $("table.ca-sort tbody").sortable({
        opacity:.6,
        cursor:"move",
        placeholder:"ui-state-highlight",
        cancel:".ui-state-disabled",
        update:function(){
            var _act_url=$(this).parent().attr('ca-ajax-sort-url');
            var b=$(this).sortable("serialize");
            $.ajax({
                type:"POST",
                url:_act_url,
                data:b,
                success:function(result){ 
                    
                },
                dataType:"html"
            })
             
            //_post(_data,_act_url,undefined,undefined,'#ca-crud-target');
        }
    })
}
