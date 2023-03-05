<form action="<?= route_to('form.add') ?>" method="post" enctype="multipart/form-data" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8">

    <?= csrf_field() ?>

    <input type="text" name="title" placeholder="title" required style="border: 1px solid #000000;" />
    <input type="text" name="name" placeholder="name" required style="border: 1px solid #000000;" />
    <input type="file" name="news_image" id="news_image"/>
    <input type="submit" name="submit" value="Submit" style="border: 1px solid #000000;"/>
</form>