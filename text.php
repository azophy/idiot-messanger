<script>
a+=1;
$('#baaa').text(Math.ceil(a/60).toString().substring(0,5)+ ' Menit ' + Math.ceil(a%60).toString().substring(0,5) + ' Detik');
</script>
<span id="baaa"></span> 
