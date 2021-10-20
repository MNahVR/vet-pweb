function cadAnimal(event) {
    event.preventDefault();
  
    const data = $('form').serialize();
  
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: 'controladores/cadAnimal.php',
      async: true,
      data: data,
      success: function(response) {
        if (response.success) {
          window.location.replace(`views/homeAnimal.php?name=${response.pet.name}`);
        } else {
          alert('Desculpe, erro no cadastro. Utilize outros dados e tente novamente.');
        }
      }
    });
  }
  