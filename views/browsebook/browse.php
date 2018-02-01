<div class="container" style="margin-top: 40px;" ng-controller="bookCoverController">
        <div class="row">
            <div class="col-lg-1" style="height: 580px; margin-right: 10px; border-radius: 20px; padding: 0;">
                <div style="text-align: center"><i class="fa fa-angle-up" aria-hidden="true" style="color: #1ab7ea;font-size: 70px;"></i></div>
                <div style="height: 450px; overflow-x: hidden; overflow-y: scroll; white-space:nowrap">
                    <?php foreach($categories as $category): ?>
                    <div style="width:80%; height: 100px; margin: 10px;" ng-click="getSubCategories($event)">
                        <input type="hidden" value="<?= $category->id ?>">
                        <img src="<?= "/childrenslibrarywithyii/web/upload_categoryimages/" . $category->image ?>" style="width: 100%; height: 65%; padding: 0; border-radius: 40px;" class="button">
                        <div style="font-size:100%; text-align: center; display: block; margin-top: 10px;"><?= $category->title ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; position: absolute; bottom: 0; width: 100%"><i class="fa fa-angle-down" aria-hidden="true" style="color: #1ab7ea;font-size: 70px;"></i></div>
            </div>
            <div class="col-lg-10">
                <div style="height: 120px; margin-bottom: 20px;">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; left: 20px; top: 10px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; right: 20px; top:10px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <div style="height: 100%; margin: 0 5%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                      <?php foreach($colors as $color): ?>
                        <div style="width: 8.3%; height: 100%; display: inline-block; margin: 0 10px;" ng-click="filter($event)">
                            <input type="hidden" value="<?= $color->id ?>">
                            <div style="background-color: <?= $color->value ?>;width: 100%; height: 65%; border-radius: 40px;" class="button"></div>
                            <div style="font-size:100%; text-align: center; display: block; margin-top: 10px;"><?= $color->name ?></div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
                <div class="panel panel-default" style="border-radius: 20px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; height: 500px;">
                    <h1 style="text-align: center; font-family: 'Asap', sans-serif; font-weight: bold; line-height: 30px; font-size: 4em">Browse To Amaze</h1>
                    <div ng-show="filters.length != 0" style=" z-index: 1; width: 50%; margin: 0 auto; height: 100px; position: absolute; left: 0; right: 0; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                        <div style="width:8%; height: 100px; margin: 10px; display: inline-block;" ng-click="remove($event)" ng-repeat="filter in filters">
                            <input type="hidden" value="{{ filter.id }}">
                            <img src="{{ filter.imageOrColor }}" ng-if ="filter.isImage" style="display: inline-block; width: 100%; height: 40%; padding: 0; border-radius: 40px;" class="button">
                            <img style="background-color: {{ filter.imageOrColor }}; padding: 0;  display: inline-block; width: 100%; height: 40%; border-radius: 40px;" class="button" ng-if="!filter.isImage">
                            <i class="fa fa-plus" aria-hidden="true" ng-if="filters.length > 1 && filters.length != ($index + 1) "></i>
                            <div style="font-size:100%; text-align: center; display: block; margin-top: 10px;">{{ filter.label }}</div>
                        </div>
                    </div>
                    <div class="panel-body" style="margin-top: 60px;border-radius: 20px; background-color: #1ab7ea; height: 350px; position: absolute; width: 94.6%;">
                        <i class="fa fa-angle-left arrow" aria-hidden="true" style="color: rgba(0,0,0, 0.1); font-size: 200px; left: 10px;vertical-align: middle; line-height: 300px; position: absolute"></i>
                        <i class="fa fa-angle-right arrow" aria-hidden="true" style="color: rgba(0,0,0, 0.1); font-size: 200px; right: 10px; vertical-align: middle; line-height: 300px; position: absolute"></i>
                        <div id="bookscontainer" style="height: 320px; padding: 20px; padding-top: 40px; margin: 0 1%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                            <div style="width: 200px; display: inline-block; padding-right: 10px; cursor: pointer" ng-repeat="bookcover in bookcovers" my-book-list>
                                    <input type="hidden" value="{{ bookcover.id }}">
                                    <img src="/childrenslibrarywithyii/web/upload_bookcover/{{ bookcover.image }}" style="width: 100%; height: 200px;">
                                    <div style="text-align: center; font-size: 100%">{{ bookcover.title }}</div>
                                    <div style="text-align: center; font-size: 100%">{{ bookcover.author }}</div>
                            </div>
                            <!-- <div ng-show="showLoading" style="width: 200px; display: inline-block; padding-right: 10px; cursor: pointer; height: 200px;">
                                <div class="loader" style="margin: 0 auto; margin-bottom: 10px;"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div style="height: 120px; margin-bottom: 20px;">
                    <i class="fa fa-angle-left" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; left: 20px; bottom: 35px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <i class="fa fa-angle-right" aria-hidden="true" style="color: #1ab7ea;font-size: 70px; right: 20px; bottom:35px; vertical-align: middle; line-height: 65px; position: absolute"></i>
                    <div style="height: 100%; margin: 0 5%; overflow-x: scroll; overflow-y: hidden; white-space:nowrap">
                        <div style="width:8%; height: 100px; margin: 10px; display: inline-block;" ng-repeat="subcategory in subcategories" ng-click="filter($event)">
                            <input type="hidden" value="{{ subcategory.id }}">
                             <img src="/childrenslibrarywithyii/web/upload_categorycontentimages/{{ (subcategory.image == '') ? 'categorycontent_81-gator-dancing.jpg' : subcategory.image }}"style="display: inline-block; width: 100%; height: 65%; padding: 0; border-radius: 40px;" class="button">
                            <div style="font-size:100%; text-align: center; display: block; margin-top: 10px;">{{ subcategory.name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>

