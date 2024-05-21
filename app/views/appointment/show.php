<?php require_once APPROOT . '/views/includes/header.php'; ?>


<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h4>Nailstudio</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Color1</th>
                        <th>Color2</th>
                        <th>Color3</th>
                        <th>Color4</th>
                        <th>Nailbiting</th>
                        <th>Massage</th>
                        <th>Nailrepair</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $data['dataRows']; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/appointment/create">Maak afspraak</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>