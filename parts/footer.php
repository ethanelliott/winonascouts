<?php

echo '
<table width="100%">
<tr>
	<td>
		<div id="breadcrumbs">
			<SCRIPT LANGUAGE="JavaScript">
				var path = "";
				var href = document.location.href;
				var s = href.split("/");
				for (var i=2;i<(s.length-1);i++) {
					path+="<A HREF=\""+href.substring(0,href.indexOf("/"+s[i])+s[i].length+1)+"/\">"+s[i]+"</A> &rarr; ";
				}
				i=s.length-1;
				path+="<A HREF=\""+href.substring(0,href.indexOf(s[i])+s[i].length)+"\">"+s[i]+"</A>";
				var url =  path;
				document.writeln(url);
			</script>
		</div>
	</td>
</tr>
<tr>
	<td>
		<a href="//scouts.ca/ca">
			<img class="flag" src="/imgs/scoutslogo.png" />
		</a>
		<p class="copyright accent2c">&copy; Copyright 1<sup>st</sup> Winona Scout Group 2014</p>
		<div id="time"></div>
	</td>
</tr>
';

?>