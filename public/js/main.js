$(document).ready(function(){



    /*********************************delet book */
$(".deleteRecord").click(function(event){
    var id = $(this).attr("id");    
    console.log(id); 
    parent=event.target.parentElement.parentElement;  
    $.ajax(
    {
        url: "/admin/books/"+id,        
        type:'get',   
        contentType:false,
        processData:false,
        success: function (data){
            console.log(data.msg);
             parent.remove();
        },
        error:function(data){
            
            console.log("does not work");
        }
    });
   
    });

    $(".deleteUser").click(function(event){
        var id = $(this).attr("id");    
        console.log(id); 
        parent=event.target.parentElement.parentElement;  
        $.ajax(
        {
            url: "/admin/deleteuser/"+id,        
            type:'get',   
            contentType:false,
            processData:false,
            success: function (data){
                console.log(data.msg);
                 parent.remove();
            },
            error:function(data){
                
                console.log("does not work");
            }
        });
    });
     
/****************************** search function */
    $('#search').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"/searchautocomplete/searchfetch" ,
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#searchList').fadeIn();
                    $('#searchList').html(data);
                }
            });
        }
    });





    $('#author_name').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"/autocomplete/fetch",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#authorList').fadeIn();
                    $('#authorList').html(data);
                }
            });
        }
    });

    $(document).on('click', 'li', function(){
        $('#author_name').val($(this).text());
        $('#authorList').fadeOut();
    });
    const uploadButton = document.querySelector('.browse-btn');
const fileInfo = document.querySelector('.file-info');
const realInput = document.getElementById('real-input');
/*********************************delet book */
$(".deleteRecord").click(function(event){
    var id = $(this).attr("id");    
    console.log(id); 
    parent=event.target.parentElement.parentElement;  
    $.ajax(
    {
        url: "/admin/books/"+id,        
        type:'get',   
        contentType:false,
        processData:false,
        success: function (data){
            // console.log(data.msg);
             parent.remove();
        },
        error:function(data){
            
            console.log("does not work");
        }
    });
   
    });



  $(document).on('click', 'li', function(){
    $('#star').val($(this).text());
   
});
  
/**********************checkbox */
$('#materialIndeterminate2').prop('indeterminate', true);
/************************ search**************/


});
/**************************rating star******************** */

let star_ul = document.getElementById("star_rating");
ajax = new XMLHttpRequest();

star_ul.onclick = function(event){
    for(i=0; i<5; i++){
        star_ul.children[i].children[0].style.color= "#000"
    }
if(event.target.tagName=="SPAN"){
    let params=event.target.getAttribute("value");
    let star = params.split(',')[0];
    if(star > 0 && star <= 5){
        ajax.open("GET","http://localhost:8000/rateStars/"+params );

        ajax.send();
        ajax.onreadystatechange = ()=>{
        if(ajax.readyState == 4 && ajax.status == 200){
            response = JSON.parse(ajax.responseText);
            if(response.success){
                event.target.style.color = "#fac451";
                let sibLength = $(event.target).parent().prevUntil("ul").length;
                for(i =0 ;i < sibLength; i++ ){
                    $("#star_rating").children()[i].children[0].style.color = "#fac451"
                }

            }
        }
    }
}
    
}
};


