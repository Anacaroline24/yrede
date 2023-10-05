<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title> cadastro de usuários</title>
</head>
<body>
    <h1 class="w-full text-center text-xl font-bold"> Cadastro de Usuários</h1>

  <form action="card-body max-w-md m-auto" method="post">

    <div class="form-control">
      <label class="label">
        <span class="font-bold">Usuário</span>
      </label>
      <input type="text" placeholder="usuario"
              class="input input-bordered" required />
    </div>

        <div class="form-control">
          <label class="label">
            <span class="font-bold">Bio</span>
          </label>
          <input type="text" placeholder="bio"
                  class="input input-bordered" required />
        </div>

              <div class="form-control">
            <label class="label">
              <span class="font-bold">Senha</span>
            </label>
            <input type="password" placeholder="senha"
                    class="input input-bordered" required />

    </div>

    <div class="form-control">
      <label class="label">
        <span class="font-bold">Email</span>
      </label>
      <input type="text" placeholder="Email"
              class="input input-bordered" required />
    </div>

  </form>


    
</body>
</html>