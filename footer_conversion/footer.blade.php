<?php
$home = env('BH_HOME');
?>

<!-- FOOTER ------------------------------------------------------------------->

<footer>
  <div class="container">

    <div class="row footer-logo-row">
      <a class="footer-logo" href="/"><img src="/images/logo-name-175.png"></a><br>
    </div>

    <div class="row footer-links-row">
      <div class="col-md-4 footer-list footer-list-first">
        <div class="footer-title footer-title-top">BOB</div>
        <a href="{{ $home }}/about.html">About</a><br>
        <a href="{{ $home }}/skills.html">Skills</a><br>
        <a href="{{ $home }}/work/personal.html">Personal Projects</a><br>
        <a href="{{ $home }}/work/randall.html">Randall Library Projects</a><br>
        <a href="{{ $home }}/work/roadway.html">Roadway Express Projects</a><br>
        <a href="{{ $home }}/contact.html">Contact</a><br>
      </div>
      <div class="col-md-4 footer-list footer-list-middle">
        <div class="footer-title footer-title-top">RESOURCES</div>
        <a href="{{ $home }}/resources/articles.html">Articles </a><br>
        <a href="{{ $home }}/resources/code.html">Code Libraries </a><br>
        <a href="{{ $home }}/resources/ebooks.html">Ebooks</a><br>
        <a href="{{ $home }}/resources/laravel.html">Laravel</a><br>
        <a href="{{ $home }}/resources/news.html">News and Blogs</a><br>
        <a href="{{ $home }}/resources/reference.html">Reference</a><br>
        <a href="{{ $home }}/resources/tools.html">Tools</a><br>
        <a href="{{ $home }}/resources/vue.html">Vue.js</a><br>
      </div>
      <div class="col-md-4 footer-list">
        <div class="footer-title footer-title-top">PERSONAL PROJECTS</div>
        <a href="http://photography.bobhumphrey.org/" target="_blank">Tumblr Photos</a><br>
        <a href="http://baseball.bobhumphrey.org/" target="_blank">Baseball Statistics</a><br>
        <a href="http://personalityquiz.bobhumphrey.org/" target="_blank">Personality Quiz</a><br>
        <a href="http://kurebeachvillage.org/" target="_blank">Kure Beach Village</a><br>
        <a href="http://kylehumphrey.com/" target="_blank">Kyle Humphrey Visual Effects</a><br>
      </div>
    </div>

    <div class="row social-icons-row">
      <a href="https://gitlab.com/u/Bob_Humphrey" target="_blank" title="Gitlab"><i class="fa fa-git-square fa-3x"></i></a>
      <a href="http://bobhumphreyphotography.tumblr.com/" target="_blank" title="tumblr"><i class="fa fa-tumblr-square fa-3x"></i></a>
      <a href="https://www.instagram.com/life_isa_carnival/" target="_blank" title="Instagram"><i class="fa fa-instagram fa-3x"></i></a>
      <a href="https://www.flickr.com/photos/140080524@N06/" target="_blank" title="flickr"><i class="fa fa-flickr fa-3x"></i></a>
      <a href="https://www.goodreads.com/review/list/9075241-bob-humphrey?shelf=read" target="_blank" title="Goodreads"><i class="fa fa-book fa-3x"></i></a>
    </div>

  </div>

  <div class="copyright">
    Copyright &copy; 2016 Bob Humphrey All Rights Reserved.
  </div>

</footer>
