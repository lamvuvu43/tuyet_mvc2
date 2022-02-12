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
            <li><a href="#tab1" class="default-tab">Danh mục sách</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Thêm user mới</a></li>
        </ul>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1">
            <!-- This is the target div. id must match the href of this div's tab -->

<!--            <div class="notification attention png_bg">-->
<!--                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png"-->
<!--                                               title="Close this notification" alt="close"/></a>-->
<!--                <div>-->
<!--                    This is a Content Box. You can put whatever you want in it. By the way, you can close this-->
<!--                    notification with the top-right cross.-->
<!--                </div>-->
<!--            </div>-->

            <table class="table  table-striped">

                <thead>
                <tr>
                    <th>
                        <input class="check-all" type="checkbox"/></th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Chức năng</th>
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
                foreach ($dataUser as $v) {
                    ?>
                    <tr>
                        <td class="align-middle"><input type="checkbox"/></td>
                        <td><?php echo $v['email'] ?></td>
                        <td><a href="#" title="title">
                                <?php echo $v['name'] ?>
                            </a></td>
                        <td><?php echo $v['phone'] ?></td>
                        <td><?php echo $v['address'] ?></td>
                        <td>

                            <!-- Icons -->
                            <a href="<?php echo  url() ?>/admin/user?action=detail&id=<?php echo $v['email']?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"/></a>
                            <a href="<?php echo  url() ?>/admin/user?action=delete&id=<?php echo $v['email']?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"/></a>

                        </td>
                    </tr>
                    <?php
                }

                ?>


                </tbody>

            </table>

        </div> <!-- End #tab1 -->

        <div class="tab-content" id="tab2">
                <?php var_dump( url()) ?>
            <form action="<?php echo  url() ;?>/admin/user/?action=store" method="POST">

                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Email</label>
                        <input class="text-input large-input" type="email" id="large-input" name="email"/>
                    </p>

                    <p>
                        <label>Mật khẩu</label>
                        <input class="text-input large-input" type="password" id="large-input" name="password"/>
                    </p>

                    <p>
                        <label>Tên</label>
                        <input class="text-input large-input" type="text" id="large-input" name="name"/>
                    </p>
                    <p>
                        <label>Địa chỉ</label>
                        <input class="text-input large-input" type="text" id="large-input" name="address"/>
                    </p>
                    <p>
                        <label>Số điện thoại</label>
                        <input class="text-input large-input" type="text" id="large-input" name="phone"/>
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

<div class="clear"></div>

<div id="footer">
    <small> <!-- Remove this notice or replace it with whatever you want -->
        &#169; Copyright 2009 Your Company | Powered by <a
                href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a>
        | <a href="#">Top</a>
    </small>
</div><!-- End #footer -->
