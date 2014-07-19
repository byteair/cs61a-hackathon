<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<Response>
    <Message><script>
	$.getJSON('http://api.icndb.com/jokes/random', function(data) {
	  alert(data.joke);
	});
	</script></Message>
</Response>