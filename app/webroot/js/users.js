window.addEventListener('load',()=>{
  var loadForm = document.querySelector('#search');
  var table = document.querySelector('#table');

  loadForm.addEventListener('submit',(e)=>{
    e.preventDefault();
    var request = new XMLHttpRequest();
    request.open('GET','/users/get_all');

    request.onload = function(){
  		var datos = JSON.parse(request.responseText);
  		if (!datos){
  			console.log("Error");
  		}
  		else{
        table.innerHTML = "<thead><tr><td>Id</td><td>Username</td><td>Email</td>\
        <td>Acciones</td></tr></thead>";

        var tableBody = document.createElement('tbody');
        datos.forEach((dato)=>{
          var tableRow = document.createElement('tr');
          tableRow.innerHTML += ('<td>'+ dato['User']['id'] +'</td>');
          tableRow.innerHTML += ('<td>'+ dato['User']['username'] +'</td>');
          tableRow.innerHTML += ('<td>'+ dato['User']['email'] +'</td>');
          tableRow.innerHTML += ("<td><a href='/users/edit/"+dato['User']['id']+"'>Editar</a>\
          <a href='/users/delete/"+dato['User']['id']+"'>Eliminar</a></td>");
          tableBody.appendChild(tableRow);
        });
        table.appendChild(tableBody);
      }
    }
    request.send();
  });

});
