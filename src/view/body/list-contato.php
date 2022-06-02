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

            <table class="table">
                <thead>
                    <tr>
                        <th id="thead-nome"> Nome </th>
                        <th id="thead-ação"> Visualizar </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listContato as $contato):?>
                    <tr>
                        <td id="tbody-nome"> <?= $contato['nome'] ?> </th>
                        <td id="tbody-ação"> <a id="X" href="/visualizar-contato?id=<?=$contato['id']?>"> X </a> </th>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </Section>
    </main>
</body>