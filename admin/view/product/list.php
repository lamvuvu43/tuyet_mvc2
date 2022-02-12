<noscript> <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
        <div>
            Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/"
                                                                                  title="Upgrade to a better browser">upgrade</a>
            your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852"
                               title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface
            properly.
            Download From <a href="http://www.exet.tk">exet.tk</a></div>
    </div>
</noscript>

<!-- Page Head -->
<h2>Danh sách sách</h2>

<div class="clear"></div> <!-- End .clear -->

<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Content box</h3>

        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Danh muc sach</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Them sach moi</a></li>
        </ul>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1">
            <!-- This is the target div. id must match the href of this div's tab -->

            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png"
                                               title="Close this notification" alt="close"/></a>
                <div>
                    This is a Content Box. You can put whatever you want in it. By the way, you can close this
                    notification with the top-right cross.
                </div>
            </div>

            <table>

                <thead>
                <tr>
                    <th>
                        <input class="check-all" type="checkbox"/></th>
                    <th>Ma sach</th>
                    <th>Ten</th>
                    <th>Gia</th>
                    <th>Hinh</th>
                    <th>#</th>
                </tr>

                </thead>

                <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="bulk-actions align-left">
                            <select name="dropdown">
                                <option value="option1">Choose an action...</option>
                                <option value="option2">Edit</option>
                                <option value="option3">Delete</option>
                            </select>
                            <a class="button" href="#">Apply to selected</a>
                        </div>

                        <div class="pagination">
                            <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo;
                                Previous</a>
                            <a href="#" class="number" title="1">1</a>
                            <a href="#" class="number" title="2">2</a>
                            <a href="#" class="number current" title="3">3</a>
                            <a href="#" class="number" title="4">4</a>
                            <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                        </div> <!-- End .pagination -->
                        <div class="clear"></div>
                    </td>
                </tr>
                </tfoot>

                <tbody>
                <?php
                foreach ($dataProduct as $v) {
                    ?>
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td><?php echo $v['book_id'] ?></td>
                        <td><a href="#" title="title">
                                <?php echo $v['book_name'] ?>
                            </a></td>
                        <td><?php echo $v['price'] ?></td>
                        <td><img src='../image/book/<?php echo $v['img'] ?>' height=100></td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"/></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"/></a>

                        </td>
                    </tr>
                    <?php
                }

                ?>


                </tbody>

            </table>

        </div> <!-- End #tab1 -->

        <div class="tab-content" id="tab2">

            <form action="index.php?controller=ProductController&action=store" method="post"
                  enctype="multipart/form-data">

                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Ma sach</label>
                        <input class="text-input large-input" type="text" id="large-input" name="book_id"/>
                    </p>

                    <p>
                        <label>Ten sach</label>
                        <input class="text-input large-input" type="text" id="large-input" name="book_name"/>
                    </p>
                    <p>
                        <label>Gia</label>
                        <input class="text-input large-input" type="number" id="large-input" name="price"/>
                    </p>
                    <p>
                        <label>Hinh</label>
                        <input class="text-input large-input" type="file" id="large-input" name="img"/>
                    </p>

                    <p>
                        <label>Loai</label>
                        <select name="cat_id" class="small-input">
                            <?php
                            foreach ($dataCat as $r) {
                                ?>
                                <option value="<?php echo $r['cat_id'] ?>"><?php echo $r['cat_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </p>
                    <p>
                        <label>Nha xb</label>
                        <select name="pub_id" class="large-input">
                            <?php
                            foreach ($dataPub as $r) {
                                ?>
                                <option value="<?php echo $r['pub_id'] ?>"><?php echo $r['pub_name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </p>

                    <p>
                        <label>Mo ta</label>
                        <textarea class="text-input textarea wysiwyg" id="textarea" name="description" cols="79"
                                  rows="15"></textarea>
                    </p>

                    <p>
                        <input class="button" type="submit" value="Submit"/>
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div> <!-- End #tab2 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="content-box column-left">

    <div class="content-box-header">

        <h3>Content box left</h3>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab">

            <h4>Maecenas dignissim</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim
                quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec
                egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
            </p>

        </div> <!-- End #tab3 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->

<div class="content-box column-right closed-box">

    <div class="content-box-header">
        <!-- Add the class "closed" to the Content box header to have it closed by default -->

        <h3>Content box right</h3>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab">

            <h4>This box is closed by default</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim
                quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec
                egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
            </p>

        </div> <!-- End #tab3 -->

    </div> <!-- End .content-box-content -->

</div> <!-- End .content-box -->
<div class="clear"></div>


<!-- Start Notifications -->

<div class="notification attention png_bg">
    <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification"
                                   alt="close"/></a>
    <div>
        Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis
        fermentum luctus, libero.
    </div>
</div>

<div class="notification information png_bg">
    <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification"
                                   alt="close"/></a>
    <div>
        Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis
        fermentum luctus, libero.
    </div>
</div>

<div class="notification success png_bg">
    <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification"
                                   alt="close"/></a>
    <div>
        Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis
        fermentum luctus, libero.
    </div>
</div>

<div class="notification error png_bg">
    <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification"
                                   alt="close"/></a>
    <div>
        Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis
        fermentum luctus, libero.
    </div>
</div>

<!-- End Notifications -->

<div id="footer">
    <small> <!-- Remove this notice or replace it with whatever you want -->
        &#169; Copyright 2009 Your Company | Powered by <a
                href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a>
        | <a href="#">Top</a>
    </small>
</div><!-- End #footer -->
