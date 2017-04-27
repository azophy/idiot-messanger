<script src="jquery.js"></script>
<script>
$(document).ready(function() {
var x = setInterval(function() { $('#tulisan').load('./text.php'); }, 1000);
});
</script>

<div style="font-size: 150px; text-align: center;" id='tulisan'></div>