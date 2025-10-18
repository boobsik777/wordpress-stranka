<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-9">
        <meta name="viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Blog3</title>
        <style>
            .post-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 10px;
            }
            .author-info {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            .date-box {
                position: absolute;
                top: 10px;
                left: 10px;
                background: #809A1B;
                color: #fff;
                padding: 4px 6px;
                border-radius: 9px;
                text-align: center;
            }
            .image-wrapper {
                position: relative;
                display: inline-block;
            }
            .image-wrapper img {
                display: block;
                width: 100%;
            }
            .centered {
                display: flex;
                justify-content: center;
            }
            .pagination {
                text-align: center;
            }
            .pagination a {
                display: inline-block;
                width: 40px;
                line-height: 40px;
                border-radius: 50%;
                background: #eee;
                color: #333;
            }
            .pagination .active {
                background: #809A1B;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <button type="button" class="btn btn-light">Strona główna</button>
            <h1 class="title">Blog</h1>
            
            <div class="row">
                <!-- 1 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">10</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-9.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">12</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-1-1.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- 3 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">12</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-2.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">10</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-5-2.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- 5 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">10</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-3.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">12</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-4.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- 7 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">12</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-5.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
                <!-- 8 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">10</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-6.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- 9 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">10</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-7.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
                <!-- 10 -->
                <div class="col-sm-6">
                    <div class="thumbnail" style="padding: 25px;">
                        <div class="image-wrapper">
                            <div class="date-box">
                                <div style="font-size: 20px;">12</div>
                                <small>12.2023</small>
                            </div>
                            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/image-4-8.png">
                        </div>
                        <h4 style="margin-top: 25px;">Nazwa wpisu</h4>
                        <div style="margin-top: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        <div class="post-footer" style="margin-top: 30px;">
                            <div class="author-info">
                                <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/rectangle-21-e1760601538688.png" style="margin-left: 0%;">
                                <span>Imię i nazwisko</span>
                            </div>
                            <button type="button" class="btn btn-light">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="centered">
                <ul class="pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <img src="https://group1422.wordpress.com/wp-content/uploads/2025/10/frame-904-e1760524086110.png" style="width: 100%;">
        </div>
    </body>
</html>