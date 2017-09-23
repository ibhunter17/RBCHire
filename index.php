<script src="jquery-3.2.1.min.js"></script>
<script src="terminal/terminal/js/jquery.terminal-1.7.2.min.js"></script>
<script src="terminal/terminal/js/jquery.mousewheel-min.js"></script>
<link href="terminal/terminal/css/jquery.terminal-1.7.2.min.css" rel="stylesheet"/>

<span id="term_demo"></span>

<script>
jQuery(function($, undefined) {
    $('#term_demo').terminal(function(command) {
        if (command !== '') {
            try {
                var result = window.eval(command);
                if (result !== undefined) {
                    this.echo(new String(result));
                }
            } catch(e) {
                this.error(new String(e));
            }
        } else {
           this.echo('');
        }
    }, {
        greetings: 'Javascript Interpreter',
        name: 'js_demo',
        height: 200,
        prompt: 'js> '
    });
});
</script>