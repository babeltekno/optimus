(function(a){
    var b=function(){
        var b={
            email:{
                check:function(a){
                    if(a)return c(a,"[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])");
                    return true
                },
                msg:"enter a valid e-mail address."
            },
            url:{
                check:function(a){
                    if(a)return c(a,"^https?://(.+.)+.{2,4}(/.*)?$");
                    return true
                },
                msg:"enter a valid URL."
            },
            caracter:{
                check:function(a){
                    var b=new RegExp("^[a-zA-Z0-9_-￿s]+$");
                    if(a.match(b))return true;else return false
                },
                msg:"enter no special caracter."
            },
            required:{
                check:function(a){
                    if(a=="Insert title here ..."||a=="Insert name here ..."){
                        return false
                    }else if(a)return true;else return false
                },
                msg:"this field is required."
            },
            captch:{
                check:function(b){
                    conf=a("input[name='captcha']").val();
                    if(b==conf)return true;else return false
                },
                msg:"your captcha code is wrong."
            },
            confirm:{
                check:function(b){
                    conf=a("input[name='confirm'").val();
                    if(b==conf)return true;else return false
                },
                msg:"confirm password is not same value."
            }
        };
        
        var c=function(a,b){
            var c=new RegExp(b,"");
            return c.test(a)
        };
        
        return{
            addRule:function(a,c){
                b[a]=c
            },
            getRule:function(a){
                return b[a]
            }
        }
    };

    var c=function(b){
        var c=[];
        b.find("[ca-validation]").each(function(){
            var b=a(this);
            if(b.attr("ca-validation")!==undefined){
                c.push(new d(b))
            }
        });
        this.fields=c
    };

    c.prototype={
        validate:function(){
            for(field in this.fields){
                this.fields[field].validate()
            }
        },
        isValid:function(){
            for(field in this.fields){
                if(!this.fields[field].valid){
                    this.fields[field].field.focus();
                    return false
                }
            }
            return true
        }
    };

    var d=function(a){
        this.field=a;
        this.valid=false;
        this.attach("change")
    };
    
    d.prototype={
        attach:function(a){
            var b=this;
            if(a=="change"){
                b.field.bind("change",function(){
                    return b.validate()
                })
            }
            if(a=="keyup"){
                b.field.bind("keyup",function(a){
                    return b.validate()
                })
            }
        },
        validate:function(){
            var b=this,c=b.field,d="errorlist icon-warning-sign",e=a(document.createElement("span")).addClass(d),f=c.attr("ca-validation").split("|"),g=c.parent(),h=[];
            c.next(".errorlist").remove();
            for(var i in f){
                var j=a.Validation.getRule(f[i]);
                if(!j.check(c.val())){
                    g.addClass("error").css({
                        'position':'relative'
                    });
                    h.push(j.msg)
                }
            }
            if(h.length){
                b.field.unbind("keyup");
                b.attach("keyup");
                c.after(e.empty());
                for(error in h){
                    e.addClass('ca-tip-right')
                    .css({
                        'position':'absolute',
                        'margin-left':'-20px',
                        'margin-top':'5px'
                    })
                    e.attr({
                        "ca-original-title":h[error],
                        "ca-tip-type":'error'
                    })
                }
                b.valid=false
            }else{
                e.remove();
                g.removeClass("error");
                b.valid=true
            }
        }
    };

    a.extend(a.fn,{
        validation:function(){
            var b=new c(a(this));
            a.data(a(this)[0],"validator",b);
            a(this).bind("submit",function(a){
                b.validate();
                if(!b.isValid()){
                    a.preventDefault()
                }
            })
        },
        validate:function(){
            var b=a.data(a(this)[0],"validator");
            b.validate();
            return b.isValid()
        }
    });
    a.Validation=new b
})(jQuery)