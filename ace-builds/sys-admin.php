<script src="jquery-3.2.1.min.js"></script>
<script src="terminal/terminal/js/jquery.terminal-1.7.2.js"></script>
<script src="terminal/terminal/js/jquery.mousewheel-min.js"></script>
<link href="terminal/terminal/css/jquery.terminal-1.7.2.css" rel="stylesheet"/>

<body style="background-color: black;">
	<div style="background-color: black; border: 10px solid black; max-height: 90%;">
		<span id="terminal"></span>
	</div>
	<footer style="color: #aaa;">
		<p style="float: right;">Struggling?<a href="#"> Click here for regular User Interface</a></p>
	</footer>
</body>
<script>
 $('#terminal').terminal(function(command, term) {
		command = command.toLowerCase();
		if (command === 'clear') { term.echo(command); return; }
        term.pause();
        $.post('command.php', {cmd: command}).then(function(response) {
            term.echo(response).resume();
        });
    }, {
        greetings: 'Connecting to student@rbc.ca!\n...\nConnection successful!\nRBC Student Portal. Unauthorized access is prohibited.\nType \'help\' to get a list of commands\n',
        name: 'sys-admin',
        height: 200,
        prompt: 'student@rbc:~$ '
    });
</script>