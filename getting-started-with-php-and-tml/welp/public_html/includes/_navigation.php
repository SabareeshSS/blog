<?php tml_begin_source("navigation") ?>

<div class="navbar navbar-default navbar-static-top" role="navigation">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">
          <?php tre("Toggle navigation") ?>
        </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <strong>Welp</strong>
            </a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><?php tre("About Us") ?></a></li>
                <li><a href="#"><?php tre("Search") ?></a></li>
                <li><a href="#"><?php tre("Write a Review") ?></a></li>
                <li><a href="#"><?php tre("Find Friends") ?></a></li>
                <li><a href="#"><?php tre("Help") ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php tml_language_selector_tag("bootstrap", ["element" => "li"]) ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php tre("More {carret}", ["carret" => "<b class='caret'></b>"])  ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php tre("Log in") ?></a></li>
                        <li><a href="#"><?php tre("Sign Up") ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php tml_finish_source() ?>