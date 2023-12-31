<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Cognizance - Medical Health & COVID-19 Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>


    <?php
    include('includes/header.php');
    ?>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="bx bx-search-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Coronavirus Outbreak</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Outbreak</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="outbreak-area ptb-100">
        <div class="container">
            <div class="outbreak-content">
                <div class="outbreak-box-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="single-outbreak-box">
                                <div class="icon">
                                    <img src="assets/img/icon5.png" alt="icon">
                                </div>
                                <h3 class="odometer" data-count="196">00</h3>
                                <p>Total Country</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="single-outbreak-box">
                                <div class="icon">
                                    <img src="assets/img/icon6.png" alt="icon">
                                </div>
                                <h3 class="odometer" data-count="375498">00</h3>
                                <p>Confirmed Cases</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="single-outbreak-box">
                                <div class="icon">
                                    <img src="assets/img/icon7.png" alt="icon">
                                </div>
                                <h3 class="odometer" data-count="16362">00</h3>
                                <p>Deaths</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="single-outbreak-box">
                                <div class="icon">
                                    <img src="assets/img/icon8.png" alt="icon">
                                </div>
                                <h3 class="odometer" data-count="109102">00</h3>
                                <p>Recovered</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/banner-map.png" alt="image">
                <div class="table-responsive">
                    <table id="outbreakTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Country,<br>Other</th>
                                <th>Total<br>Cases</th>
                                <th>New<br>Cases</th>
                                <th>Total<br>Deaths</th>
                                <th>New<br>Deaths</th>
                                <th>Total<br>Recovered</th>
                                <th>Active<br>Cases</th>
                                <th>Serious,<br>Critical</th>
                                <th>Tot&nbsp;Cases/<br>1M pop</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th>375,498</th>
                                <th class="new_case">3,267</th>
                                <th class="new_death">13,068</th>
                                <th>61</th>
                                <th>95,828</th>
                                <th>199,361</th>
                                <td>9,943</td>
                                <td>39.5</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td><a href="#">China</a></td>
                                <td>81,218</td>
                                <td class="new_case">+47</td>
                                <td>3,281</td>
                                <td class="new_death">+4</td>
                                <td>73,650</td>
                                <td>4,287</td>
                                <td>1,399</td>
                                <td>56</td>
                            </tr>
                            <tr>
                                <td><a href="#">Italy</a></td>
                                <td>69,176</td>
                                <td></td>
                                <td>6,820</td>
                                <td></td>
                                <td>8,326</td>
                                <td>54,030</td>
                                <td>3,393</td>
                                <td>1,144</td>
                            </tr>
                            <tr>
                                <td><a href="#">USA</a></td>
                                <td>54,935</td>
                                <td class="new_case">+54</td>
                                <td>784</td>
                                <td class="new_death">+4</td>
                                <td>379</td>
                                <td>53,772</td>
                                <td>1,175</td>
                                <td>166</td>
                            </tr>
                            <tr>
                                <td><a href="#">Spain</a></td>
                                <td>42,058</td>
                                <td></td>
                                <td>2,991</td>
                                <td></td>
                                <td>3,794</td>
                                <td>35,273</td>
                                <td>2,636</td>
                                <td>900</td>
                            </tr>
                            <tr>
                                <td><a href="#">Germany</a></td>
                                <td>32,991</td>
                                <td></td>
                                <td>159</td>
                                <td></td>
                                <td>3,290</td>
                                <td>29,542</td>
                                <td>23</td>
                                <td>394</td>
                            </tr>
                            <tr>
                                <td><a href="#">Iran</a></td>
                                <td>24,811</td>
                                <td></td>
                                <td>1,934</td>
                                <td></td>
                                <td>8,913</td>
                                <td>13,964</td>
                                <td></td>
                                <td>295</td>
                            </tr>
                            <tr>
                                <td><a href="#">France</a></td>
                                <td>22,304</td>
                                <td></td>
                                <td>1,100</td>
                                <td></td>
                                <td>3,281</td>
                                <td>17,923</td>
                                <td>2,516</td>
                                <td>342</td>
                            </tr>
                            <tr>
                                <td><a href="#">Switzerland</a></td>
                                <td>9,991</td>
                                <td class="new_case">+114</td>
                                <td>133</td>
                                <td class="new_death">+11</td>
                                <td>131</td>
                                <td>9,727</td>
                                <td>141</td>
                                <td>1,154</td>
                            </tr>
                            <tr>
                                <td><a href="#">S. Korea</a></td>
                                <td>9,137</td>
                                <td class="new_case">+100</td>
                                <td>126</td>
                                <td class="new_death">+6</td>
                                <td>3,730</td>
                                <td>5,281</td>
                                <td>59</td>
                                <td>178</td>
                            </tr>
                            <tr>
                                <td><a href="#">UK</a></td>
                                <td>8,077</td>
                                <td></td>
                                <td>422</td>
                                <td></td>
                                <td>135</td>
                                <td>7,520</td>
                                <td>20</td>
                                <td>119</td>
                            </tr>
                            <tr>
                                <td><a href="#">Netherlands</a></td>
                                <td>5,560</td>
                                <td></td>
                                <td>276</td>
                                <td></td>
                                <td>2</td>
                                <td>5,282</td>
                                <td>435</td>
                                <td>324</td>
                            </tr>
                            <tr>
                                <td><a href="#">Austria</a></td>
                                <td>5,394</td>
                                <td class="new_case">+111</td>
                                <td>30</td>
                                <td class="new_death">+2</td>
                                <td>9</td>
                                <td>5,355</td>
                                <td>26</td>
                                <td>599</td>
                            </tr>
                            <tr>
                                <td><a href="#">Belgium</a></td>
                                <td>4,269</td>
                                <td></td>
                                <td>122</td>
                                <td></td>
                                <td>461</td>
                                <td>3,686</td>
                                <td>381</td>
                                <td>368</td>
                            </tr>
                            <tr>
                                <td><a href="#">Norway</a></td>
                                <td>2,868</td>
                                <td class="new_case">+2</td>
                                <td>13</td>
                                <td class="new_death">+1</td>
                                <td>6</td>
                                <td>2,849</td>
                                <td>44</td>
                                <td>529</td>
                            </tr>
                            <tr>
                                <td><a href="#">Canada</a></td>
                                <td>2,792</td>
                                <td></td>
                                <td>26</td>
                                <td></td>
                                <td>112</td>
                                <td>2,654</td>
                                <td>1</td>
                                <td>74</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>