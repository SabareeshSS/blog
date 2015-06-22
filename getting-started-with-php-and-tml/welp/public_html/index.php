<?php include('includes/_header.php') ?>

<?php
$restaurants = [
    [
        "name"          => "Ricky's Fish Tacos",
        "rating"        =>  4,
        "review_count"  =>  14,
        "last_comment"  => "Luckily, the perfect hot day food is a fish taco."
    ],
    [
        "name"          => "Genwa Korean Bbq",
        "rating"        =>  3,
        "review_count"  =>  567,
        "last_comment"  => "I love love love the fact that you get 25 side dishes."
    ],
    [
        "name"          => "Kang Hodong Baekjeong",
        "rating"        =>  2,
        "review_count"  =>  1,
        "last_comment"  => "Thick slices of juicy pastrami on rye hits the spot every time."
    ],
    [
        "name"          => "Guisados",
        "rating"        =>  1,
        "review_count"  =>  14,
        "last_comment"  => "I can't wait to introduce more people to these orgasmic tacos."
    ]
];
?>
<div class="container">

    <div class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="pull-right"><br>
                    <a href="#"><?php tre("More Cities", "A link to view more cities") ?></a>
                </div>
                <h4>
                    <?php tre("Welp {city}", ["city" => tr("Los Angeles")]) ?>
                </h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
                <div class="well">
                    <?php trhe("
                        <h3 class='text-primary'>
                            The best way to find local businesses
                        </h3>
                        <p class='text-muted'>
                            Search for everything from the city's tastiest burger to the most renowned cardiologist.
                            What will you uncover in your neighborhood?
                        </p>
                        <p>
                            <a href='#' class='btn btn-primary'>Create your free account</a>
                        </p>
                    ") ?>
                </div>

                <h3 class="text-primary">
                    <?php tre("Best of Welp: {city}", ["city" => tr("Los Angeles")]) ?>
                </h3>

                <hr>

                <small class="pull-right">
                    <a href="#"><?php tre("See More", "A link to view more restaurants") ?></a>
                </small>

                <h5 class="text-primary">
                    <?php tre("Restaurants") ?>
                </h5>

                <?php foreach ($restaurants as $index => $restaurant) { ?>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <div class="media-object media-img"></div>
                        </a>
                        <div class="media-body">
                            <strong>
                                <?php echo $index + 1 ?>.
                                <a href="#"><?php echo $restaurant["name"] ?></a>
                            </strong>

                            <div class="text-muted">
                                <img src="/assets/images/<?php echo $restaurant['rating'] . "-stars.png" ?>" title="<?php trle('{count} out of 5 stars', ['count' => $restaurant['rating']]) ?>">
                                <?php tre("{count || Review}", ["count" => $restaurant["review_count"]]) ?>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="#">
                                    <div class="media-object media-img-sm"></div>
                                </a>
                                <div class="media-body">
                                    <p><?php tre($restaurant["last_comment"]) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <div class="col-sm-5">
                <form>
                    <div class="form-group">
                        <label>
                            <small>
                                <?php tre("Find") ?>
                            </small>
                        </label>
                        <input type="text" class="form-control" placeholder="<?php trle('tacos, cheap dinner, etc.') ?>">
                    </div>
                    <div class="form-group">
                        <label>
                            <small>
                                <?php tre("Near") ?>
                            </small>
                        </label>
                        <input type="text" class="form-control" value="<?php trle('Los Angeles') ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-sm">
                            <?php tre("Search") ?>
                        </button>
                    </div>
                </form>

                <hr>

                <h4 class="text-primary">
                    <?php tre("Review of the day") ?>
                </h4>

                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="media-object media-img"></div>
                    </a>
                    <div class="media-body">
                        <strong>
                            <?php tre("{user} reviewed [link: {restaurant}]", [
                                    "user"          => ["object" => ["gender" => "female", "name" => "Jane Smith"], "attribute" => "name"],
                                    "restaurant"    => "Ricky's Fish Tacos",
                                    "link"          => function($text) { return "<a href='#'>$text</a>"; } ]
                            ) ?>
                        </strong>
                        <div>
                            <img src="/assets/images/5-stars.png" title="<?php trle('{count} out of 5 stars', ['count' => 5]) ?>">
                        </div>
                        <small class="text-muted">
                            <?php tre("{count || Review}", ["count" => 234]) ?>
                        </small>

                        <p>
                            <?php tre("You can't beat flavorful crunchy tacos, free chips and delicious salsa, yummy burritos and enchiladas.") ?>
                            <a href="#"><?php tre("Read More") ?></a>
                        </p>
                    </div>
                </div>

                <hr>

                <h4 class="text-primary">
                    <?php tre("Welp on the go") ?>
                </h4>

                <p>
                    <?php tre("Get the Welp app on your mobile phone. It's free and helps you find great, local businesses on the go!") ?>
                </p>

                <button type="submit" class="btn btn-default btn-sm">
                    <?php tre("Get it free now") ?>
                </button>

            </div>
        </div>
        <br><br><br>
    </div>
</div>

<?php include('includes/_footer.php') ?>
