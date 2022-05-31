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

            <?php if($_SERVER['PATH_INFO'] === '/visualizar-contato'): ?>
            <form class="form-contact" action="" method="">
                <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name" value="<?php echo $contato['nome'];?>" disabled>
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday" value="<?php echo $contato['data_nascimento'];?>" disabled>
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email" value="<?php echo $contato['email'];?>" disabled>
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel" value="<?php echo $contato['telefone'];?>" disabled>
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel" value="<?php echo $contato['celular'];?>" disabled>
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" type="text" name="cep" value="<?php echo $contato['cep'];?>" disabled>
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street" value="<?php echo $contato['rua'];?>" disabled>
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num" value="<?php echo $contato['numero'];?>" disabled>
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp" value="<?php echo $contato['complemento'];?>" disabled>
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district" value="<?php echo $contato['bairro'];?>" disabled>
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city" value="<?php echo $contato['cidade'];?>" disabled>
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf" value="<?php echo $contato['uf'];?>" disabled>
                </div>
                <div>
                    <a class="form-link" href="/editar-contato?id=<?php echo $contato['id']; ?>"> Editar </a> 
                    <a class="form-link" href="/deletar-contato?id=<?php echo $contato['id']; ?>"> Deletar </a> 
                </div>
            </form> 
            <?php endif; ?>

            <?php if($_SERVER['PATH_INFO'] === '/editar-contato'): ?>
            <form class="form-contact" action="/atualizar-contato?id=<?php echo $contato['id']; ?>" method="POST">
            <div class="container-name">
                    <label class="form-label" for="name"> Nome </label>
                    <input class="form-input" type="text" name="name" value="<?php echo $contato['nome'];?>">
                </div>
                <div class="container-birthday">
                    <label class="form-label" for="birthday"> Nascimento </label>
                    <input class="form-input" type="text" name="birthday" value="<?php echo $contato['data_nascimento'];?>">
                </div>
                <div class="container-email">
                    <label class="form-label" for="email"> E-mail </label>
                    <input class="form-input" type="text" name="email" value="<?php echo $contato['email'];?>">
                </div>
                <div class="container-tel">
                    <label class="form-label" for="tel"> Telefone </label>
                    <input class="form-input" type="text" name="tel" value="<?php echo $contato['telefone'];?>">
                </div>
                <div class="container-cel">
                    <label class="form-label" for="cel"> Celular </label>
                    <input class="form-input" type="text" name="cel" value="<?php echo $contato['celular'];?>">
                </div>
                <div class="container-cep">
                    <label class="form-label" for="cep"> Cep </label>
                    <input class="form-input" type="text" name="cep" value="<?php echo $contato['cep'];?>">
                </div>
                <div class="container-street">
                    <label class="form-label" for="street"> Rua </label>
                    <input class="form-input" type="text" name="street" value="<?php echo $contato['rua'];?>">
                </div>
                <div class="container-num">
                    <label class="form-label" for="num"> Número </label>
                    <input class="form-input" type="text" name="num" value="<?php echo $contato['numero'];?>">
                </div>
                <div class="container-comp">
                    <label class="form-label" for="comp"> Comp </label>
                    <input class="form-input" type="text" name="comp" value="<?php echo $contato['complemento'];?>">
                </div>
                <div class="container-district">
                    <label class="form-label" for="district"> Bairro </label>
                    <input class="form-input" type="text" name="district" value="<?php echo $contato['bairro'];?>">
                </div>
                <div class="container-city">
                    <label class="form-label" for="city"> Cidade </label>
                    <input class="form-input" type="text" name="city" value="<?php echo $contato['cidade'];?>">
                </div>
                <div class="container-uf">
                    <label class="form-label" for="uf"> UF </label>
                    <input class="form-input" type="text" name="uf" value="<?php echo $contato['uf'];?>">
                </div>
                <div>
                    <button class="form-btn" type="submit"> Atualizar </button>
                </div> 
            </form> 
            <?php endif; ?> 
            
        </Section>
    </main>
</body>