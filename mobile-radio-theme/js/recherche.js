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

$(document).ready(function(){
   $('#lien-recherche').click(function(){
       $('#zone-recherche').toggle();
   })

    $('#submit-recherche').click(function(e){
        e.preventDefault();
        perform_ajax_request($('#form-recherche').attr('action') + '/?s=' + $('#text-recherche').val());
        $('#zone-recherche').toggle();
    })
});