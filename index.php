<script src="jquery-3.2.1.min.js"></script>
<script src="terminal/terminal/js/jquery.terminal-1.7.2.min.js"></script>
<script src="terminal/terminal/js/jquery.mousewheel-min.js"></script>
<link href="terminal/terminal/css/jquery.terminal-1.7.2.min.css" rel="stylesheet"/>

<div style="background-color: black;">
	<span id="terminal"></span>
</div>
<script>
 $('#terminal').terminal(function(command, term) {
        term.pause();
        $.post('command.php', {cmd: command}).then(function(response) {
            term.echo(response).resume();
        });
    }, {
        greetings: 'Connecting to terminal!\nConnection successful',
        name: 'sys-admin',
        height: 200,
        prompt: 'student@rbc:~$ '
    });
</script>