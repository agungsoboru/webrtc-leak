<script src="http://yourdomain/production.min.js"></script>
<script>
  getIPs().then(data => {
    document.getElementById("output").innerHTML = data.join('<br>');
  });

  (async function() {
    let data = await getIPs();
    document.getElementById("output").innerHTML = data.join('<br>');
  })();
</script>
<?php
$clientIP = $_SERVER['REMOTE_ADDR'];
echo "<p>Your IP address is: $clientIP</p>";
?>


webrct leak ip is <div id="output"></div>
