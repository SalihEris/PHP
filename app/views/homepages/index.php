<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/instructeurs/index">Instructeurs</a> |
            <a href="<?= URLROOT; ?>/countries/index">Landen van de Wereld</a> |
            <a href="<?= URLROOT; ?>/appointment/index">Nailstudio</a> |

        </div>
        <div class="col-3"></div>
    </div>

</div>




<?php require_once APPROOT . '/views/includes/footer.php'; ?>