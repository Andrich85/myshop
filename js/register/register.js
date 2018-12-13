

$(document).ready(function(){
$('#new-user-form').validate
})
$("input[name=rpassword]").change(function(){
                                            if ($("input[name=rpassword]").val() !=  $("input[name=password]").val())
                                            {
                                                alert ("The 2 passwords don't match!");
                                            }
                                            
                                            
        });
                                            

function askValidation(user, email,password)
{
    $.ajax(
                                                {
                                                    type:"POST",
                                                    url: "views/register/validation.inc.php", 
                                                    success: function(result){
                                                        var patt= /verification/i;
                                                        if (result.toString().search(patt) != -1)
                                                        {   $('#new-user-form').hide();
                                                            $("#validation-message").attr('class', 'alert alert-success');
                                                        }
                                                        else
                                                        {
                                                            $("#validation-message").attr('class', 'alert alert-danger');
                                                        }
                                                        $("#validation-message").html(result);
                                                        $("#validation-message").show();

                                                        },

                                                    dataType: 'html',
                                                    data:
                                                        {
                                                          userName : user,
                                                          password : password                         ,
                                                          email: email
                                                        }
                                            })
                                            event.preventDefault();
                                            
}

