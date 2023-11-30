<?php

namespace app\view;

class ViewCadastroClientes
{

    public function __construct()
    {
        $this->formCadasrtro();
    }

    public function formCadastro()
    {
      ?>
        <form method="post">
            <h3>Cadastrar pessoa</h3>
            <div class="nome-pessoa">
                <label for="client-name">Nome completo</label>
                <input type="text" id="client-name">
            </div>
            <div class="cpf-cliente">
                <label for="cpf">CPF</label>
                <input type="text">
            </div>
        </form>
     <?php
    }
}