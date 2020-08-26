<?php
$lien = get_permalink();
$titre = strip_tags(get_the_title());
// $urlImage = the_post_thumbnail_url();
?>

<div class="event__share">
    <div class="title-secondary" >Partagez cet article !</div>
    <p>Cet article vous a plu ? N'hésitez pas à le partager !</p>

    <a href="https://www.facebook.com/sharer.php?u=<?= $lien ?>&t=<?= $titre ?>" target="_blank"
        class="btn-social btn-facebook" title="sur Facebook"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
            class="fa fa-facebook"></i></a>

    <!-- <a href="http://scripteden.com/download/eden-ui/" target="_blank" class="btn-social btn-instagram"
        title="sur Instagram"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
            class="fa fa-instagram"></i></a> -->

    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=JuizSocialPostSharer&amp;url=<?= $lien ?>&title=<?= $titre ?>"
        target="_blank" class="btn-social btn-linkedin" title="sur LinkedIn"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
            class="fa fa-linkedin"></i></a>

    <a href="https://twitter.com/intent/tweet?source=webclient&amp;original_referer=<?= $lien ?>text=<?= $titre ?>"
        target=" _blank" class="btn-social btn-twitter"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
            class="fa fa-twitter" title="sur Twitter"></i></a>

    <a href="mailto:?&subject=<?= $titre ?>&body=<?= $lien ?>" target="_blank" class="btn-social btn-email"
        title="par mail"><i class="fa fa-envelope"></i></a>


</div>