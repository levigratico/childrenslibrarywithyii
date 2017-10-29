 <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-1" style="background-color: #1ab7ea; height: 580px; margin-right: 10px; border-radius: 20px;">
                <div style="text-align: center"><i class="fa fa-angle-up" aria-hidden="true" style="color: #ffffff;font-size: 70px;"></i></div>
                <div style="text-align: center; position: absolute; bottom: 0; width: 70%"><i class="fa fa-angle-down" aria-hidden="true" style="color: #ffffff;font-size: 70px;"></i></div>
            </div>
            <div class="col-lg-10">
                <div class="panel panel-default" style="border-radius: 20px; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; height: 90px">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; float: left; vertical-align: middle; line-height: 65px;"></i>
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; float: right; vertical-align: middle; line-height: 65px;"></i>
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
            </div>
        </div>
 </div>

