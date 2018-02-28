<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Server list</h6>
    <?php foreach ($config['data']['servers'] as $server) { ?>
        <div class="media text-muted pt-3 border-bottom border-gray">
            <p class="media-body pb-3 mb-0 small lh-125">
                <strong class="d-block text-gray-dark"><?php echo $server['name']; ?></strong>IP: <?php echo $server['ip']; ?>
            </p>

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary">pull new image</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">restart service</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary">upgrade</button>
                </div>
            </div>

        </div>
    <?php } ?>

</div>
