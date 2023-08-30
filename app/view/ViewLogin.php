<?php

class ViewLogin {
    function __construct()
    {
        $this->construirForm();
    }

    public function construirForm()
    {
        ?>
        <body>
            <section>
                <h3>login</h3>
                <form action="index.php" method="post">
                    <label for="user">Nome</label>
                    <input name="user" type="text">
                    <label for="password">Senha</label>
                    <input name="password" type="password">
                    <button>Entrar</button>
                    <button>cadastrar</button>
                </form>
            </section>
        </body>
    <?php
    }
}