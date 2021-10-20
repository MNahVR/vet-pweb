function cadCliente(event) {
    event.preventDefault();
  
    const data = $('form').serialize();
  
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: 'controladores/cadCliente.php',
      async: true,
      data: data,
      success: function(response) {
        if (response.success) {
          window.location.replace(`views/homeCliente.php?name=${response.usuario.name}`);
        } else {
          alert('Desculpe, erro no cadastro. Utilize outros dados e tente novamente.');
        }
      }
    });
  }