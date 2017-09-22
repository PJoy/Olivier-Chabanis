<?php
$defaultUrl = "https://www.wm4pr.com/fr/Home/Index/200122";
$dbUrls = array(
	"canapes" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_6/Page_1",
	"chambre" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_2/Page_1",
	"accessoires" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_3/Page_1",
	"sejour" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_15/Page_1",
	"luminaires" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_9/Page_1",
	"tables-chaises" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_17/Page_1",
	"bureau" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_16/Page_1",
	"terrasse" => "https://www.wm4pr.com/fr/ResultAmbient/Shop_200122_Ambient_8/Page_1",
);

$searchUrl = "https://www.wm4pr.com/fr/ResultSearch/Shop_200122?fullTextSearch=";


$url = isset($dbUrls[$post->post_name]) ? $dbUrls[$post->post_name] : $defaultUrl;
$url = isset($search) ? $searchUrl.$search : $defaultUrl;
?>

<!--  SERVICE BESTFINDER by DESIGNBEST  -->


<!--  Placer le code iframe suivant à l'endroit de la page où l'on souhaite visualiser le Bestfinder.  -->
<!--  Si une version précédente du Bestfinder est présente, effacer complètement le vieux code.  -->
<!--  Il est important de ne pas modifier le code suivant.  -->

<iframe id="tppIframe"
        style="background-color:transparent; width:100%; height:600px; border:none; margin:0px 0px 0px 0px; max-width:none;"
        src=<?php echo $url; ?>
        allowtransparency="true" frameborder="0"></iframe>



<!-- Placer le script suivant après la ressource jquery. -->

<script type="text/javascript" src="https://www.wm4pr.com/Scripts/iframeresizable_client.js"></script>


<!--  Fin SERVICE BESTFINDER by DESIGNBEST  -->