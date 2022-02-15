<?php
$annonceMJML = '<mjml>
<mj-body background-color="#ac4249">
    <mj-section>
  <mj-column>
    <mj-navbar base-url="https://localhot/projet4/dev/" hamburger="hamburger" ico-color="#fae5e7">
      <mj-navbar-link href="https://locahot/projet4/dev/index.php" color="#ffffff">Logo</mj-navbar-link>
      <mj-navbar-link href="https://localhot/projet4/dev/?etat=add" color="#fae5e7">Slogan</mj-navbar-link>
    </mj-navbar>
  </mj-column>
</mj-section>
<mj-section >
  <mj-column>
    <mj-text color="#fae5e7">
      <h1>Récapitulatif Annonce Postée</h1>
    </mj-text>
  </mj-column>
</mj-section>
<mj-section>
  <mj-column>
    <mj-text color="#fae5e7">
      ' . @$annonce['titre'] . '
    </mj-text>
    <mj-text color="#fae5e7">
    ' . @$annonce['categorie'] . '
    </mj-text>
    <mj-text color="#fae5e7">
    ' . @$annonce['prix'] . '
    </mj-text>
  </mj-column>
  <mj-column>
    <mj-text color="#fae5e7">
    ' . @$annonce['description'] . '
    </mj-text>
  </mj-column>
</mj-section>
<mj-section>
  <mj-column>
    <mj-image src="http://localhost/projet4/img/.' . @$annonce['photo1'] . '" alt="{{PHOTO1}}" />
  </mj-column>
  <mj-column>
    <mj-image src="http://localhost/projet4/img/' . @$annonce['phtot2'] . '" alt="{{PHOTO2}}" />
  </mj-column>
  <mj-column>
    <mj-image src="http://localhost/projet4/img/' . @$annonce['photo3'] . '" alt="{{PHOTO3}}" />
  </mj-column>
  <mj-column>
    <mj-image src="http://localhost/projet4/img/' . @$annonce['photo4'] . '" alt="{{PHOTO4}}" />
  </mj-column>
  <mj-column>
    <mj-image src="http://localhost/projet4/img/' . @$annonce['photo5'] . '" alt="{{PHOTO5}}" />
  </mj-column>
</mj-section>
 <mj-section>
  <mj-column>
    <mj-button background-color="#3c1823" color="#fae5e7" href="http://localhost/projet4/dev/?id=' . @$annonce['id'] . '&etat=confirm">VALIDER</mj-button>
  </mj-column>
  <mj-column>
    <mj-button background-color="#3c1823" color="#fae5e7" href="http://localhost/projet4/dev/?id=' . $annonce['id'] . '&etat=update">MODIFIER</mj-button>
  </mj-column>
</mj-section>
</mj-body>
</mjml>';