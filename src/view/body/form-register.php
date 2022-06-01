<?php include __DIR__ . "../../head/head.php"; ?>

<body>
    <main>
        <header>
            
            <h1 class="title"> Agenda </h1>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="/formulario-contato"> Cadastrar </a>
                    </li>
                    <li>
                        <a href="/lista-contato"> Contatos </a>
                    </li>
                </ul>
            </nav>

        </header>
        <Section>

            <form class="form-contato" action="/salvar-contato" method="POST">
                <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name">
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday">
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email">
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel">
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel">
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" type="text" name="cep">
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street">
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num">
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp">
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district">
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city">
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf">
                </div>
                <div>
                    <button class="form-btn" id="btn-save-contato" type="submit"> Salvar </button>
                </div>
            </form> 

            <script src="../../script/ajax/ajax-save-contato.js"></script>
            
        </Section>
    </main>
</body>