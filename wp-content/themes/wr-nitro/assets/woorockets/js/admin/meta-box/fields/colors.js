(function(a){a.WR_Colors_Field=function(c,d){var b=this;b.field=c;b.text=d;b.init()};a.WR_Colors_Field.prototype={init:function(){var b=this;b.container=a("#"+b.field.id);b.input_colors=b.container.find("input.color-picker");b.input_colors.each(function(c,d){a(d).spectrum({color:a(d).val(),showInput:true,showInitial:true,allowEmpty:true,showAlpha:true,clickoutFiresChange:true,cancelText:b.text.cancel?b.text.cancel:"Cancel",chooseText:b.text.choose?b.text.choose:"Choose",preferredFormat:"hex",show:function(){if(!a(".sp-default").length){a(".sp-cancel").after('<a class="sp-default" href="#">'+(b.text["default"]?b.text["default"]:"Default")+"</a>")}a(".sp-default").off("click").on("click",function(e){e.preventDefault();a(d).spectrum("set",a(d).attr("default-value"));a(d).parent().children(".color-hex").text(a(d).attr("default-value"))})},move:function(e){a(d).parent().children(".color-hex").text("");if(e){a(d).parent().children(".color-hex").text(e.getAlpha()==1?e.toHexString():e.toRgbString())}},hide:function(e){if(!e){a(this).siblings(".color-hex").text("");a(this).val("").trigger("change")}else{var f=e.getAlpha()==1?e.toHexString():e.toRgbString();a(this).siblings(".color-hex").text(f);a(this).val(f).trigger("change");a(".sp-container:visible").find(".sp-input").val(f)}}})});b.container.on("change","input.color-picker",function(){var c=a(this).spectrum("get"),d=c?(c.getAlpha()==1?c.toHexString():c.toRgbString()):"";if(a(this).val()!=d){a(this).val(d)}})}}})(jQuery);