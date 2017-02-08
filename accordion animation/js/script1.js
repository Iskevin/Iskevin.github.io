$(function(){


    function Accordionani(){
        this.maxwidth = 420;
        this.minwidth = 60;
        this.sonli = $(".domeId").children('li');

        this.posi = 0;
    }
    Accordionani.prototype = {
        anim:function(obj){
            sonli = this.sonli;
            sonli.animate(function() {
                width:this.minwidth + "px"
            },2000).css("cursor","pointer");
            obj.animate(function() {
                width:this.maxwidth + "px"

            },2000).css("cursor","default");

        },
        init:function(){
            sonli = this.sonli;

            for (var i = 0; i < sonli.length; i++) {
                sonli.eq(i).css({
                   width:this.minwidth + "px"
                })
            }



            $(".domeId>li").click(function() {

               accObj.anim($(this));
                
            });    

        }



    }

    var accObj = new Accordionani();


    accObj.init();

    


})