<html>

<head>
    <link rel="stylesheet" href="<?= asset_url() ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= asset_url() ?>css/all.min.css" />
    <link rel="stylesheet" href="<?= asset_url() ?>css/index_style.css" />
</head>

<body>

    <div class="jumbotron jum">

        <div class=" navbar">
            <h3>Phone Book <i class="far fa-address-book"></i></h3>

        </div>

        <div class="row">

            <div class="col-lg-4 inp">

                <form action="">
                    <input onkeyup="searchFunction()" id="myInput" name="s" class="form-control mt-2" placeholder="search">
                    <span class="icon text-primary"><i class="fas fa-search"></i></span>
                </form>

                <h5 class="mt-5">Add New Contact</h5>

                <form action="<?= site_url('contact/add') ?>" method="post">
                    <input autocomplete="off" name="name" class="form-control mb-3 mt-3" placeholder="add name">
                    <input autocomplete="off" name="mobile" class="form-control mb-3" placeholder="add phonenumber">
                    <input autocomplete="off" name="email" class="form-control mb-3" placeholder="add e-mail">
                    <button type="submit" class="btn btn-info w-100 btn1">Add</button>
                </form>

            </div>

            <div class="col-lg-8">
                <?php if (!is_null($search_keyword)) : ?>
                    <h2 class="mb-3">Search Resault For: <span class="text-warning"><?= $search_keyword ?></span></h2>
                <?php endif; ?>
                <table id="myTable" class="table text-justify table-striped">

                    <thead class="tableh1">
                        <th class="">ID</th>
                        <th class="">Name</th>
                        <th class="">Phone</th>
                        <th class="">E-mail</th>
                        <th class="col-1">Actions</th>
                    </thead>

                    <tbody id="tableBody">

                        <?php foreach ($contacts as $contact) : ?>
                            <tr class="tableh1">
                                <td class=""><?= $contact['id'] ?></td>
                                <td class=""><?= $contact['name'] ?></td>
                                <td class=""><?= $contact['mobile'] ?></td>
                                <td class=""><?= $contact['email'] ?></td>
                                <td class="col-1">
                                    <a href="<?= site_url("contact/delete/{$contact['id']}") ?>"><img src="<?= asset_url('images/delete-icon.png') ?>"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>

                <div class="text-center">
                    <div class="pagination">
                        <?php
                        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                        ?>
                        <?php if (ceil($countAll / $pageSize) > 0) : ?>
                            <ul class="pagination">
                                <?php if ($page > 1) : ?>
                                    <li class="prev"><a href="?page=<?php echo $page - 1 ?>">Prev</a></li>
                                <?php endif; ?>

                                <?php if ($page > 3) : ?>
                                    <li class="start"><a href="?page=1">1</a></li>
                                    <li class="dots">...</li>
                                <?php endif; ?>

                                <?php if ($page - 2 > 0) : ?><li class="page"><a href="?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
                                <?php if ($page - 1 > 0) : ?><li class="page"><a href="?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

                                <li class="currentpage"><a href="?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                <?php if ($page + 1 < ceil($countAll / $pageSize) + 1) : ?><li class="page"><a href="?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
                                <?php if ($page + 2 < ceil($countAll / $pageSize) + 1) : ?><li class="page"><a href="?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

                                <?php if ($page < ceil($countAll / $pageSize) - 2) : ?>
                                    <li class="dots">...</li>
                                    <li class="end"><a href="?page=<?php echo ceil($countAll / $pageSize) ?>"><?php echo ceil($countAll / $pageSize) ?></a></li>
                                <?php endif; ?>

                                <?php if ($page < ceil($countAll / $pageSize)) : ?>
                                    <li class="next"><a href="?page=<?php echo $page + 1 ?>">Next</a></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <footer>Ahmad Al-Shahawi 2019.All rights reserved</footer>

        <script src="<?= asset_url() ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= asset_url() ?>js/popper.min.js"></script>
        <script src="<?= asset_url() ?>js/bootstrap.min.js"></script>
        <!-- <script src="<?= asset_url() ?>js/index.js"></script> -->
</body>

</html>