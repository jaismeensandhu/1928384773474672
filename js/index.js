$(document).foundation();

function getQueryVariable(variable) {
     var query = window.location.search.substring(1);
     var vars = query.split("&");
     for (var i=0;i<vars.length;i++) {
          var pair = vars[i].split("=");
          if(pair[0] == variable){return pair[1];}
     }
     return(false);
}

if (window.location.search) {
     var job = getQueryVariable('job');
     var ID = getQueryVariable('ID');
     if (job == 'mentor') {
          $('#editarUsuario').foundation('reveal', 'open');
			$.ajax({url:"jobmodal.php?ID="+ID,cache:false,success:function(result){
				$(".modal-content").html(result);
			}});
     }
}