$(document).ready(function(){

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
uploadButton.addEventListener('click', () => {
    realInput.click();
  });
  realInput.addEventListener('change', () => {
    const name = realInput.value.split(/\\|\//).pop();
    const truncated = name.length > 20 
      ? name.substr(name.length - 20) 
      : name;
    
    fileInfo.innerHTML = truncated;
  });
  /**********************************profile */
  var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});


   
});
