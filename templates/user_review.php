<?php

    require_once("models/User.php");

    $userModel = new User();

    $fullName = $userModel->getFullName($review->user);

    // Checar se o filme tem imagem
    if($review->user->image == "") {
      $review->user->image = "user.png";
    }

?>
<!-- User Review Card -->
<div class="col-md-12 review">
  <div class="row">
    <div class="col-md-1">
      <div class="profile-image-container review-image" 
           style="background-image: url('img/users/user.png')">
      </div>
    </div>
    <div class="col-md-9 author-details-container">
      <h4 class="author-name">
        <a href="profile.php?id=1">Nome do Usuário</a>
        <!--  devem colocar o nome do usuário dinamicamente -->
      </h4>
      <p><i class="fas fa-star"></i> 4.5</p>
      <!--  devem colocar a nota do review dinamicamente -->
    </div>
    <div class="col-md-12">
      <p class="comment-title">Comentário:</p>
      <p>Esse é um comentário de exemplo.</p>
      <!-- devem colocar o comentário real dinamicamente -->
    </div>
  </div>
</div>
