function loginVet(event) {
    event.preventDefault();
  
    const dados = $('form').serialize();
  
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: 'controladores/loginVet.php',
      async: true,
      data: dados,
      success: function(response) {
        if (response.success) {
          window.location.replace(`views/homeVet.php?name=${response.usuario.name}`);
        } else {
          alert('E-mail e/ou senha estão incorretos.');
        }
      }
    });
  }
  