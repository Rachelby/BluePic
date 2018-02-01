
<!DOCTYPE html>
<html lang="en">
<?php include_once("views/templates/header.php"); ?>


<body>
    <!-- Navbar -->
    <?php include_once("views/templates/nav.php"); ?>

    <div class="db">
        <div class="col s12 m8 l9">
            <div class="row">
                <form class="col s12" action="#">
                    <br>
                    <div class="row">


                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">burst_mode</i>
                            <input id="titre_image" type="text" data-length="20" class="validate">
                            <label for="titre_image">Titre de l'image</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">edit</i>
                            <textarea id="description" class="materialize-textarea validate" data-length="200"></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <!--use events-->
                    <div class="row ">
                        <div class="col s12 m4 l3">
                            <p>Choisir une image</p>
                        </div>
                        <div class="col s12 m8 l9">
                            <input type="file" id="input-file-events" class="dropify-event"/>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="input-field col s6">
                            <select class="icons validate">
                                <option value="" disabled selected>Albums</option>
                                <option value="" data-icon="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-aquamarine.jpg?7914652338985733472" class="left circle">Album 1</option>
                                <option value="" data-icon="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/sacredgeometry2.jpg?7914652338985733472" class="left circle">Album 2</option>
                                <option value="" data-icon="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?7914652338985733472" class="left circle">Album 3</option>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <select class="validate">
                                <option value="0" disabled selected>Position de l'image</option>
                                <option value="1">Position 1</option>
                                <option value="2">Position 2</option>
                                <option value="3">Position 3</option>
                                <option value="4">Position 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <label for="publier_fb">Publier sur facebook</label>
                        <p>
                            <input name="group1" type="radio" id="test2" checked />
                            <label for="test2">Non</label>
                        </p>
                        <p>
                            <input name="group1" type="radio" id="test1" />
                            <label for="test1">Oui</label>
                            
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right submit" type="submit" name="action" >Ajouter
                                <i class="material-icons prefix">send</i>
                               
                            </button>
                        </div>
                    </div>
                 
                </form>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    $(document).ready(function() {
        $('select').material_select('destroy');
        $('select').material_select();
    });



    $(document).ready(function(){
// Basic
$('.dropify').dropify();

// Translated
$('.dropify-fr').dropify({
    messages: {
        default: 'Glissez-déposez un fichier ici ou cliquez',
        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
        remove:  'Supprimer',
        error:   'Désolé, le fichier trop volumineux'
    }
});

// Used events
var drEvent = $('.dropify-event').dropify();

drEvent.on('dropify.beforeClear', function(event, element){
    return confirm("Voulez-vous vraiment supprimer l'image \"" + element.filename + "\" ?");
});

drEvent.on('dropify.afterClear', function(event, element){
    alert('L\'image a été supprimée');
});
});
</script>
</html>
