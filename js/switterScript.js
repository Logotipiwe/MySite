function PopUpShow(){
    $("#lol").show();
    $('body').css('overflow', 'hidden');
    alert('ggg');        
};
function PopUpHide(){
            $("#lol").hide();
            $('#idPostText').val("");
            $('#idPostName').val("");
            $(document).css('overflow', 'auto');
            
        };
function funcS(data){
    $("#CPost").html(data);
    EventsDel();
};
function EventsDel(){
    $(".Post").mousemove(function(event){
            if(event.target.getAttribute("id") != null){
                var $PostNum = "#PostUnderDel" + event.target.getAttribute("id").substring(4);
                $($PostNum).css('display', 'block');
                $(this).css('margin-bottom', "27");
            }
        });
    $(".Post").mouseleave(function(event){
            if(event.target.getAttribute("id") != null){
                var $PostNum = "#PostUnderDel" + event.target.getAttribute("id").substring(4);
                $($PostNum).css('display', 'none');
                $(this).css('margin-bottom', '45');
            }
        });
    
    
    
    $(".PostUnderDel").click(function(event){
        var item = event.target.getAttribute("id").substring(12);
        AjaxUse(2,item);
    });
};
function AjaxUse(num,id){
    var postTitle = $("#idPostName").val();
    var postValue = $("#idPostText").val();
    $.ajax ({                  
        url: "PHPposting.php",
        type: "POST",
        data: ({action: num, title: postTitle, content: postValue, item: id}),   
        dataType: "html",       
        success: funcS
    });
    PopUpHide();
};

var files;
$("#idFile").change(function(){
    alert('yedfp');
});

$(document).ready(function(){
//    $("#")
    alert('ku');
    PopUpHide();
    AjaxUse();
    
    {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
               $('.anchor').show();
            }
            if ($(this).scrollTop() < 500) {
                $('.anchor').hide();
            }
        });
        $(document).ready(function() {
                $('.anchor').hide();
            }
        );} /*Якорь*/
    
    $("#NewPostButton").click(PopUpShow);
    $("#CloseForm").click(PopUpHide);
    $("#idPostSend").click(function(){
        AjaxUse(1);
    });
});



