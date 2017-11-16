<?php
 session_start();
?>
<script>
  $("#logout").click(function(){
localStorage.login="false";
window.location.href = "login.html";
});
</script>