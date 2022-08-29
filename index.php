<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>BOOKS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="script.js" defer></script>
</head>

<body>
 <header>
  
     <aside>
       <form action=""> 
         <div class="form-group"> 
          <label for= "txt_email"> e-mail </label>
            <input type="email" name ="txt_email"
              id="txt_email" class="form-control">
         </div> 
               <div class="form-group"> 
          <label for= "txt_senha"> Senha </label>
            <input type="password" name ="txt_senha"
              id="txt_senha" class="form-control">
         </div> 
              <a href="#" > Esqueci a senha</a>

              <div>
                 <input type="submit" value ="login"
                   class="btn btn-primary">
                <a href="#" class=" btn btn-primary">
                  Cadastre-se</a>
              </div>
       </formm>
     </aside>
   <h1>
     <?=" ̷B̷o̷o̷k̷s̷"; ?>  
   
   </h1>
         <h2>
           <?php echo "Preocupados" ?>
         </h2>
 
 </header>
  <main> 
  <form action="">
    <div class ="form-inline justify-content-center">
      <input type="text" name="txt_livro "
        id="txt_livro" class="form-control">
      <input type="button" value="SALVAR"
      class="btn btn-primary"
        onclick="criarLivro()">
      
    </div>
    
  </form
     <section id="sessaoLivros">
       <?php 
         require_once "model/conexao.php"; 
         $sql="SELECT * FROM book;";
        if(!Conexao::execWithReturn($sql)){  
          
          echo Conexao::getErro();
          exit(1);                                      
          
        }
        
           //print_r(Conexao::getData());
        foreach(Conexao::getData() as $livro):
        
        
?>

       <article>
         <div>
           <img src=" t.jpg" alt="Ft do livro">
         </div>
         <div class="livro-dados">
           <h3> LIVRO:
             
            <span id= "nome-do-livro">
              <?= $livro["nome"] ?>

            </span>
            </h3>
              
             <h3>Páginas:<span> 
             <?= $livro["paginas"]?>
             </span>
             </h3>
             <h3> Autor(a):

               <span id= "livro-paginas"> 
        <?= $livro["autor"] ?>
          </span>
            </h3>
         </div>
         <div>
           <div>
             <div class="Marcador">
               <span class="material-icons">book</span>
               <span class="material-icons">12</span>
             </div>
               <div class="Marcador">
               <span class="material-icons">favorite</span>
               <span class="contador">12</span>
             </div>           </div>
         </div>
       </article>
          <?php endforeach; ?>
       
     </section>   
  </main>

</body>

</html>
