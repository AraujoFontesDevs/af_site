function sendEmail(){
	clearErrorValidate("contact-form");

	var result = requestAjax('POST', '/sendEmailContato', $('#contact-form').serialize());
	if(result.status){
		data = result.data;

        $('#nome').val('').change();
        $('#email').val('').change();

        $('#div-mensagem-sucesso').show();
        setTimeout(function(){
            $('#div-mensagem-sucesso').hide();
        }, 10000);
	}
	else{
		addErrorValidate('contact-form', result.data);
	}
}

function sendEmailOuvidoria(){
	clearErrorValidate("ouvidoria-form-ouvidoria");
	var result = requestAjax('POST', '/sendEmailOuvidoria', $('#ouvidoria-form-ouvidoria').serialize());
	if(result.status){
		data = result.data;

        $('#nome').val('').change();
        $('#email').val('').change();
				$('#mensagem').val('').change();
        $('#div-mensagem-sucesso').show();
        setTimeout(function(){
            $('#div-mensagem-sucesso').hide();
        }, 10000);
	}
	else{
		addErrorValidate('ouvidoria-form-ouvidoria', result.data);
	}
}

//Clear erro nos campos
function clearErrorValidate(id){
    $('#'+id).find('.input-group').removeClass('has-danger');
    $('#'+id).find('.form-group').removeClass('has-danger');
    $('#'+id).find('.text-error').html('').removeClass('has-danger');
}

//Add erro nos campos
function addErrorValidate(id,data, is_array = false){
    errors = JSON.parse(data);
    var i = 0;

    $.each(errors.errors, function(idx, obj){
        if(is_array)
            idx = idx.replace(/\./g, '-');

        texto = obj.toString().replace(/\,/g, ', ');
        $('#'+id).find('[name^="'+idx+'"]').parents('div.input-group').addClass('has-danger');
        $('#'+id).find('[name^="'+idx+'"]').parents('div.form-group').addClass('has-danger');
        $('#'+id).find('#feedback-'+idx).html(texto);

        if(i == 0){
            $('#'+id).find('#feedback-'+idx).attr("tabindex", -1).focus();
            $('#'+id).find("[name='"+idx+"']").focus();
        }

        i++;
    });
}

window.requestAjax = function (method_request, uri, data_request = []) {
    var result = $.ajax({
      method: method_request,
      url: uri,
      dataType: 'json',
      data: data_request,
      async: false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization': 'Bearer ' + $('#authorization').val(),
      },
    });

    if (result.status == 200 || result.status == 201)
      return { code: result.status, data: result.responseJSON, status: true }
    else
      return { code: result.status, data: result.responseText, status: false }
  }
