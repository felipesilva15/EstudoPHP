<script src="https://www.google.com/recaptcha/enterprise.js?render=6LeCHZEjAAAAAB9QMURzedaPnaadhzNWk-84bla_"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LeCHZEjAAAAAB9QMURzedaPnaadhzNWk-84bla_', {action: 'login'}).then(function(token) {
       document.getElementById('g-token').value = token; 
    });
});
</script>
<form action="cadastrar.php" method="POST">
    <input type="hidden" name="g-token" id="g-token">
    <input type="email" name="email">
    <button type="submit">Enviar</button>
</form>