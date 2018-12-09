

$(document).ready(function(){
$('#new-user-form').validate
})
$("input[name=rpassword]").change(function(){
                                            if ($("input[name=rpassword]").val() !=  $("input[name=password]").val())
                                            {
                                                alert ("The 2 passwords don't match!");
                                            }
                                            })


