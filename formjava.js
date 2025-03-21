var form_has_no_error = true;



$(document).ready(
    function(){
        $('#firstname').change(
            function(){
                if($('#firstname').val().length<3){
                    $('#firstname').css("background-color","red");
                    $('#show_first_name_error').text('First name must be more than 2 characters');
                    form_has_no_error = false;
                } else{
                    $('#firstname').css("background-color","#fff");
                    $('#show_first_name_error').text('');
                    form_has_no_error = true;
                }
            })

            $('#fathers_name').change(
                function(){
                    if($('#fathers_name').val().length<3){
                        $('#fathers_name').css("background-color","red");
                        $('#fathers_name_error').text('Name must be more than 2 characters');
                        form_has_no_error = false;
                    } else{
                        $('#fathers_name').css("background-color","#fff");
                        $('#fathers_name_error').text('');
                        form_has_no_error = true;
                    }
                })

                $('#mothers_name').change(
                    function(){
                        if($('#mothers_name').val().length<3){
                            $('#mothers_name').css("background-color","red");
                            $('#mothers_name_error').text('Name must be more than 2 characters');
                            form_has_no_error = false;
                        } else{
                            $('#mothers_name').css("background-color","#fff");
                            $('#mothers_name_error').text('');
                            form_has_no_error = true;
                        }
                    })



            $('#submit_btn').click(
                function(event){
                    if (form_has_no_error==false){
                        event.preventDefault;

                        alert('There are errors in the form')
                    }
                }
            )
    });