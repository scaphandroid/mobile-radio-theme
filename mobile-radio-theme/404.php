<?php
/**
*(c) Alexis Raphaeloff 2017 (alexis@raphaeloff.net)
*
*This file is part of mobile-radio-theme.
*
*mobile-radio-theme is free software: you can redistribute it and/or modify
*it under the terms of the GNU General Public License as published by
*the Free Software Foundation, either version 3 of the License, or
*(at your option) any later version.
*
*mobile-radio-theme is distributed in the hope that it will be useful,
*but WITHOUT ANY WARRANTY; without even the implied warranty of
*MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License
*along with mobile-radio-theme.  If not, see http://www.gnu.org/licenses/
*/

$ajaxRequest = false;
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && $_SERVER['HTTP_X_REQUESTED_WITH']== 'VOSTOKAJAXREQUEST' ){
    $ajaxRequest = true;
}
?>

<?php if (!$ajaxRequest) : get_header(); endif ;?>

<div class="body container-fluid">

    <div class="row">
        <h4 style="text-align: center; margin-top: 20px">Désolé, aucun contenu trouvé !</h4>
        <div style="text-align: center; margin-top: 20px">
            <a href="<?php echo home_url()?>">Retour à l'accueil</a>
        </div>
    </div>

</div>
<?php if (!$ajaxRequest) : get_footer(); endif ;?>
