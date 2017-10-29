<div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-1" style="height: 580px; margin-right: 10px; border-radius: 20px; padding: 0;">
                <div style="text-align: center"><i class="fa fa-angle-up" aria-hidden="true" style="color: #1ab7ea;font-size: 70px;"></i></div>
                <div style="height: 450px; overflow-x: hidden; overflow-y: scroll; white-space:nowrap">
                    <?php foreach($categories as $category): ?>
                    <div style="width:80%; height: 100px; margin: 10px;">
                        <input type="hidden" value="<?= $category->id ?>">
                        <img src="<?= "upload_categoryimages/" . $category->image ?>" style="width: 100%; height: 80%;">
                        <div style="font-size:100%; text-align: center; display: block"><?= $category->title ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; position: absolute; bottom: 0; width: 100%"><i class="fa fa-angle-down" aria-hidden="true" style="color: #1ab7ea;font-size: 70px;"></i></div>
            </div>
            <div class="col-lg-10">
                <div style="height: 90px; margin-bottom: 20px;">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; left: 20px; top: 10px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; right: 20px; top:10px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <div style="height: 100%; margin: 0 5%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                      <?php foreach($colors as $color): ?>
                        <div style="width: 8.3%; height: 100%; display: inline-block; margin: 0 10px;">
                            <input type="hidden" value="<?= $color->id ?>">
                            <div style="background-color: <?= $color->value ?>;width: 100%; height: 80%; border-radius: 40px;"></div>
                            <div style="font-size:100%; text-align: center; display: block"><?= $color->name ?></div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
                <div class="panel panel-default" style="border-radius: 20px; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; height: 475px;">
                    <h1 style="text-align: center; font-family: 'Asap', sans-serif; font-weight: bold; line-height: 75px; font-size: 4em">Browse To Amaze</h1>
                    <div class="panel-body" style="border-radius: 20px; background-color: #1ab7ea; height: 350px; position: absolute; width: 94.6%;">
                        <i class="fa fa-angle-left arrow" aria-hidden="true" style="color: rgba(0,0,0, 0.1); font-size: 200px; left: 10px;vertical-align: middle; line-height: 300px; position: absolute"></i>
                        <i class="fa fa-angle-right arrow" aria-hidden="true" style="color: rgba(0,0,0, 0.1); font-size: 200px; right: 10px; vertical-align: middle; line-height: 300px; position: absolute"></i>
                        <div style="height: 320px; padding: 20px; padding-top: 40px; margin: 0 1%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                            <?php foreach($bookcovers as $bookcover): ?>
                            <div style="width: 200px; display: inline-block; padding-right: 10px;">
                                    <input type="hidden" value="<?= $bookcover->id ?>">
                                    <img src="<?= "upload_bookcover/" . $bookcover->image ?>" style="width: 100%; height: 200px;">
                                    <div style="text-align: center; font-size: 100%"><?= $bookcover->title ?></div>
                                    <div style="text-align: center; font-size: 100%"><?= $bookcover->author ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div style="height: 90px; margin-bottom: 20px;">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; left: 20px; bottom: 35px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; right: 20px; bottom:35px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <div style="height: 100%; margin: 0 5%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                    </div>
                </div>
            </div>
        </div>
 </div>

