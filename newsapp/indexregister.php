<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://newsapi.org/v2/top-headlines?country=id&apiKey=c150417b5e1d4a6b8fa5815e1b8ede21");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);

$data = json_decode($output, true);

?>
<html>

<head>
    <!--integrasi dengan bootstrap 4, copy source css dan jsnya untuk mendapatkan tampilan bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <div class="container">
        <!--bagian menu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Notice</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!--item-item menu-->
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=business">Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=entertaniment">Entertaiment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=health">Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=science">Sains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=sports">Olahraga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori.php?kategori=technology">Teknologi</a>
                    </li>

            </div>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><span class="glyphicon glyphicon-log-in"></span>Subscribed</li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-md-4">
                <br />

                <!--batas awal weather widget-->
                <div id="m-booked-weather-bl250-16481">
                    <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:350px;" id="width2">
                        <div class="booked-wzs-250-175_in">
                            <div class="booked-wzs-250-175-data">
                                <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="www.booked.net" /> </a> </div>
                                <div class="booked-wzs-250-175-right">
                                    <div class="booked-wzs-day-deck">
                                        <div class="booked-wzs-day-val">
                                            <div class="booked-wzs-day-number"><span class="plus">+</span>28</div>
                                            <div class="booked-wzs-day-dergee">
                                                <div class="booked-wzs-day-dergee-val">&deg;</div>
                                                <div class="booked-wzs-day-dergee-name">C</div>
                                            </div>
                                        </div>
                                        <div class="booked-wzs-day">
                                            <div class="booked-wzs-day-d">H: <span class="plus">+</span>28&deg;</div>
                                            <div class="booked-wzs-day-n">L: <span class="plus">+</span>21&deg;</div>
                                        </div>
                                    </div>
                                    <div class="booked-wzs-250-175-info">
                                        <div class="booked-wzs-250-175-city">Malang </div>
                                        <div class="booked-wzs-250-175-date">Saturday, 19 December</div>
                                        <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div>
                                    </div>
                                </div>
                            </div> <a target="_blank" href="https://www.booked.net/weather/malang-39952">
                                <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250">
                                    <tr>
                                        <td>Sun</td>
                                        <td>Mon</td>
                                        <td>Tue</td>
                                        <td>Wed</td>
                                        <td>Thu</td>
                                        <td>Fri</td>
                                    </tr>
                                    <tr>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                        <td class="week-day-ico">
                                            <div class="wrz-sml wrzs-18"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="week-day-val"><span class="plus">+</span>28&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>30&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>29&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>29&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>28&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>29&deg;</td>
                                    </tr>
                                    <tr>
                                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>20&deg;</td>
                                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var css_file = document.createElement("link");
                    css_file.setAttribute("rel", "stylesheet");
                    css_file.setAttribute("type", "text/css");
                    css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1');
                    document.getElementsByTagName("head")[0].appendChild(css_file);

                    function setWidgetData(data) {
                        if (typeof(data) != 'undefined' && data.results.length > 0) {
                            for (var i = 0; i < data.results.length; ++i) {
                                var objMainBlock = document.getElementById('m-booked-weather-bl250-16481');
                                if (objMainBlock !== null) {
                                    var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                                    objMainBlock.innerHTML = data.results[i].html_code;
                                    if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                                }
                            }
                        } else {
                            alert('data=undefined||data.results is empty');
                        }
                    }
                </script>
                <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=39952&type=3&scode=124&ltid=3457&domid=w209&anc_id=88939&cmetric=1&wlangID=1&color=137AE9&wwidth=350&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script>
                <!--batas akhir weather widget-->

                <!--batas awal corona widget-->
                <iframe src="https://covid19.ilmucoding.com/widget" width="100%" scrolling="no" height="300px" style="border:none;"></iframe>
                <!--batas akhir corona widget-->

            </div>

            <!--berita akan ditampilkan disini menggunakan card bootstrap-->
            <?php foreach ($data['articles'] as $d) { ?>
                <div class="col-md-4">
                    <br>
                    <div class="card">
                        <img src="<?php echo $d['urlToImage']; ?>" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $d['title']; ?></h6>
                            <p class="card-text"><?php echo $d['description']; ?></p>
                            <a href="<?php echo $d['url']; ?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $d['publishedAt']; ?></small>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>