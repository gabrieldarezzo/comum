<form name="teste">
  <input type="checkbox" class="ling" name="linguagem[]">Java
  <input type="checkbox" class="ling" name="linguagem[]">Delphi
  <input type="checkbox" class="ling" name="linguagem[]">C++
</form>
 
<a href="javascript:marcar()">Marcar Todas</a> | 
<a href="javascript:desmarcar()">Desmarcar Todas</a>
 
<script language="JavaScript">
  function marcar(){
	  
	  
    var boxes = document.getElementsByClassName("ling");
    for(var i = 0; i < boxes.length; i++)
      boxes[i].checked = true;
  }
  
  function desmarcar(){
    var boxes = document.getElementsByName("linguagem");
    for(var i = 0; i < boxes.length; i++)
      boxes[i].checked = false;
  }
</script>