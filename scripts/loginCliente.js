function loginCliente(event) {
    event.preventDefault();
  
    const data = $('form').serialize();
  
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: 'controladores/loginCliente.php',
      async: true,
      data: data,
      success: function(response) {
        if (response.success) {
          window.location.replace(`views/homeCliente.php?name=${response.usuario.name}`);
        } else {
          alert('E-mail e/ou senha estão incorretos.');
        }
      }
    });
  }