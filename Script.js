var post = '';
var postValue = '';
var postTitle = '';
var CPstyle = '';

$(document).ready(function(){PopUpHide()});
        function PopUpShow(){
            $("#lol").show();
            $(document).css('overflow', 'hidden');
                }
        function PopUpHide(){
            $("#lol").hide();
//            document.getElementById('idPostName').value = '';
            $('#idPostText').value = '';
            $(document).css('overflow', 'auto');
            
        }
        CPstyle = getComputedStyle(document.querySelector('.containerPost'));
        document.querySelector('.menuLine').style.height = CPstyle.height;
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
