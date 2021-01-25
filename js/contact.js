$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Tienes que ingresar tu nombre por favor",
                    minlength: "Su nombre debe tener al menos 2 caracteres"
                },
                subject: {
                    required: "Tienes que ingresar el asunto por el cual quieres comunicarnos por favor",
                    minlength: "El asunto debe constar de al menos 4 caracteres"
                },
                number: {
                    required: "Tienes que ingresar tu número por favor",
                    minlength: "Su número debe constar de al menos 5 caracteres"
                },
                email: {
                    required: "Tienes que ingresar tu email por favor"
                },
                message: {
                    required: "Tienes que escribir el mensaje que quieres enviar.",
                    minlength: "El asunto debe constar de al menos 20 caracteres"
                }
            },
            submitHandler: function(form) {
                debugger;
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})