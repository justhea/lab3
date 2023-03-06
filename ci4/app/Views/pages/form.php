<form action="<?= route_to('form.add') ?>" method="post" enctype="multipart/form-data">

    <?= csrf_field() ?>

    <input type="text" name="title" placeholder="title" required style="border: 1px solid #000000;" />
    <input type="text" name="name" placeholder="name" required style="border: 1px solid #000000;" />
    <input type="text" name="image" placeholder="Image Link" required style="border: 1px solid #000000;" />
    <input type="submit" name="submit" value="Submit" style="border: 1px solid #000000;"/>
</form>

