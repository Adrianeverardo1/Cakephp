$(document).ready(function(){
  var loadForm = $("#search");
  var query = $("#query");
  var table = $("#table");

  loadForm.submit(function(e){
    e.preventDefault();
    var search = query.val();
    $.ajax({
      type: 'POST',
      url: '/users/search',
      dataType: 'json',
      data: {'datos':search},
      success: function(response){
          table.html("<thead><tr><td>Id</td><td>Username</td><td>Email</td>\
          <td>Acciones</td></tr></thead>");

          var tableBody = $('<tbody></tbody>');
          response.forEach((dato)=>{
            var tableRow = $('<tr></tr>')
            var html = '<td>'+ dato['User']['id'] +'</td>';
            html+='<td>'+ dato['User']['username'] +'</td>';
            html+='<td>'+ dato['User']['email'] +'</td>';
            html+="<td><a href='/users/edit/"+dato['User']['id']+"'>Editar</a>\
            <a href='/users/delete/"+dato['User']['id']+"'>Eliminar</a></td>";
            tableRow.html(html);
            tableBody.append(tableRow);
          });
          table.append(tableBody);
      }
    });
  });

});
