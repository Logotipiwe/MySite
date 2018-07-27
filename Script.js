var post = '';
var postValue = '';
var postTitle = '';
var CPstyle = '';

function PopUpShow(){
            $("#lol").show();
            $(document).css('overflow', 'hidden');
                };
function PopUpHide(){
            $("#lol").hide();
            $('#idPostText').value = '';
            $(document).css('overflow', 'auto');
            
        };
function funcB(){
//    $("#CPost").html("Ожидание загрузки постов...");
};
function funcS(data){
    $("#CPost").append(data);
};
function EventsDel(){
        $(".Post").mouseover(function(event){
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
    };

EventsDel();

$(document).ready(function(){
    PopUpHide();
    $.ajax ({                  
        url: "Posting.php",       
        type:"POST",            
        data: ({}),   
        dataType: "html",       
        beforeSend: funcB, 
        success: funcS
    });
    
    EventsDel();
    
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
});
EventsDel();


