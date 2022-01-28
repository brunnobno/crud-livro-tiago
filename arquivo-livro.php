<?php
include('header.php');

if(isset($_GET['title'])) {

?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <h3 class="mt-5"><i class="fas fa-search-plus"></i> Informações sobre o Livro</h3>
                <p class="lead"> Veja informações sobre o livro escolhido.</p>
                <hr>
          
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="col-12 col-md-10">                
                        <h2 class="text-primary"><?= $_GET['title']; ?></h5>
                    </div>
                    <div class="col-12 col-md-10">
                        <p> <strong>Descrição:</strong> <span class="">Lorem ipsum++ dolor sit amet consectetur adipisicing elit. Eaque sint, nostrum harum debitis incidunt optio culpa odit, praesentium quia ipsa a temporibus. Quis in repellendus, eaque aspernatur ipsa debitis sit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sint, nostrum harum debitis incidunt optio culpa odit, praesentium quia ipsa a temporibus. Quis in repellendus, eaque aspernatur ipsa debitis sit?</span></p>
                    </div>
                                    
                    <div class="col-12 col-md-10">
                        <p> <strong>Autor:</strong> <span class="">Brunno Hernandez</span></p>
                    </div>
                    
                    <div class="col-12 col-md-10">
                        <p> <strong>Ano da publicação:</strong> <span class="">2002</span></p>
                    </div>

                    <div class="col-12 col-md-10">
                        <p> <strong>Item de coleção:</strong> <span class="">Não</span></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <p><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="" height="300px"></p>   
                </div> 
                
                <div class="row">                  
                    <div class="col-12 col-md-10 mt-3 mb-3">
                        <a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
} else {
?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <div class=" col-12 col-md-6 mt-5 alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle"></i> Nenhum livro foi selecionado!
                </div>
        </div>
    </div>
</div>

<?php

}

include('footer.php');
