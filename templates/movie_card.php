<?php
  // Caso não haja imagem, usar imagem padrão
  // $movie->image = "movie_cover.jpg"; // Alunos podem implementar
?>
<div class="card movie-card">
  <div class="card-img-top" style="background-image: url('img/movies/movie_cover.jpg')"></div>
  <div class="card-body">
    <p class="card-rating">
      <i class="fas fa-star"></i>
      <span class="rating">4.5</span>
      
    </p>
    <h5 class="card-title">
      <a href="movie.php?id=1">Título do Filme</a>
  
    </h5>
    <a href="movie.php?id=1" class="btn rate-btn">Avaliar</a>
    <a href="movie.php?id=1" class="btn card-btn">Conhecer</a>
  </div>
</div>
