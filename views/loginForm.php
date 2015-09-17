<?php

?>
<a href="/">Home</a>
<form id="login" action="/?action=login" method="post">
	<p>
		<svg id="Layer_1" 
		width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
		<path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" d="M8.7,15L3,18.4c-0.6,0.4-1,1-1,1.7V23h20v-2.9
		c0-0.7-0.4-1.4-1-1.7L15.3,15"/>
		<path fill="none" stroke="#D5DDDF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M12,16L12,16
		c-3.3,0-6-2.7-6-6V7c0-3.3,2.7-6,6-6l0,0c3.3,0,6,2.7,6,6v3C18,13.3,15.3,16,12,16z"/>
		</svg>
	</p>
	<p>
		<input type="text" name="username" placeholder="Username" required>
	</p>
	<p>
	<svg id="Layer_1" 
	width="24px" height="24px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
	<polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="5,8 7,10 11,6 "/>
	</svg>
	</p>

	<p>
		<input type="password" name="password" placeholder="Password" required>
	</p>
 
		<button id="loginbtn" type='submit'>Log In</button>
 
	</form>