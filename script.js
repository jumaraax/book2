function criarLivro(){
  let  divImagem= document.createElement("div");

     let img = document.createElement("img");
        img.setAttribute("src", "t.jpg");
          img.setAttribute("alt", "Imagem do Livro");
     divImagem.appendChild(img);

  // Fim da div imagem 

  
  let  divDados= document.createElement("div");
    divDados.setAttribute("class", "livro-dados");

  let hTitulo = document.createElement("h3");
    let hPaginas = document.createElement("h3");
    let hAutores = document.createElement("h3");

  
  let spanTitulo = document.createElement("span");
    let spanPaginas = document.createElement("span");
    let spanAutores = document.createElement("span");

  hTitulo.innerHTML = "Livro:";
   hPaginas.innerHTML = "Páginas:";
   hAutores.innerHTML = "Autor(a):";

  let nomeLivro = document.querySelector("#txt_livro").value ;

  spanTitulo.innerHTML = nomeLivro;
  spanPaginas.innerHTML = "??";
  spanAutores.innerHTML = "??";

  hTitulo.appendChild(spanTitulo);
    hPaginas.appendChild(spanPaginas);
    hAutores.appendChild(spanAutores);


  divDados.appendChild(hTitulo);
    divDados.appendChild(hPaginas);
    divDados.appendChild(hAutores);

  // fim da div dados

  
  let  divMarcadores= document.createElement("div");
  divMarcadores.appendChild(criarMarcadores("book", 0));
  divMarcadores.appendChild(criarMarcadores("favorite", 0));

  let article = document.createElement("article");
    // fim  div marcadores

  article.appendChild(divImagem);
  article.appendChild(divDados);
  article.appendChild(divMarcadores);

  document.querySelector("#sessaoLivros")
  .appendChild(article);
}

function criarMarcadores(icon,numero){
     let div = document.createElemento("div");
  div.setAttribute("class", "marcador");

  let spanIcon = document.createElement("span");
  spanIcon.setAttribute("class", "material-icons");
  spanIcon.innnerHTML = icon;

    let spanNumero = document.createElement("span");
  spanNumero.setAttribute("class", "contador");
  spanNumero.innnerHTML = numero;

  div.appendChild(spanIcon);
  div.appendChild(spanNumero);
  
  return div;
  
}