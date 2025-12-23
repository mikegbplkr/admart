



<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width, target-densityDpi=medium-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="디지털 옥외광고 플랫폼 광고플레이, 지도검색을 통해 전국에 대형 디지털 옥외광고 매체를 한눈에 확인할 수 있습니다. " />
    <meta property="og:type" content="website">
    <meta property="og:title" content="광고플레이">
    <meta property="og:description" content="디지털 옥외광고 플랫폼 광고플레이">
    <meta property="og:image" content="https://k-goplay.com/assets/images/ct4_banner.jpg">
    <meta property="og:url" content="https://k-goplay.com/">

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- jQuery Modal 끝-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@2.0/nanumsquare.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Assets/css/reset.css">
    <link rel="stylesheet" href="/Assets/css/style.css">
    <link rel="stylesheet" href="/Assets/css/style.mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <title>광고플레이</title>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WTR43FT9');</script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type='text/javascript'>
        //상담하기 작성완료 전송시점 스크립트
        function NA_CONV(conv_type) {
            console.log('NA_CONV: ' + conv_type);

            if (window.wcs) {
                if (!wcs_add) var wcs_add = {};
                wcs_add["wa"] = "s_1a878bbb4839";
                var _conv = {};
                _conv.type = conv_type;
                wcs.trans(_conv);

            }
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NQW99SQR2J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-NQW99SQR2J');
    </script>
    <script src="https://kit.fontawesome.com/c8e40a6547.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTR43FT9"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

<div id="top_header">
    <div class="logo_box">
        <a href="/"><img src="/Assets/images/k-goplay-logo-new.png" alt="광고플레이" width="100"></a>
        <marquee direction="left" scrollamount="2">
            기업광고, 지자체광고, 연예인광고, 지역축제광고, 브랜드런칭광고, 생일축하
            <div>
                1533-1975로 문의 주시면, 예산에 맞춰 패키지로 제안드립니다. 1533-1975
            </div>
        </marquee>
    </div>


<style>
    .red-dot {
        width: 4px;
        height: 4px;
        background-color: red;
        border-radius: 50%;
        position: absolute;
        right: 20px;
        top: 10px;
    }
    .bubble {
        width: 100px;
        height: 20px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        right:50px;
        top: 0px;
    }
    .balloon {
        display: inline-block;
        position: absolute;
        width: 100px;
        margin: 0 auto 10px;
        font-size: 10px;
        font-weight: 400;
        top: -9px;
        padding: 2px;
        background: linear-gradient(to bottom right, #1ebf40, #128c7c);
        color: white;
        border-radius: 10px;
        left: 40px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        animation-name: easeInOutBounce;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        letter-spacing: 0.5px;
    }


        .balloon:after {
            content: '';
            position: absolute;
            border-top: 10px solid #19aa58;
            border-right: 10px solid transparent;
            border-left: 0px solid transparent;
            bottom: -4px;
            left: 3px;
        }

    @keyframes easeInOutBounce {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-1px);
        }
    }
</style>

<div class="item_tool">
    <ul>
        <li>
            <p>지역 바로가기</p>
            <i class="fa-solid fa-angle-down"></i>
            

        </li>
        
        <li class="event">
            <p>테마별 맞춤광고</p>
            <div class="balloon">
                지금 확인해 보세요!
            </div>
            
        </li>
        <li data-type="youtube">
            <p>광고 현장 사례</p>
            <i class="fa-brands fa-youtube" style="color:red;"></i>
        </li>

        
    </ul>

    
    <div class="item no_0">
        
        <div class="segment">
            <div>
                <p>전국/수도권</p>
                <ul class="push">
                    <li data-region="all">전국</li>
                    <li data-region="metro">수도권</li>
                </ul>
            </div>
            <div>
                <p>서울시</p>
                <ul class="push">
                    <li data-region="seoul">서울시(전체)</li>
                </ul>
                <ul class="push">
                    <li data-region="gabuk">강북</li>
                    <li data-region="ganam">강남</li>
                    <li data-region="gadon">강동</li>
                    <li data-region="gaseo">강서</li>
                </ul>
            </div>
            <div>
                <p>광역시도</p>
                <ul class="push">
                    <li data-region="sejon">세종시</li>
                    <li data-region="daejn">대전시</li>
                    <li data-region="gwjoo">광주시</li>
                    <li data-region="daegu">대구시</li>
                </ul>
                <ul class="push">
                    <li data-region="busan">부산시</li>
                    <li data-region="ulsan">울산시</li>
                    <li data-region="chwon">창원시</li>
                    <li data-region="jeju">제주도</li>
                </ul>
            </div>
        </div>
    </div>


    
    <div class="item no_1">
        <div class="title">
            <h4>추천 매체</h4>
            <button class="close"></button>
        </div>
        <div class="segment">
            <div class="content">
                <p>광고플레이가 Pick하는 추천 매체를 확인해 보세요!</p>
                <hr />

                <div class="category_card_list">
                    <div class="card">
                        <div class="header">
                            <div class="title_container">
                                <img src="/assets/images/board_img1.png" />
                                <div class="overlay">
                                    <p>빌딩/건물</p>
                                </div>
                            </div>
                            <span class="desc">
                                빌딩, 건물, 하나, 둘, 셋, 광장, 영화관, 쇼핑몰
                            </span>
                        </div>
                        <div class="body">
                            <div class="list">
                                <div id="0_0" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_1" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_2" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_3" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_4" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_5" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_6" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_7" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_8" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="0_9" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="bottom">
                            <button class="reset all checked">전체선택</button>
                            <button class="submit">지도에서 확인</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <div class="title_container">
                                <img src="/assets/images/board_img1.png" />
                                <div class="overlay">
                                    <p>빌딩/건물</p>
                                </div>
                            </div>
                            <span class="desc">
                                빌딩, 건물, 하나, 둘, 셋, 광장, 영화관, 쇼핑몰
                            </span>
                        </div>
                        <div class="body">
                            <div class="list">
                                <div id="1_0" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_1" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_2" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_3" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_4" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_5" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_6" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_7" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_8" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="1_9" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="bottom">
                            <button class="reset all checked">전체선택</button>
                            <button class="submit">지도에서 확인</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <div class="title_container">
                                <img src="/assets/images/board_img1.png" />
                                <div class="overlay">
                                    <p>빌딩/건물</p>
                                </div>
                            </div>
                            <span class="desc">
                                빌딩, 건물, 하나, 둘, 셋, 광장, 영화관, 쇼핑몰
                            </span>
                        </div>
                        <div class="body">
                            <div class="list">
                                <div id="2_0" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_1" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_2" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_3" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_4" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_5" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_6" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img4.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_7" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img1.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_8" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img2.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>
                                <div id="2_9" class="item active">
                                    <div class="left">
                                        <img class="active" src="/assets/images/board_img3.png" />
                                        <i class="fa-solid fa-circle-check checked"></i>
                                    </div>
                                    <div class="right">
                                        <div class="name">명동 을지한국빌딩</div>
                                        <div class="desc">명동,을지로입구,면세점,글로벌관광객,쇼핑, 글로벌관광객,쇼핑 </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="bottom">
                            <button class="reset all checked">전체선택</button>
                            <button class="submit">지도에서 확인</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="btn_box sticky">
                <button class="reset">선택한 항목 장바구니 담기</button>
                <button class="submit">바로 구매</button>
            </div>
        </div>

    </div>


    
    <div class="item no_2 event">
        <div class="title">
            <h4>테마별 맞춤광고</h4>
            <button class="close"></button>
        </div>
        <div class="segment">



<div class="event_box">
    <div class="item_list">
        <ul>
		
            </li>
            <li>
                건물 대형 전광판 &middot; 빌보드 &middot; 래핑
            </li>
            <li>
                쇼핑몰 &middot; 광장 &middot; 영화관
            </li>
            <li>
                지하철 &middot; 버스 &middot; 공항 &middot; 철도 &middot; 터미널
            </li>
            <li>
                아파트 &middot; 오피스 &middot; 마트 &middot; 편의점
            </li>
            <li>
                2030 전국 대학교               
            </li>
            <li class="active">
                ★ 인물 &middot; 스타 인증샷 포인트 ★
            </li>
            <li>
                ★ 핫플! 타임싱크! ★
            </li>
            <li>
                ★ 패키지 특가! ★
            </li>
        </ul>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/1/1.%eb%8c%80%ed%98%95%ec%a0%84%ea%b4%91%ed%8c%90%ec%98%81%ec%83%81_%ec%9a%a9%eb%9f%89%ec%a4%84%ec%9e%842.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                압도적 스케일
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                임팩트 확실하게
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">​
			    브랜드 가치 제고<br />
			</p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="대형 전광판">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>

            <a href="https://blog.naver.com/k-goplay/223263962486" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>

            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/6/6.%ec%87%bc%ed%95%91%eb%aa%b0,%ea%b4%91%ec%9e%a5_%ec%9a%a9%eb%9f%89%ec%a4%84%ec%9e%842.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                눈높이에서
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                시선 확실하게
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
                브랜드 현장 주목도 <br />
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="쇼핑몰/광장/영화관">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223272434075" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/5/5.%ec%8a%a4%eb%a7%88%ed%8a%b8%ea%b5%90%ed%86%b55.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                일상 속 이동공간
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                정보 전달 확실하게
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
               브랜드 이미지 일상 각인<br />
                
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="교통 미디어">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223254147604" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/4/4.%ec%97%98%eb%a6%ac%eb%b2%a0%ec%9d%b4%ed%84%b0%eb%b3%b4%eb%93%9c_%ec%9a%a9%eb%9f%89%ec%a4%84%ec%9e%84.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                생활밀착 
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                미디어보드
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
                전연령 브랜드 인지도 확대<br />
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="엘리베이터 보드">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223254132718" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/3/3.%ec%a0%84%ea%b5%ad%eb%8c%80%ed%95%99%ea%b5%90_%ec%9a%a9%eb%9f%89%ec%a4%84%ec%9e%842.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                전국 135개
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                대학교 동시 송출
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
				2030 집중 타깃<br />
			</p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="2030MZ 대학교 미디어">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223254115279" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item active">
        <div class="left">
             <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/2/%ec%a0%9c%eb%8b%88DOOH!!.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                스타 DOOH
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                대형으로 전해오는 감동
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
			    3일, 7일, 15일<br />
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="인물스타">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223231042229" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/7/7.%ed%95%ab%ed%94%8c_%ed%83%80%ec%9e%84%ec%8b%b1%ed%81%ac_%ec%9a%a9%eb%9f%89%ec%a4%84%ec%9e%845.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                핫플레이스
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                미디어 싱크
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:15px">
                문화・예술・축제・관광<br />          
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="핫플/관광특구">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223272432320" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드(준비중)</a>

            </p>
        </div>
    </div>
    <div class="item">
        <div class="left">
            <video muted loop style="width:100%;height:100%;object-fit:cover">
                <source src="/assets/images/event/8/8.%ed%8a%b9%ea%b0%80%eb%a7%a4%ec%b2%b43.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="right">
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                와이드 커버리지
            </p>
            <p class="desc" style="font-weight:700;color:darkblue;font-size:23px">
                특가매체
            </p>
            <p class="subject" style="font-weight:400;color:darkblue;font-size:18px">
                합리적인 비용 전광판 패키지
            </p>
            <p class="desc">
            </p>
            <div class="talk_box">
                <div class="chattalk" data-event-category="쇼핑몰/광장/영화관">
                    <img src="/assets/images/talk_mov_2.gif" />
                    <span>라이브 톡 상담하기</span>
                </div>
            </div>
            <a href="https://blog.naver.com/k-goplay/223283745255" target="_blank">
                <p class="subject" style="font-weight:600;color:darkblue;font-size:16px">
                    
                </p>
            </a>
            <p class="subject">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f" title="로그인으로 이동"><img src="/Assets/images/down.png" style="width:15px" /> 매체 소개서 다운로드</a>

            </p>
        </div>
    </div>
</div>

<script>

    //시작 시 곧바로 이벤트 팝업 실행
    var screen_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    var is_mobile_view_setting = (screen_width >= 1200) ? false : true;

    if (!is_mobile_view_setting) {
        $('.item video').prop('autoplay', true);
    }

    $(document).ready(function () {
        //이벤트 팝업
        $('.item_list > ul li').click(function (event) {
            event.stopPropagation();

            var idx = $(this).index();
            $('.item_list > ul li').eq(idx).addClass("active");
            $('.item_list > ul li').not(':eq(' + idx + ')').removeClass("active");

            $('.event_box .item').eq(idx).addClass("active");
            $('.event_box .item').not(':eq(' + idx + ')').removeClass("active");

        });

    });

    $(".chattalk").click(function (e) {
        var event_category = $(this).data('event-category');
        var first_send_msg = '[이벤트:' + event_category + '] 문의사항과 함께 전화번호를 남겨 주시면 빠른상담 지원드립니다\r\n';

        /*
            // 새로운 유저챗이 열립니다.
            ChannelIO('openChat');

            // 새로운 유저챗이 열리고, 메시지 입력창에 'Text here'가 입력됩니다.
            // 만약 서포트봇이 운영 중인 경우, 서포트봇이 진행됩니다.
            ChannelIO('openChat', undefined, 'Text here');

            // id가 '123'인 유저챗이 존재할 경우, 해당 유저챗이 열립니다.
            // 만약 존재하지 않을 경우, 라운지가 열립니다.
            ChannelIO('openChat', '123');

            // id가 '123'인 유저챗이 존재할 경우, 해당 유저챗이 열립니다.
            // 만약 존재하지 않을 경우, 라운지가 열립니다.
            ChannelIO('openChat', 123);
        */

        ChannelIO('openChat', undefined, first_send_msg);

    });
</script>
        </div>
    </div>

    <div class="item no_xxxxx" style="display:none">
        <div class="title">
            <h4>기타 옵션</h4>
            <button class="close"></button>
        </div>
        <div class="segment">
            <div>
                <p>성별</p>
                <ul>
                    <li class="active">남</li>
                    <li>여</li>
                </ul>
            </div>
            <div>
                <p>세대</p>
                <ul>
                    <li>~10</li>
                    <li class="active">20</li>
                    <li class="active">30</li>
                    <li>40</li>
                    <li>50</li>
                    <li>60~</li>
                </ul>
            </div>
            <div>
                <p>요일</p>
                <ul>
                    <li>월</li>
                    <li class="active">화</li>
                    <li class="active">수</li>
                    <li class="active">목</li>
                    <li class="active">금</li>
                    <li>토</li>
                </ul>
            </div>
            <div>
                <p>시간</p>
                <div class="time_box"><input type="text" placeholder="06 : 00"><span>~</span><input type="text" placeholder="17 : 00"></div>
            </div>
            <div class="btn_box">
                <button class="reset">초기화</button>
                <button class="submit">확인</button>
            </div>
        </div>
    </div>

    
    <div class="item no_3" >
        
        <div class="segment">
            <div>
                
                <ul class="push">
                    <li class="active" data-price="all">전체 보기</li>
                    <li data-price="less100">100만원 이하</li>
                    <li data-price="100_300">100 - 300만원</li>
                    <li data-price="300_500">300 - 500만원</li>
                    <li data-price="500_1000">500 - 1,000만원</li>
                    <li data-price="1000_1500">1,000 - 1,500만원</li>
                    <li data-price="more_1500">1,500만원 이상</li>
                </ul>
            </div>
        </div>
    </div>

    
<div class="item no_4">
    
    <div class="segment">
        <div>
            
            <ul class="push">
                <li class="active" data-period="all">전체 보기</li>
                <li data-period="1">1일</li>
                <li data-period="3">3일</li>
                <li data-period="7">7일</li>
                <li data-period="15">15일</li>
                <li data-period="30">1개월 이상</li>
            </ul>
        </div>
    </div>
</div>



<style>
    .popup_event {
        position: absolute;
        top: 160px;
        margin: auto;
        height: auto;
        border: 1px solid #565656;
        z-index: 100000000;
        display: none;
        box-shadow: 2px 2px 2px 1.1px rgb(50 51 51 / 50%);
    }

        .popup_event.active {
            display: block;
        }

        .popup_event .close {
            position: absolute;
            right: 10px;
            top: 10px;
        }
</style>

<div class="popup_event">
    <div class="close">
        <a href="#" onclick="javascript:$('.popup_event').removeClass('active')">
            <img src="/assets/images/close.png" />
        </a>
    </div>
    <a href="https://blog.naver.com/k-goplay/223461273625" target="_blank">
        <img src="/assets/images/event/popup/%ec%a6%90%ea%b2%a8%ec%b0%be%ea%b8%b0.png" />

    </a>
</div>

<script>

    //시작 시 곧바로 이벤트 팝업 실행
    var screen_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    var is_mobile_view_setting = (screen_width >= 1200) ? false : true;

    if (!is_mobile_view_setting) {
        $('.item video').prop('autoplay', true);
    }

    $(document).ready(function () {

        // 팝업 On/Off
        // 팝업창을 끄고싶으면 아래 showPopup 값을 false로 바꾸세요
        // - true: 표시
        // - false: 끄기
        var showPopup = false;

        if (showPopup && !is_mobile_view_setting) {
            setTimeout(setPostion, 10);
        }

    });

    function setPostion() {

        var popup_win = $('.popup_event');
        var event_win = $('#top_header .item_tool .item.no_2.event');
        var left = event_win.css("left").replace("px", "") - popup_win.css("width").replace("px", "");
        popup_win.css({
            'position': 'absolute',
            'left': (left - 10),
        });

        $('.popup_event').addClass('active');
    }

</script>

    <script>
        $(document).ready(function () {


            //이벤트 팝업
            $('#top_header .item_tool >ul li.event').click(function (event) {
                event.stopPropagation();

                var menu = $(this);
                menu.toggleClass("active");
                var property_win = $('#top_header .item_tool .item.no_2.event');

                if (menu.hasClass("active")) {
                    var height = $(window).height();
                    var width = $(window).width();

                    property_win.css({
                        'position': 'absolute',
                        'left': ((width / 2) - (property_win.width() / 2)),
                        'top': 160
                    });

                    property_win.addClass('view');

                } else {

                    property_win.removeClass('view');
                }

            });
            $('#top_header .item_tool >ul li:not(.event)').click(function (event) {
                event.stopPropagation();

                switch ($(this).data("type")) {
                    case "youtube":
                        window.open("https://www.youtube.com/channel/UCxXNbNumZkcpjIGzUaOnfnQ", "_blank");
                        return;
                    case "guidebook":
                        return;
                    default:
                }
                var idx = $(this).index();
                $('#top_header .item_tool >ul li').each(function (index, element) {
                    if (idx == index) {
                        var menu = $(this);
                        menu.toggleClass("active");
                        var property_win = $('#top_header .item_tool .item.no_' + index);

                        if (menu.hasClass("active")) {
                            menu.children('i').removeClass('fa-angle-down');
                            menu.children('i').addClass('fa-angle-up');

                            property_win.css('left', menu.position().left - (property_win.width() / 2) + (menu.width() / 2));
                            property_win.addClass('view');


                        } else {
                            menu.children('i').removeClass('fa-angle-up');
                            menu.children('i').addClass('fa-angle-down');

                            property_win.removeClass('view');
                        }
                    }
                    else {
                        var elem = $(element);
                        elem.children('i').removeClass('fa-angle-up');
                        elem.children('i').addClass('fa-angle-down');
                        elem.removeClass("active");

                        $('#top_header .item_tool .item.no_' + index).removeClass('view');

                    }
                });


            });

            //시작 시 곧바로 이벤트 팝업 실행
            var screen_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
            var is_mobile_view_setting = (screen_width >= 1200) ? false : true;

            if (!is_mobile_view_setting) {
                //PC 버전일 때만 팝업 창 띄우기
                $('#top_header .item_tool >ul li.event').click();
            }


            $('#top_header .item_tool .item .close').click(function (event) {
                $('#top_header .item_tool .item').removeClass('view');
                $('#top_header .item_tool >ul li').removeClass('active');
                $('#top_header .item_tool >ul li i').removeClass('fa-angle-up');
                $('#top_header .item_tool >ul li i').addClass('fa-angle-down');

            });

            $('#top_header .item_tool .segment>div>ul li').click(function () {
                $(this).toggleClass('active');
            });

            $('#top_header .item_tool .item.no_0 .segment>div>ul.push li').click(function () {
                var region_code = $(this).data('region');
                var new_point = new naver.maps.LatLng(36.5781992, 126.6767157);
                switch (region_code) {
                    case "all":
                        new_point = new naver.maps.LatLng(36.5781992, 126.6767157);
                        mapDiv.morph(new_point, 7, "easeInCubic");
                        break;
                    case "metro":
                        new_point = new naver.maps.LatLng(37.5133118, 126.8868264);
                        mapDiv.morph(new_point, 11, "easeInCubic");
                        break;
                    case "seoul":
                        new_point = new naver.maps.LatLng(37.5399951, 126.985124);
                        mapDiv.morph(new_point, 13, "easeInCubic");
                        break;
                    case "gabuk":
                        new_point = new naver.maps.LatLng(37.5542858, 126.9534954);
                        mapDiv.morph(new_point, 14, "easeInCubic");
                        break;
                    case "ganam":
                        new_point = new naver.maps.LatLng(37.5028945, 127.0285543);
                        mapDiv.morph(new_point, 14, "easeInCubic");
                        break;
                    case "gadon":
                        new_point = new naver.maps.LatLng(37.5163754, 127.1179899);
                        mapDiv.morph(new_point, 14, "easeInCubic");
                        break;
                    case "gaseo":
                        new_point = new naver.maps.LatLng(37.4999665, 126.9143137);
                        mapDiv.morph(new_point, 14, "easeInCubic");
                        break;
                    case "sejon":
                        new_point = new naver.maps.LatLng(36.5277087, 127.2019917);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "daejn":
                        new_point = new naver.maps.LatLng(36.3429475, 127.3579364);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "gwjoo":
                        new_point = new naver.maps.LatLng(35.1768504, 126.8388323);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "daegu":
                        new_point = new naver.maps.LatLng(35.8524908, 128.5671191);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "busan":
                        new_point = new naver.maps.LatLng(35.147941, 129.0338664);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "ulsan":
                        new_point = new naver.maps.LatLng(35.5095476, 129.2992549);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "chwon":
                        new_point = new naver.maps.LatLng(35.2178113, 128.5724406);
                        mapDiv.morph(new_point, 12, "easeInCubic");
                        break;
                    case "jeju":
                        new_point = new naver.maps.LatLng(33.3740729, 126.4474444);
                        mapDiv.morph(new_point, 11, "easeInCubic");
                        break;
                    default:
                        break;
                }

                // 검색 후 morph 이동시간 이후에 다시 한번 updateMarkers 해줘야 지도가 갱신됨
                setTimeout(() => {
                    updateMarkers(mapDiv, markers);
                }, "600")
            });

            $('#top_header .item_tool .item.no_1 .segment .content .category_card_list .card .body .list .item').click(function () {
                category.toggleItem($(this));
            });

            $('#top_header .item_tool .item.no_1 .segment .content .category_card_list .card .bottom > button.reset.all').click(function () {
                category.toggleAllItem($(this), $(this).hasClass('checked'));
            });

            var category = {
                toggleItem: function (item) {
                    $(item).toggleClass('active');
                    $(item).find('.left i').toggleClass('checked');
                    $(item).find('.left img').toggleClass('active');
                },
                checkItem: function (item, turn_on) {
                    var element = $(item);
                    if (turn_on) {
                        element.addClass('active');
                        element.find('.left i').addClass('checked');
                        element.find('.left img').addClass('active');
                    } else {
                        element.removeClass('active');
                        element.find('.left i').removeClass('checked');
                        element.find('.left img').removeClass('active');
                    }
                },
                toggleAllItem: function (item, checkItem) {
                    var items = $(item).parents('.card').find('.body .list .item');

                    for (var i = 0; i < items.length; i++) {
                        this.checkItem(items[i], !checkItem);
                    }

                    $(item).toggleClass('checked');
                },
            };
        });


    </script>
</div>



    <div class="menu_box">
        <div class="acc_menu">
            <a href="https://www.k-goplay.com/assets/public/doc/광고플레이-광고매체소개서.pdf" target="_blank">이용 가이드</a>
            <a class="company" href="/Main/Index#ct2">회사소개</a>

            <div class="menu_list">
                <div class="blank"></div>
                <ul>
                    <li><a href="/Main/Index#ct3">주요매체</a></li>
                    <li><a href="/Main/Index#ct4">특허현황</a></li>
                    <li><a href="/Main/Index#ct6">CONTACT</a></li>
                </ul>

            </div>
        </div>

    </div>


    <div class="vertical"></div>
    <div class="account_box">
            <div class="acc_menu">
                <a href=" /Admin/Account/SignIn?ReturnUrl =%2f">로그인</a>
                <a href="/Admin/Account/SignUp">회원가입</a>
            </div>
    </div>
</div>
<div id="top_header2">
    <div class="search_box">
        <div class="search">
            <input type="text" class="search_input" placeholder="원하는 매체를 검색해 주세요 (홍대, 신촌, 강남 등)">
            <button class="close_btn"></button>
            <button class="search_btn"></button>
        </div>
    </div>
    <div class="search_summary">
        <span class="message"></span>
        <button class="search_btn"></button>
    </div>
    <div class="category_box">
        <div class="item_tool">
            <div data-category="0" class="all active">
                <p>전체</p>
            </div>
            <div data-category="11">
                <p>빌딩</p>
                <div class="detail_ballon">
                    옥상&middot;벽면
                </div>
            </div>
            <div data-category="13">
                <p>교통</p>
                <div class="detail_ballon">
                    버스정류장&middot;지하철&middot;공항&middot;철도&middot;터미널&middot;고속도로&middot;가로시설
                </div>
            </div>
            <div data-category="14">
                <p>쇼핑</p>
                <div class="detail_ballon">
                    쇼핑몰&middot;광장&middot;영화관
                </div>
            </div>
            <div data-category="15">
                <p>생활</p>
                <div class="detail_ballon">
                    카페&middot;마트&middot;편의점&middot;그 외 생활시설
                </div>
            </div>
            <div data-category="12">
                <p>아파트&middot;오피스 엘리베이터</p>
                <div class="detail_ballon">
                    아파트&middot;오피스 엘리베이터
                </div>
            </div>
        </div>
        <!--
            <div class="item_box">
                <div class="group">
                    <label class="check_item" style="float:left;">
                        벽면형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="check_item" style="float:left;">
                        옥상형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <label class="check_item" style="float:left;">
                        지주형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="group">
                    <label class="check_item" style="float:left;">
                        대형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark size"></span>
                    </label>

                    <label class="check_item" style="float:left;">
                        중형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark size"></span>
                    </label>

                    <label class="check_item" style="float:left;">
                        소형
                        <input type="checkbox" checked="checked">
                        <span class="checkmark size"></span>
                    </label>

                </div>

            </div>
        -->
    </div>
    <div class="sns_link">
        <style>
            .sns_link {
                margin: 10px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
                min-width: 115px;
            }

                .sns_link a i {
                    font-size: 17px;
                    opacity: 0.5;
                }

                    .sns_link a i:hover {
                        opacity: 1.0;
                    }

                .sns_link a img {
                    width: 13px;
                    opacity: 0.5;
                }

                    .sns_link a img:hover {
                        opacity: 1.0;
                    }
        </style>
        <a href="https://www.instagram.com/k.go.play?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.youtube.com/@k-goplay" target="_blank">
            <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61557096130901" target="_blank">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://blog.naver.com/k-goplay" target="_blank">
            <img src="/assets/images/blog_link.png" style="width:18px" />
        </a>
    </div>

</div>

<script>
    $(document).ready(function () {

        $('#top_header2 .item_tool >div').click(function (event) {
            event.stopPropagation();

            var menu = $(this);
            // 이미 선택한 버튼 재클릭일 경우 return
            var current_selected_counts = $('#top_header2 .item_tool >div.active').length;
            if (current_selected_counts == 1 && menu.hasClass("active")) {
                menu = $('#top_header2 .item_tool >div.all');
            } 

            // 클릭한 버튼 활성화
            var category = $(this).data("category");
            var enabled = false;
            if (menu.hasClass("all") && !menu.hasClass("active")) {
                $('#top_header2 .item_tool >div').removeClass("active");
                menu.addClass("active");
                enabled = true;
            } else {
                menu.toggleClass("active");
                $('#top_header2 .item_tool >div.all').removeClass("active");
                enabled = false;

            }

            var enabledCategories = {};
            enabledCategories.items = $('#top_header2 .item_tool >div.active');
            enabledCategories.ids = [];
            for (var i = 0; i < enabledCategories.items.length; i++) {
                enabledCategories.ids.push($(enabledCategories.items[i]).data('category'));
            }
            // 해당 분류만 표시하기
            showCateogryADList(enabledCategories, enabled);

            // 선택한 카테고리의 데이터 가져오기
            //getADResultByCategory(category);


        });
    });

    function showCateogryADList(enabledCategories, enabled) {

        if (true) {

            //지도에서 모든 마커 삭제
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
                $(".more_marker").remove();
            }
            for (var j = 0; j < current_marker_list.length; j++) {
                current_marker_list[j].setMap(null);
            }

            // 모든 마커 초기화
            markers.splice(0, markers.length);
            current_marker_list.splice(0, current_marker_list.length);

            //ad_list = null;             // 광고판 전체리스트
            markers = [];               // Maker 전체 리스트
            current_ad_list = [];       // 지도 바운더리 안에 있는 광고판 정보 리스트
            current_marker_list = [];   // 지도 바운더리 안에 있는 Marker 정보 리스트
            //selected_marker = 'undefined';     // 현재 선택한 Marker
            //updateMarkers(mapDiv, markers);


        }
        var isAll = enabledCategories.ids.includes(0);
        if (isAll) {
            adSearchList.initializeSearch();
            CategoryMenu.InitializeCategoryMenuUI();
            showSearchMessage("전체 " + ad_list.length + "개의 매체가 필터되었습니다", "info");

            return;
        } else {
            adSearchList.emptySearchBox();
            ad_list = ad_list_all;
        }

        // 현재 광고 목록에서 카테고리를 구분하여 표시한다.
        for (var i = 0, len = ad_list.length; i < len; i++) {

            var ad_item = ad_list[i];
            if (!isAll && (ad_item.pickcategory == 'undefined' || ad_item.pickcategory == null)) continue;


            var arr_category = ad_item.pickcategory.split(',');
            var exist = false;

            for (var j = 0; j < arr_category.length; j++) {
                for (var k = 0; k < enabledCategories.ids.length; k++) {
                    if (arr_category[j] == enabledCategories.ids[k]) {
                        exist = true; // 중복된 값이 있음
                        continue;
                    }
                }
            }
           
            if (!exist) continue;


            // 지도에 표시

            var comapny_name = (ad_item.representcompanyname != null && ad_item.representcompanyname != 'undefined') ? ad_item.representcompanyname : ad_item.representname;
            var latlng = new naver.maps.LatLng(ad_item.latitude, ad_item.longitude),
                marker = new naver.maps.Marker({
                    position: latlng,
                    map: mapDiv,
                    draggable: false,
                    //icon: "/Content/Assets/pin_default.png",
                    icon: {
                        content: '<div class="inner"></div>',
                        //size: new naver.maps.Size(22, 35),
                        //anchor: new naver.maps.Point(11, 35)
                    },
                    title: comapny_name,
                    idx: ad_item.idx
                });

            markers.push(marker);

            // 마커 마우스 클릭,오버,아웃 이벤트 설정
            setMarkerItemEvents(marker, ad_item);

        }


        updateMarkers(mapDiv, markers);

        // 기본 위치로 이동
        //mapDiv.morph(mapDiv.getCenter(), 13, "easeInCubic");



        //여기서부터 Maker Clustering 필요


        setTimeout(() => {

            var markerContent = '<div class="more_marker"></div>';

            var clusterMarker0 = {
                content: markerContent,
                size: N.Size(60, 60),
                anchor: N.Point(30, 30)
            },
                clsuterMarker1 = {
                    content: markerContent,
                    size: N.Size(60, 60),
                    anchor: N.Point(30, 30)
                },
                clsuterMarker2 = {
                    content: markerContent,
                    size: N.Size(60, 60),
                    anchor: N.Point(30, 30)
                },
                clsuterMarker3 = {
                    content: markerContent,
                    size: N.Size(60, 60),
                    anchor: N.Point(30, 30)
                },
                clsuterMarker4 = {
                    content: markerContent,
                    size: N.Size(60, 60),
                    anchor: N.Point(30, 30)
                },
                clsuterMarker5 = {
                    content: markerContent,
                    size: N.Size(60, 60),
                    anchor: N.Point(30, 30)
                };

            markerClustering = new MarkerClustering({
                minClusterSize: 8, //최소그룹
                maxZoom: 16, // 클러스터링 표시 지도 수준
                map: mapDiv,
                markers: markers,
                disableClickZoom: true,
                gridSize: 120,
                icons: [clusterMarker0, clsuterMarker1, clsuterMarker2, clsuterMarker3, clsuterMarker4, clsuterMarker5],
                indexGenerator: [5, 10, 20, 50, 100],
                stylingFunction: function (clusterMarker, clusterMember, count) {
                    //console.log(clusterMarker);

                    var markerContent = '+' + count + '';
                    markerContent += '<ul class="" >';

                    for (var i = 0; i < clusterMember.length; i++) {
                        var item = clusterMember[i].getElement();
                        var id = $(item).find('div:first-child').data('id');
                        var icon_url = $(item).find(".img img").attr("src");
                        var name = $(item).find(".segment p:first-child").text();
                        var tags = $(item).find(".segment p:nth-child(2)").text();

                        markerContent += '<li onclick="markerItemSelected(' + id + ', true);">';
                        markerContent += '<img src="' + icon_url + '" width="18">';
                        markerContent += '<div>';
                        markerContent += '<p>' + name + '</p>';
                        markerContent += '<p>' + tags + '</p>';
                        markerContent += '</div>';
                        markerContent += '</li>';
                    }
                    markerContent += '</ul>';

                    var clusterItem = $(clusterMarker.getElement()).find('div:first-child');
                    clusterItem.html(markerContent);

                    //클릭 이벤트
                    clusterItem.on('click', function (e) {
                        //다른 열린 리스트는 닫고
                        $('.container.map .more_marker ul').removeClass('view');

                        //현재 클릭한 리스트만 오픈한다.
                        $(this).find('ul').toggleClass('view');
                        e.stopPropagation();
                    });


                    //스크롤 이벤트
                    clusterItem.find('ul').bind('mousewheel', function (e, d) {
                        // 마우스 스크롤 이벤트 전파 방지
                        e.stopPropagation();
                    });
                }
            });
        }, "10")

        if (markers.length > 0) {
            showSearchMessage("전체 매체 중 " + markers.length + "개의 매체가 필터링되었습니다", "info");
        } else {
            showSearchMessage("확인된 매체가 없습니다. 매체종류를 변경해 보세요 ^^", "warning");
        }
    }

    function getADResultByCategory(category) {

        if (category == 0) {
            // 검색박스에서 X 버튼 ..
            GetBommADList();
            return;
        }

        var params = 'category=' + category;

        $.ajax({
            cache: false,
            url: "/Map/GetADListByCateory",
            type: "POST",
            data: params,
            beforeSend: function () {
                //not implemented
            },
            success: function (data) {
                console.log(data);
                GetBommADList();
            }, // success
            error: function (xhr, status) {
                console.log(xhr + " : " + status);
            },
            complete: function () {
                // not implemented
            }
        });
    }

    var CategoryMenu = {
        InitializeCategoryMenuUI: function () {
            /// '전체' 메뉴만 활성화되도록 메뉴 UI만 초기화한다.
            /// 실제로 클릭했을 때 동작은 하지 않음
            $('#top_header2 .item_tool >ul li').removeClass("active");
            $('#top_header2 .item_tool >ul li.all').addClass("active");
        },
        InitializeCategoryMenu: function () {
            $('#top_header2 .item_tool >ul li').removeClass("active");
            $('#top_header2 .item_tool >ul li.all').addClass("active");

            adSearchList.searchKeyword("");
        }
    };
    
</script>

<style>
    .popup_event {
        position: absolute;
        top: 160px;
        margin: auto;
        height: auto;
        border: 1px solid #565656;
        z-index: 100000000;
        display: none;
        box-shadow: 2px 2px 2px 1.1px rgb(50 51 51 / 50%);
    }

        .popup_event.active {
            display: block;
        }

        .popup_event .close {
            position: absolute;
            right: 10px;
            top: 10px;
        }
</style>

<div class="popup_event">
    <div class="close">
        <a href="#" onclick="javascript:$('.popup_event').removeClass('active')">
            <img src="/assets/images/close.png" />
        </a>
    </div>
    <a href="https://blog.naver.com/k-goplay/223461273625" target="_blank">
        <img src="/assets/images/event/popup/%ec%a6%90%ea%b2%a8%ec%b0%be%ea%b8%b0.png" />

    </a>
</div>

<script>

    //시작 시 곧바로 이벤트 팝업 실행
    var screen_width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    var is_mobile_view_setting = (screen_width >= 1200) ? false : true;

    if (!is_mobile_view_setting) {
        $('.item video').prop('autoplay', true);
    }

    $(document).ready(function () {

        // 팝업 On/Off
        // 팝업창을 끄고싶으면 아래 showPopup 값을 false로 바꾸세요
        // - true: 표시
        // - false: 끄기
        var showPopup = false;

        if (showPopup && !is_mobile_view_setting) {
            setTimeout(setPostion, 10);
        }

    });

    function setPostion() {

        var popup_win = $('.popup_event');
        var event_win = $('#top_header .item_tool .item.no_2.event');
        var left = event_win.css("left").replace("px", "") - popup_win.css("width").replace("px", "");
        popup_win.css({
            'position': 'absolute',
            'left': (left - 10),
        });

        $('.popup_event').addClass('active');
    }

</script>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <ul class="m_head_top">
            <li><a href=" /Admin/Account/SignIn?ReturnUrl =%2f">로그인</a></li>
            <li><a href="/Admin/Account/SignUp">회원가입</a></li>
            <li><a href="#" class="green" onclick="$('.sidenav ul.m_head_list li a.call').click()">전화상담</a></li>
        </ul>
        <ul class="m_head_list">
            <li>
                <a href="#" class="online">
                    <p>온라인상담</p>
                </a>
            </li>
            <li>
                <a href="/Social/KakaoChat" target="_blank" class="kakao" onmousedown="NA_CONV('custom001');">
                    <p>카톡상담</p>
                </a>
            </li>
            <li>
                <a href="tel:1533-1975" class="call-xxxx">
                    <p>전화상담</p>
                </a>
            </li>
        </ul>
        
    </div>
    <div class="m_head">
        <div class="flex_box">
            <h1 class="logo">
                <a href="/Map/Index"><img src="/Assets/images/k-goplay-logo.png" alt="광고플레이" width="100"></a>
            </h1>

            <a href="#0" class="opennav"></a>
        </div>

        <div class="search">
            <input type="text" placeholder="검색어를 입력하세요">
            <button class="search_btn"></button>
        </div>
        <div class="m_top_menu">
            <ul>
                <li><a href="#"><img src="/Assets/images/icon1.png" alt="전광판광고" width="18"><img src="/Assets/images/icon1_active.png" alt="전광판광고" width="18">전광판광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon2.png" alt="빌보드광고" width="21"><img src="/Assets/images/icon2_active.png" alt="빌보드광고" width="21">빌보드광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon3.png" alt="야립광고" width="23"><img src="/Assets/images/icon3_active.png" alt="야립광고" width="23">야립광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon4.png" alt="교통광고" width="26"><img src="/Assets/images/icon4_active.png" alt="교통광고" width="26">교통광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon5.png" alt="기타" width="13"><img src="/Assets/images/icon5_active.png" alt="기타" width="13">기타</a></li>
            </ul>
        </div>

        <script>
            var deatil_view_html_result = '';
            var is_mobile_view = false;
            $(function () {
                $(window).resize(function () {
                    // if width is less than 1200px, this is considered as a mobile view
                    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                    var is_mobile_view_new = (width >= 1200) ? false : true;
                    if (is_mobile_view != is_mobile_view_new) {
                        if (is_mobile_view_new) {
                            $('#ad_item_detail_panel').html('');
                            $('#m_ad_item_detail_panel').html(deatil_view_html_result);
                        } else {
                            $('#m_ad_item_detail_panel').html('');
                            $('#ad_item_detail_panel').html(deatil_view_html_result);
                        }
                    }
                    is_mobile_view = is_mobile_view_new;

                    console.log("mobile view: " + is_mobile_view + ": width: " + width);


                    // 스크린 최대화 했을 경우, object-fit을 cover에서 contain으로 변경한다.
                    var isFullScreen = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
                    var header_video = $("#header_video");
                    if (header_video && isFullScreen) {
                        $(header_video).css('object-fit', 'contain');
                    } else {
                        $(header_video).css('object-fit', 'cover');
                    }

                    if (panoramaDiv) {
                        //파노라마 가로 너비 AutoResize처리
                        var newPanoSize = new naver.maps.Size();
                        newPanoSize.width = Math.round(width);
                        panoramaDiv.setSize(newPanoSize.clone());
                    }
                });

                $(window).resize();

                $('.opennav').click(function () {
                    $('.nav_bg').show();
                    $('html,body').css({
                        'overflow': "hidden"
                    });
                    $('.closebtn').css({
                        'right': "295px"
                    });
                    $('.sidenav').css({
                        'overflow-x': "initial"
                    });
                    $('.sidenav').css({
                        'overflow-x': "initial"
                    });
                    $('.sidenav').css({
                        'right': "0"
                    });
                });
            });
            $(function () {
                $('.closebtn').click(function () {
                    $('.nav_bg').hide();

                    $('html,body').css({
                        'overflow': ""
                    });
                    $('.closebtn').css({
                        'right': "-50px"
                    });
                    $('.sidenav').css({
                        'overflow-x': "hidden"
                    });
                    $('.sidenav').css({
                        'right': "-290px"
                    });
                });
            });
            $(function () {
                $('.sidenav ul.m_head_list li a').click(function () {
                    $('.nav_bg').hide();

                    $('html,body').css({
                        'overflow': ""
                    });
                    $('.closebtn').css({
                        'right': "-50px"
                    });
                    $('.sidenav').css({
                        'overflow-x': "hidden"
                    });
                    $('.sidenav').css({
                        'right': "-290px"
                    });
                });
            });
        </script>

        <div class="nav_bg"></div>
    </div>
    <header>
        <div class="side_menu">
            <span class="btn_fold"><span class="ion-navicon-round"></span></span>

            <!--Header_top으로 아래 내용 이동
                <div class="side_top">
                    <h2 class="logo"><a href="/Main/Index"><img src="~/Assets/images/k-goplay-logo.png" alt="광고플레이"></a></h2>
                   스마트AI 가림
                        <a id="recommendation" href="#" class="link_btn">
                            <img src="/Assets/images/ai-bot.png" alt="맞춤광고">Smart AI
                        </a>
                </div>
                    <div class="acc_menu">
                        <a href="/Admin/Account/SignIn?ReturnUrl=%2f">로그인</a>
                        <a href="/Admin/Account/SignUp">회원가입</a>
                        <a href="#" class="green" onclick="$('.sidenav ul.m_head_list li a.call').click()">전화상담</a>
                    </div>
            -->

            <div class="recommendation-menu">
                <div class="recommend-title">
                    <img src="/Assets/images/ai-bot.png" />
                    <span class="title">
                        <strong>Smart AI </strong> 맞춤광고 추천*
                        <hr />
                    </span>
                </div>
                <div class="button_group view">
                    <div class="title">
                        <h4>* 광고 유형</h4>
                        
                    </div>
                    <div class="segment">
                        <div>
                            <ul>
                                <li class="">테크/가전</li>
                                <li>패션</li>
                                <li>뷰티</li>
                            </ul>
                            <ul>
                                <li>홈/리빙</li>
                                <li>식품</li>
                                <li>자동차</li>
                            </ul>
                            <ul>
                                <li>공연/컬쳐</li>
                                <li>여행/레저</li>
                                <li>스포츠</li>
                            </ul>
                            <ul>
                                <li>관광</li>
                                <li>축제/이벤트</li>
                                <li>소셜 캠페인</li>
                            </ul>
                            <ul>
                                <li>교육/키즈</li>
                                <li>출판</li>
                                <li>기타</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="button_group view">
                    <div class="title">
                        <h4>* 성별</h4>
                    </div>
                    <div class="segment">
                        <div>
                            <ul>
                                <li class="">남</li>
                                <li>여</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="button_group view">
                    <div class="title">
                        <h4>* 연령대</h4>
                    </div>
                    <div class="segment">
                        <div>
                            <ul>
                                <li class="">10대 미만</li>
                                <li>10대</li>
                                <li>20대</li>
                            </ul>
                            <ul>
                                <li>30대</li>
                                <li>40대</li>
                                <li>50대</li>
                            </ul>
                            <ul>
                                <li>60대</li>
                                <li>70대</li>
                                <li>80대 이상</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="ai-search">
                    <button class="reset">초기화</button>
                    <button class="search">확인</button>
                </div>
            </div>


            
            



            <div class="list_wrap desktop">
                <div class="list_ct">
                    <div class='inner' style='text-align:center'>
                        <h5 style='color:gray'>데이터를 읽고 있습니다</h5>
                    </div>
                </div>
            </div>
            

            <div id="ad_item_detail_panel" class="popup_ct popup_ct1">
                
            </div>

        </div>
        <div class="top_menu">
            <ul>
                <li><a href="#"><img src="/Assets/images/icon1.png" alt="전광판광고" width="18"><img src="/Assets/images/icon1_active.png" alt="전광판광고" width="18">전광판광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon2.png" alt="빌보드광고" width="21"><img src="/Assets/images/icon2_active.png" alt="빌보드광고" width="21">빌보드광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon3.png" alt="야립광고" width="23"><img src="/Assets/images/icon3_active.png" alt="야립광고" width="23">야립광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon4.png" alt="교통광고" width="26"><img src="/Assets/images/icon4_active.png" alt="교통광고" width="26">교통광고</a></li>
                <li><a href="#"><img src="/Assets/images/icon5.png" alt="기타" width="13"><img src="/Assets/images/icon5_active.png" alt="기타" width="13">기타</a></li>
            </ul>
        </div>
    </header>
    <div class="map_toolbar">
        <div class="top_tool">
            <ul>
                <li id="maptype.NORMAL" class="active">
                    <div></div>
                    <p>일반</p>
                </li>
                
                <li id="maptype.HYBRID">
                    <div></div>
                    <p>위성</p>
                </li>
            </ul>
        </div>
        <div class="bottom_tool">
            <ul>
                <li>
                    <div></div>
                    <p>로드뷰<br />파노라마</p>
                    <div class="pano_on">ON</div>

                </li>
                
                <li id="btn_traffic">
                    <div></div>
                    <p>실시간<br />교통</p>
                </li>
                
            </ul>
            <div class="opennav">상담</div>
        </div>
        <div class="pop_v2">
            <div class="title">
                <h4>유동인구 지도 표시</h4>
                <button id="btn_close_population" class="pop_v2_close"></button>
            </div>
            <div class="segment">
                <div>
                    <p>성별</p>
                    <ul>
                        <li class="active">남</li>
                        <li>여</li>
                    </ul>
                </div>
                <div>
                    <p>세대</p>
                    <ul>
                        <li>~10</li>
                        <li class="active">20</li>
                        <li class="active">30</li>
                        <li>40</li>
                        <li>50</li>
                        <li>60~</li>
                    </ul>
                </div>
                <div>
                    <p>요일</p>
                    <ul>
                        <li>월</li>
                        <li class="active">화</li>
                        <li class="active">수</li>
                        <li class="active">목</li>
                        <li class="active">금</li>
                        <li>토</li>
                    </ul>
                </div>
                <div>
                    <p>시간</p>
                    <div class="time_box"><input type="text" placeholder="06 : 00"><span>~</span><input type="text" placeholder="17 : 00"></div>
                </div>
                <div class="btn_box">
                    <button id="btn_population" disabled>확인 (준비중)</button>
                </div>
            </div>
        </div>
    </div>
    <div class="btn_tool">
        <div class="title">제안서 / 견적서<br />맞춤상담</div>
        <ul>
            <li>
                <a href="#" class="online">
                    <p>온라인상담<br />Contact</p>
                </a>
            </li>
            <li>
                <a href="/Social/KakaoChat" target="_blank" class="kakao" onmousedown="NA_CONV('custom002');">
                    <p>카톡상담</p>
                </a>
            </li>
            <li>
                <a href="#" class="call">
                    <p>1533-1975</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="compare">
        <div class="compare_wrap">
            <div id="no_recent_items_box">
                <p>최근 본 매체가 없습니다</p>
            </div>
            <form id="compare_form" method="post" action="/Map/CompareADItems">
                <div id="recently_viewed_items" class="chk_box">
                </div>
            </form>

            <div class="btn_box">
                <a href="#" class="compare_close"></a>
                <button id="btnCompare" onclick="compareItems.compare();">비교하기</button>
                <button class="active" onclick="compareItems.del();">삭제하기</button>

            </div>
        </div>
        <div class="title">최근 본 매체 비교하기<span id="recently_viewed_items_count">0</span></div>
    </div>
    <!-- 목록에서 보기  -->
    <button class="map_btn"></button>
    <!--  -->
    <div class="m_list">
        <div class="img"><img src="/Assets/images/test1.png" alt=""></div>
        <div class="segment">
            <h4>광화문 전광판</h4>
            <p>서울특별시 종로구 적선동 80</p>
            <ul class="ad_list">
                <li>벽면</li>
                <li>대형</li>
                <li>LED 전광판</li>
            </ul>

        </div>
    </div>
    <!-- 목록에서 보기  -->
    <button class="map_btn_v2 view"></button>
    <!--  -->



    <div class="m_search_list">
        <div class="list_wrap">
            <div id="m_ad_item_detail_panel" class="popup_ct popup_ct1">
            </div>
        </div>
    </div>

    <div class="container map map_container">
        <div id="naverMap" class="top"></div>
        <div class="resizer" data-direction="vertical">
        </div>
        <div id="panoDiv" class="bottom">
            <div class="btn_pano_tool">
                <ul>
                    <li>
                        <a href="#" class="min" title="최소화">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mid" title="중간">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="max" title="최대화">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="close" title="닫기">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            const resizable = function (resizer) {
                const direction = resizer.getAttribute("data-direction") || "horizontal";
                const prevSibling = resizer.previousElementSibling;
                const nextSibling = resizer.nextElementSibling;

                //  마우스의 위치값 저장을 위해 선언
                let x = 0;
                let y = 0;
                let prevSiblingHeight = 0;
                let prevSiblingWidth = 0;

                // resizer에 마우스 이벤트가 발생하면 실행하는 Handler
                const mouseDownHandler = function (e) {
                    // 마우스 위치값을 가져와 x, y에 할당
                    x = e.clientX;
                    y = e.clientY;
                    // 대상 Element에 위치 정보를 가져옴
                    const rect = prevSibling.getBoundingClientRect();
                    // 기존 높이와 너비를 각각 할당함
                    prevSiblingHeight = rect.height;
                    prevSiblingWidth = rect.width;

                    // 마우스 이동과 해제 이벤트를 등록
                    document.addEventListener("mousemove", mouseMoveHandler);
                    document.addEventListener("mouseup", mouseUpHandler);
                };

                const mouseMoveHandler = function (e) {
                    // 마우스가 움직이면 기존 초기 마우스 위치에서 현재 위치값과의 차이를 계산
                    const dx = e.clientX - x;
                    const dy = e.clientY - y;


                    // 이동 방향에 따라서 별도 동작
                    // 기본 동작은 동일하게 기존 크기에 마우스 드래그 거리를 더한 뒤 상위요소(container)를 이용해 퍼센티지를 구함
                    // 계산 대상이 x 또는 y인지에 차이가 있음
                    switch (direction) {
                        case "vertical":
                            const h =
                                ((prevSiblingHeight + dy) * 100) /
                                resizer.parentNode.getBoundingClientRect().height;
                            prevSibling.style.height = `${h}%`;
                            break;
                        case "horizontal":
                        default:
                            const w =
                                ((prevSiblingWidth + dx) * 100) /
                                resizer.parentNode.getBoundingClientRect().width;
                            prevSibling.style.width = `${w}%`;
                            break;
                    }

                    // 크기 조절 중 마우스 커서를 변경함
                    // class="resizer"에 적용하면 위치가 변경되면서 커서가 해제되기 때문에 body에 적용
                    const cursor = direction === "horizontal" ? "col-resize" : "row-resize";
                    resizer.style.cursor = cursor;
                    document.body.style.cursor = cursor;

                    prevSibling.style.userSelect = "none";
                    prevSibling.style.pointerEvents = "none";

                    nextSibling.style.userSelect = "none";
                    nextSibling.style.pointerEvents = "none";

                    // 네이버 지도 자동으로 리사이즈
                    mapDiv.autoResize();
                };

                const mouseUpHandler = function () {
                    // 모든 커서 관련 사항은 마우스 이동이 끝나면 제거됨
                    resizer.style.removeProperty("cursor");
                    document.body.style.removeProperty("cursor");

                    prevSibling.style.removeProperty("user-select");
                    prevSibling.style.removeProperty("pointer-events");

                    nextSibling.style.removeProperty("user-select");
                    nextSibling.style.removeProperty("pointer-events");

                    // 등록한 마우스 이벤트를 제거
                    document.removeEventListener("mousemove", mouseMoveHandler);
                    document.removeEventListener("mouseup", mouseUpHandler);
                };

                // 마우스 down 이벤트를 등록
                resizer.addEventListener("mousedown", mouseDownHandler);
            };

            // 모든 resizer에 만들어진 resizable을 적용
            document.querySelectorAll(".resizer").forEach(function (ele) {
                resizable(ele);
            });

        </script>
    </div>



    <div class="popup_panel popup_panel1">
        <form id="form_call_consulting" class="" method="post" action="/Consultation/ApplyForConsultation">
            <div class="popup_contents">
                <a href="#" id="btn_popup_close"></a>
                <div class="segment">
                    <h5>전화상담</h5>
                    <input type="hidden" name="RequestType" value="전화상담" />
                    <input type="hidden" name="RequestUserID" value="" />
                    <input type="hidden" name="RequestUserName" value="" />


                    <div class="flex_box">
                        <p><strong>대표번호</strong></p>
                        <h1 style="color:blue">1533-1975</h1>
                    </div>
                    <div class="flex_box">
                        <h1>* 위 번호로 연락 주시거나, 아래 연락처를 남겨 주시면 전화 드리겠습니다.</h1>
                    </div>
                    <div class="flex_box">
                        <p></p>
                    </div>
                    <div class="flex_box">
                        <p>이름*</p>
                        <input type="text" name="Name" placeholder="이름을 입력해 주세요">
                    </div>
                    <div class="flex_box phone">
                        <p>전화*</p>
                        <input type="number" name="phone1">
                        <input type="number" name="phone2">
                        <input type="number" name="phone3">
                    </div>
                    <hr />
                    
                    <div class="flex_box_v2">

                        <p>
                            개인정보 수집 및 이용
                            <a style="color:blue" href="/Assets/policies/CollectionOfPersonalInformation.pdf" target="_blank"> (보기)</a>
                        </p>
                        <label>
                            <input name="call_consent" type="checkbox">
                            동의합니다.
                        </label>
                    </div>
                    <div class="flex_box_v2">
                        <p>SMS 수신동의(답변안내)</p>
                        <label>
                            <input name="call_consent" type="checkbox">
                            동의합니다.
                        </label>
                    </div>
                    <button id="btn_phone_submit">연락처 전송</button>
                </div>
            </div>
        </form>
        <script>
            $("#btn_phone_submit").click(function (e) {
                e.preventDefault();


                if ($("#form_call_consulting input[name=Name]").val() == "" ||
                    $("#form_call_consulting input[name=phone1]").val() == "" ||
                    $("#form_call_consulting input[name=phone2]").val() == "" ||
                    $("#form_call_consulting input[name=phone3]").val() == "") {
                    alert("필수 항목을 입력해 주세요");
                    return;
                }

                var consentItems = $("input:checkbox[name='call_consent']:checked");
                if (consentItems == null || consentItems == "undefined" || consentItems.length < 2) {
                    alert('정보제공 동의가 필요합니다');
                    return;
                }

                if (!confirm('전송 하시겠습니까?')) return;

                var formData = $("#form_call_consulting").serialize();

                $.ajax({
                    cache: false,
                    url: $("#form_call_consulting").attr("action"),
                    type: $("#form_call_consulting").attr("method"),
                    data: formData,
                    beforeSend: function () {
                        $("#btn_phone_submit").text("전송중...");
                    },
                    success: function (data) {
                        //var jsonObj = JSON.parse(data);
                        if (data == "True" || data == "False") {
                            alert("상담 신청이 완료되었습니다\r\n곧 연락 드리겠습니다");
                            $(".popup_panel1 #btn_popup_close").click();
                        }

                    }, // success

                    error: function (xhr, status) {
                        alert("죄송합니다. 상담 신청 실패되었습니다.");
                        console.log(xhr + " : " + status);
                    },
                    complete: function () {
                        $("#btn_phone_submit").text("연락처 전송");
                    }
                }); // $.ajax */

            });

        </script>
    </div>


    <div class="popup_panel popup_panel2">

        <div class="popup_contents">
            <a href="#" id="btn_popup_close"></a>
            <div class="segment">
                <h5>자료 출처</h5>
                <div class="info_table">
                    <img src="/assets/images/data_source_table_2.png" />
                </div>
            </div>
        </div>
    </div>



    <div class="popup_panel popup_panel3">
        <form id="form_online_consulting" class="" method="post" action="/Consultation/ApplyForConsultation">
            <div class="popup_contents">
                <a href="#" id="btn_popup_close"></a>
                <div class="segment">
                    <h5>온라인상담(Request Form)</h5>
                    <input type="hidden" name="RequestType" value="온라인상담" />
                    <input type="hidden" name="RequestUserID" value="" />
                    <input type="hidden" name="RequestUserName" value="" />

                    <div class="flex_box">
                        <p>이름(Name)*</p>
                        <input type="text" name="Name" placeholder="이름을 입력해 주세요">
                    </div>
                    <div class="flex_box">
                        <p>이메일(Email)*</p>
                        <input type="email" name="Email" placeholder="이메일 형식으로 입력해 주세요">
                    </div>
                    <div class="flex_box phone">
                        <p>전화(Phone)</p>
                        <input type="number" name="phone1" style="margin-left: 0px;">
                        <input type="number" name="phone2">
                        <input type="number" name="phone3">
                    </div>
                    <div class="flex_box">
                        <p>소속(Company)</p>
                        <input type="text" name="Company" placeholder="개인/기업명을 입력해 주세요">
                    </div>
                    <hr />
                    <div class="flex_box">
                        <p>제목(Title)</p>
                        <input type="text" name="Subject" placeholder="상담 문의 드립니다">
                    </div>
                    <div class="flex_box">
                        <p>상세내용(Description)</p>
                        <textarea class="longbody" type="text" name="Body" placeholder="Please fill out your questions in detail
광고에 대한 문의사항을 최대한 자세히 기재해주세요.
- 의뢰자정보(기업/개인/단체/지자체)
- 브랜드정보(가전, 뷰티,자동차,관광 등)
- 주 타겟층(성별/연령대)
- 선호 지역
- 매체수량 및 예산"></textarea>
                    </div>
                    
                    
                    <div class="flex_box_v2">
                        <p>
                            개인정보 수집 및 이용(Tems of Use and Privay Policy)
                            <a style="color:blue" href="/Assets/policies/CollectionOfPersonalInformation.pdf" target="_blank"> (보기)</a>
                        </p>
                        <label>
                            <input name="online_consent" type="checkbox">
                            동의(Agree)
                        </label>
                    </div>
                    <div class="flex_box_v2">
                        <p>SMS 수신동의(Consent to recevie SMS)</p>
                        <label>
                            <input name="online_consent" type="checkbox">
                            동의(Agree)
                        </label>
                    </div>
                    <p />
                    <div class="btn_box">
                        <button style="display:none">목록보기</button>
                        <button id="btn_online_submit" class="active">완료(Submit)</button>
                    </div>
                </div>
            </div>
        </form>
        <script>
            $("#btn_online_submit").click(function (e) {
                e.preventDefault();


                if ($("#form_online_consulting input[name=Name]").val() == "" ||
                    $("#form_online_consulting input[name=Email]").val() == "") {
                    alert("필수 항목을 입력해 주세요");
                    return;
                }

                var consentItems = $("input:checkbox[name='online_consent']:checked");
                if (consentItems == null || consentItems == "undefined" || consentItems.length < 2) {
                    alert('정보제공 동의가 필요합니다');
                    return;
                }

                if (!confirm('전송 하시겠습니까?')) return;


                var formData = $("#form_online_consulting").serialize();

                $.ajax({
                    cache: false,
                    url: $("#form_online_consulting").attr("action"),
                    type: $("#form_online_consulting").attr("method"),
                    data: formData,
                    beforeSend: function () {
                        $("#btn_online_submit").text("전송중...");
                    },
                    success: function (data) {
                        //var jsonObj = JSON.parse(data);
                        if (data == "True" || data == "False") {
                            alert("상담 신청이 완료되었습니다\r\n곧 연락 드리겠습니다");
                            $(".popup_panel3 #btn_popup_close").click();
                            NA_CONV('lead');
                        }

                    }, // success

                    error: function (xhr, status) {
                        alert("죄송합니다. 상담 신청 실패되었습니다.");
                        console.log(xhr + " : " + status);
                    },
                    complete: function () {
                        $("#btn_online_submit").text("연락처 전송");
                    }
                }); // $.ajax */

            });

        </script>
    </div>



    <div class="popup_panel popup_panel4">

        <div class="popup_contents">
            <a href="#" id="btn_popup_close"></a>
            <div class="segment">
                <h5>온라인상담 답글쓰기</h5>
                <div class="flex_box">
                    <p>이름</p>
                    <span class="txt">테스트</span>
                </div>
                <div class="flex_box">
                    <p>소속(기업명)</p>
                    <span class="txt">광고플레이</span>
                </div>
                <div class="flex_box">
                    <p>이메일</p>
                    <span class="txt">test@naver.com</span>
                </div>
                <div class="flex_box phone">
                    <p>핸드폰</p>
                    <span class="txt phone">010</span>
                    <span class="txt">1234</span>
                    <span class="txt">5566</span>
                </div>
                <div class="flex_box">
                    <p>글제목</p>
                    <span class="txt">전광판광고, 빌보드광고</span>
                </div>
                <div class="flex_box">
                    <p>상세내용</p>
                    <span class="txt textarea">
                        광고에 대한 문의사항을 최대한 자세히 기재해주세요.<br />
                        - 의뢰자정보(지자체/기업/개인/단체/지자체)<br />
                        - 브랜드정보(가전, 뷰티,자동차,관광 등)<br />
                        - 주 타겟층(성별/연령대)<br />
                        - 선호 지역<br />
                        - 매체수량 및 예산
                    </span>
                </div>
                <div class="flex_box_v2">
                    <p>답글</p>
                    <textarea>답글을 남겨주세요</textarea>
                    <div class="btn_box">
                        <button>목록보기</button>
                        <button class="active">작성완료</button>
                    </div>
                </div>



            </div>
        </div>
    </div>




    <script>

        var is_authenticated = "False";
        $(function () {


        $("#recommendation").click(function () {
        $(".recommendation-menu").slideToggle();
        });

        //맞춤광고 검색 기본으로 펼쳐 보여주기
        var display_recommendation_menu = ("False").toLowerCase();
        if (display_recommendation_menu == "true") {
        $('.recommendation-menu').css('display', 'block');

        }

        //상세정보 페이지로 바로 이동 보여주기
        var show_deatil_id = 0;
        if (show_deatil_id != 0) {
        setTimeout(function () { markerItemSelected(show_deatil_id, false, true) }, 500);
        }



            $('.btn_fold').click(function () {
                $('html').toggleClass('active');
                $('.btn_fold').toggleClass('active');
            });
            $('.list_wrap .list_ct .inner').click(function () {
                //$('.popup_ct1').addClass('view');
                //$('.btn_fold').addClass('popup');
                //$('.top_menu>ul').addClass('close');
                //$('.compare').addClass('close');
            });
            //지도 위 마커 클릭
            //$('.container.map .marker').click(function () {
            //    $('.popup_ct1').addClass('view');
            //    $('.btn_fold').addClass('popup');
            //    $('.top_menu>ul').addClass('close');
            //    $('.compare').addClass('close');
            //});
            //$('.popup_close1').click(function () {
            //    $('.popup_ct1').removeClass('view');
            //    $('.btn_fold').removeClass('popup');
            //    $('.top_menu>ul').removeClass('close');
            //    $('.compare').removeClass('close');
            //});


            $('.ai-search .reset').click(function () {
                $('.button_group .segment>div>ul li').removeClass('active');
                updateMarkers(mapDiv, markers);
            });

            $('.ai-search .search').click(function () {
                var len = $('.button_group .segment>div>ul li.active').length;

                if (len == 0) {
                    alert("옵션 항목을 선택하세요");
                    return;
                }
                updateRamdomMarkers(mapDiv, markers);
            });



            $('.compare .title').click(function () {
                //var h = $('.compare').height();

                if ($('.compare').hasClass('active')) {
                    $('.compare').css("top", "-85px");
                } else {
                    $('.compare').css("top", "110px");
                }

                $('.compare .title').toggleClass('active');
                $('.compare').toggleClass('active');
            });

            $('.compare_close').click(function () {
                $('.compare .title').click();
            });


            //$('.container.map .more_marker').click(function (e) {
            //    $('.container.map .more_marker ul').toggleClass('view');
            //    e.stopPropagation();
            //});

            //$('.container.map .more_marker').scroll(function e() {
            //    console.log('scroll');
            //    e.stopPropagation();
            //});

            $('body').click(function (e) {
                //$('.container.map .more_marker ul').removeClass('view');
            });

            $('.button_group .segment>div>ul li').click(function () {
                $(this).toggleClass('active');
            });

            $('.pop_v2 .segment>div>ul li').click(function () {
                $(this).toggleClass('active');
            });

            $('.map_toolbar .bottom_tool>ul>li:nth-child(2)').click(function () {
                return; //임시

                if ($('.pop_v2').hasClass('view')) {
                    $('.pop_v2').removeClass('view');
                    return;
                }
                $('.pop_v2').addClass('view');
            });
            $('.pop_v2_close').click(function () {
                $('.pop_v2').removeClass('view');
                $('.map_toolbar .bottom_tool>ul>li:nth-child(2)').removeClass('active');
            });
            $('.m_head .search input').click(function () {
                $('.m_search_list').addClass('view');
                $('.map_btn').addClass('active');
                $('.map_btn_v2').removeClass('view');
            });
            $('.map_btn_v2').click(function () {
                $('.m_search_list').addClass('view');
                $('.map_btn').addClass('active');
                $('.map_btn_v2').removeClass('view');
            });
            $('.m_list').click(function () {
                $('.m_search_list').addClass('view');
                $('.popup_ct1').addClass('view');
                $('.btn_fold').addClass('popup');
                $('.top_menu>ul').addClass('close');
                $('.compare').addClass('close');
                $('.map_btn').addClass('active');
            });
            $('.map_btn').click(function () {
                $('.popup_ct1').removeClass('view');
                $('.btn_fold').removeClass('popup');
                $('.top_menu>ul').removeClass('close');
                $('.compare').removeClass('close');
                $('.m_search_list').removeClass('view');
                $('.map_btn_v2').addClass('view');
            });
            $('.map_btn').click(function () {
                $('.map_btn').toggleClass('active');
            });
            $('.container.map .marker').hover(function () {
                $('.m_list').toggleClass('active');
            });
            $('.top_menu>ul>li').click(function () {
                $(this).toggleClass('active');
            });
            $('.m_top_menu ul li').click(function () {
                $(this).toggleClass('active');
            });
        });
        $(document).ready(function () {
            $(".map_toolbar .top_tool ul li").each(function () {
                $(this).click(function () {
                    $(this).addClass("active");
                    $(this).siblings().removeClass("active");
                    SetMapType(this.id.replace("maptype.", ""));
                });
            });

            $(".map_toolbar .bottom_tool>ul>li").not(":first").each(function () {
                $(this).click(function () {
                    $(this).toggleClass("active");
                });
            });

        });


        $(document).ready(function () {




            var $panel = $(".popup_panel1");

            var $panelContents = $panel.find(".popup_contents");
            $(".btn_pano_tool ul li a").on("click", function (e) {
                var class_name = $(this).attr("class");
                if (class_name === "min") {
                    panorama_window_size = '100';
                    panoramaViewOnOff(true, panorama_window_size);

                } else if (class_name === "mid") {
                    panorama_window_size = '50';
                    panoramaViewOnOff(true, panorama_window_size);

                } else if (class_name === "max") {
                    panorama_window_size = '0';
                    panoramaViewOnOff(true, panorama_window_size);

                } else {
                    panorama_window_size = default_panorama_window_size;
                    panoramaViewOnOff(false);
                }


            });
            $(".btn_tool ul li a.call").on("click", function (e) {

                // 레이어 팝업 열기
                $panel.fadeIn();
            });
            $(".sidenav ul.m_head_list li a.call").on("click", function (e) {
                // 레이어 팝업 열기
                $panel.fadeIn();
            });

            // 팝업 닫기 이벤트 정의
            $(".popup_panel1 #btn_popup_close").on("click", popupClose);
            $(".popup_panel2 #btn_popup_close").on("click", popupClose);
            $(".btn_tool ul li a.online").on("click", popupClose);
            $(".sidenav ul.m_head_list li a.online").on("click", popupClose);

            $panel.find(".popup_bg").on("click", popupClose);

            function popupClose(e) {

                $panel.fadeOut();

                // 이벤트 기본 동작 중단
                e.preventDefault();
            }
            $(".chk_box label span").on("click", function (e) {
                $("body").css("overflow", "hidden");
            });
            $(".popup_contents #btn_popup_close").on("click", function (e) {
                $("body").css("overflow", "");
            });
            $(".popup_bg").on("click", function (e) {
                $("body").css("overflow", "");
            });
        });
        $(document).ready(function () {

            var $panel = $(".popup_panel3");

            var $panelContents = $panel.find(".popup_contents");


            $("#mySIdenav a.online").on("click", function (e) {

                // 레이어 팝업 열기
                $(".popup_panel3").fadeIn();

            });
            $("#mySIdenav").on("blur", function (e) {

                // 레이어 팝업 열기
                $(".popup_panel3").fadeOut();

            });
            $(".btn_tool ul li a.online").on("click", function (e) {

                // 레이어 팝업 열기
                $panel.fadeIn();
                //$(".popup_panel3").fadeIn();

            });
            $(".sidenav ul.m_head_list li a.online").on("click", function (e) {

                // 레이어 팝업 열기
                $panel.fadeIn();
            });
            $(".popup_panel3 div.popup_contents>.segment button:first-child").on("click", function (e) {

                // 레이어 팝업 열기
                $panel.fadeIn();
            });

            // 팝업 닫기 이벤트 정의
            $(".popup_panel3 #btn_popup_close").on("click", popupClose);

            $panel.find(".popup_bg").on("click", popupClose);

            function popupClose(e) {

                $panel.fadeOut();

                // 이벤트 기본 동작 중단
                e.preventDefault();
            }
            $(".popup_ct1 .tab_box .tabContainer .ct .source .text").on("click", popupClose);
            $(".btn_tool ul li a.call").on("click", popupClose);
            $(".sidenav ul.m_head_list li a.call").on("click", popupClose);

            $panel.find(".popup_bg").on("click", popupClose);

            $(".chk_box label span").on("click", function (e) {
                $("body").css("overflow", "hidden");
            });
            $(".popup_contents #btn_popup_close").on("click", function (e) {
                $("body").css("overflow", "");
            });
            $(".popup_bg").on("click", function (e) {
                $("body").css("overflow", "");
            });
        });
        $(document).ready(function () {

            var $panel = $(".popup_panel4");

            var $panelContents = $panel.find(".popup_contents");

            $(".popup_panel4 div.popup_contents .pop_table table tbody tr td.tb_sg>a").on("click", function (e) {

                // 레이어 팝업 열기
                $panel.fadeIn();
            });

            // 팝업 닫기 이벤트 정의
            $(".popup_panel4 #btn_popup_close").on("click", popupClose);
            $(".popup_panel4 div.popup_contents>.segment button:first-child").on("click", popupClose);

            $panel.find(".popup_bg").on("click", popupClose);

            function popupClose(e) {

                $panel.fadeOut();

                // 이벤트 기본 동작 중단
                e.preventDefault();
            }
            $(".chk_box label span").on("click", function (e) {
                $("body").css("overflow", "hidden");
            });
            $(".popup_contents #btn_popup_close").on("click", function (e) {
                $("body").css("overflow", "");
            });
            $(".popup_bg").on("click", function (e) {
                $("body").css("overflow", "");
            });
        });
    </script>



    <script type="text/javascript" src="https://oapi.map.naver.com/openapi/v3/maps.js?ncpClientId=1ouo31myef&submodules=panorama,visualization,geocoder"></script>
    <script src="https://t1.kakaocdn.net/kakao_js_sdk/2.1.0/kakao.min.js" integrity="sha384-dpu02ieKC6NUeKFoGMOKz6102CLEWi9+5RQjWSV0ikYSFFd8M3Wp2reIcquJOemx" crossorigin="anonymous"></script>
    <script src="/Assets/js/map.search.list.js"></script>
    <script src="/Assets/js/map.markerClustering.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

    <script>
        //junglee: 스크립트 추가

        //active_current_menu(0);//광고판 검색 활성화

        var mapDiv = document.getElementById('naverMap');
        var HOME_PATH = window.HOME_PATH || '.';
        var marker_list_count = 0; // 화면안에 리스트된 marker 수
        let maker_zoom_level = 15;

        // 국립중앙박물관 중심으로 그린다.
        // lat:37.5220794,lng:126.9806014
        var cityhall = new naver.maps.LatLng(37.52010020, 126.9806014),
            mapDiv = new naver.maps.Map(mapDiv, {
                zoomControl: false,
                zoomControlOptions: {
                    style: naver.maps.ZoomControlStyle.NORMAL,
                    position: naver.maps.Position.RIGHT_BOTTOM
                },
                mapTypeControl: false,
                mapTypeControlOptions: {
                    style: naver.maps.MapTypeControlStyle.BUTTON,
                    position: naver.maps.Position.BOTTOM_RIGHT
                },
                logoControl: false,
                logoControlOptions: {
                    position: naver.maps.Position.TOP_LEFT
                },

                center: cityhall,
                scaleControl: true,
                mapDataControl: false,
                zoom: 13,
                minZoom: 7,
                maxZoom: 21,
                draggable: true,
                pinchZoom: true,
                keyboardShortcuts: false,
                disableDoubleTapZoom: false,
                disableDoubleClickZoom: false,
                disableTwoFingerTapZoom: false,
                disableKineticPan: true, //관성 드래깅은 disable 해야함 - 클러스터링 드래그할 때 문제 있기 때문
                tileTransition: false
            }),
            ad_list_all = null,         // 광고매체 전체 리스ㅌ,
            ad_list = null,             // 조회된 광고매체  리스트
            markers = [],               // 조회된 Maker 리스트
            current_ad_list = [],       // 지도 바운더리 안에 있는 광고판 정보 리스트
            current_marker_list = [],   // 지도 바운더리 안에 있는 Marker 정보 리스트
            selected_marker = 'undefined';     // 현재 선택한 Marker

        ///
        /// 광고판 리스트 가져오기
        ///

        var bounds = mapDiv.getBounds(), // 현재 표시된 지도 범위 가져오기
            southWest = bounds.getSW(), // 남서
            northEast = bounds.getNE(), // 북동
            lngSpan = northEast.lng() - southWest.lng(),
            latSpan = northEast.lat() - southWest.lat();


        // 광고 매체 리스트 가져오기
        GetBommADList();

        var markerClustering;

        // 마커 팝업 정보
        function setMarkerItemEvents(marker, ad_item) {
            //마커 클릭
            naver.maps.Event.addListener(marker, "click", function (e) {
                markerItemSelected(ad_item.idx, false, false, -1, ad_item.panoposition);
            });

            marker.addListener('mouseover', onMouseOver);
            marker.addListener('mouseout', onMouseOut);
        }


        //선택한 항목이 최상위로 리스트업 되도록 함
        function scrollSelctedItemUp(idx) {

            try {
                var v_top = $(".list_wrap.desktop").position().top;
                var length = $(".list_wrap.desktop #" + idx).length;
                var item_top = $(".list_wrap.desktop #" + idx).offset().top;

                $('.list_wrap.desktop').animate({ scrollTop: '+=' + (item_top - v_top) }, 1000);

            } catch (e) {
                console.log("지정된 매체로 스크롤 이동 오류");
            }
        }

        naver.maps.Event.addListener(mapDiv, 'zoom_changed', function () {
            if (markers.length > 0) {
                updateMarkers(mapDiv, markers);

            }

            updateMakerByZoomLevel();

        });

        naver.maps.Event.addListener(mapDiv, 'dragend', function () {
            if (markers.length > 0) {
                updateMarkers(mapDiv, markers);
            }
            updateMakerByZoomLevel();
            //console.log(mapDiv.getCenter() + " / " + mapDiv.getZoom());
        });

        function updateMakerByZoomLevel() {
            if (mapDiv.getZoom() >= maker_zoom_level) {
                $(".marker").removeClass("min");
            } else {
                $(".marker").addClass("min");
            }
        }

        var is_search = false;
        function GetBommADList(searchKeyword) {
            var search_url = '/MAP/GetADPanList';

            var params = '';
            if (searchKeyword != null && searchKeyword != 'undefined') {
                searchKeyword = searchKeyword.trim();
                params = 'searchKeyword=' + searchKeyword;


                if (searchKeyword.length > 0 && searchKeyword.length < 2) {
                    showSearchMessage("검색어는 두 글자 이상 입력해 주세요", 'error');
                    return;
                }

                is_search = true;

            } else {
                is_search = false;
            }

            //console.log('search: ' + is_search);


            $.ajax({
                type: "GET",
                datatype: 'json',
                url: search_url,
                data: params,
                contentType: 'application/json; charset=utf-8',
                success: function (data) {

                    if (is_search) {
                        if (data.TotalCount == 0) {
                            showSearchMessage("검색 결과가 없습니다. 다시 검색해 주세요", "warning");
                            return;
                        }
                        else {

                            //지도에서 모든 마커 삭제
                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setMap(null);
                            }
                            for (var j = 0; j < current_marker_list.length; j++) {
                                current_marker_list[j].setMap(null);
                            }

                            // 모든 마커 초기화
                            markers.splice(0, markers.length);
                            current_marker_list.splice(0, current_marker_list.length);

                            ad_list = null;             // 광고판 전체리스트
                            markers = [];               // Maker 전체 리스트
                            current_ad_list = [];       // 지도 바운더리 안에 있는 광고판 정보 리스트
                            current_marker_list = [];   // 지도 바운더리 안에 있는 Marker 정보 리스트
                            selected_marker = 'undefined';     // 현재 선택한 Marker
                            updateMarkers(mapDiv, markers);


                        }
                    }

                    ad_list = data.ADPanListDataSet;
                    ad_list_all = (!is_search) ? ad_list : ad_list_all;

                    for (var i = 0, len = ad_list.length; i < len; i++) {
                        var ad_item = ad_list[i];
                        var comapny_name = (ad_item.representcompanyname != null && ad_item.representcompanyname != 'undefined') ? ad_item.representcompanyname : ad_item.representname;
                        var latlng = new naver.maps.LatLng(ad_item.latitude, ad_item.longitude),
                            marker = new naver.maps.Marker({
                                position: latlng,
                                map: mapDiv,
                                draggable: false,
                                //icon: "/Content/Assets/pin_default.png",
                                icon: {
                                    content: '<div class="inner"></div>',
                                    //size: new naver.maps.Size(22, 35),
                                    //anchor: new naver.maps.Point(11, 35)
                                },
                                title: comapny_name,
                                idx: ad_item.idx
                            });

                        markers.push(marker);

                        // 마커 마우스 클릭,오버,아웃 이벤트 설정
                        setMarkerItemEvents(marker, ad_item);

                    }

                    if (is_search && searchKeyword != "") {
                        // 첫번째 결과의 값으로 이동
                        mapDiv.morph(markers[0].getPosition(), 16, "easeInCubic");

                        // 검색 후 morph 이동시간 이후에 다시 한번 updateMarkers 해줘야 지도가 갱신됨
                        setTimeout(() => {
                            updateMarkers(mapDiv, markers);
                        }, "500")

                        //검색결과 표시
                        var msg = "'" + searchKeyword + "'에 대해 " + markers.length + "개 결과가 있습니다";
                        showSearchMessage(msg, 'info');

                    } else if (is_search && searchKeyword == "") {

                        // 현재 위치에서 전체 검색
                        showSearchMessage("전체 매체 목록이 로드되었습니다", "info");
                        is_search = false;
                    }
                    else {
                        mapDiv.morph(mapDiv.getCenter(), 13, "easeInCubic");
                        is_search = false;

                    }
                    // 화면안에 있는 Marker들만 표시하고, 그 밖은 표시하지 않는다.
                    updateMarkers(mapDiv, markers);





                    //여기서부터 Maker Clustering 필요
                    var markerContent = '<div class="more_marker"></div>';

                    var clusterMarker0 = {
                        content: markerContent,
                        size: N.Size(60, 60),
                        anchor: N.Point(30, 30)
                    },
                        clsuterMarker1 = {
                            content: markerContent,
                            size: N.Size(60, 60),
                            anchor: N.Point(30, 30)
                        },
                        clsuterMarker2 = {
                            content: markerContent,
                            size: N.Size(60, 60),
                            anchor: N.Point(30, 30)
                        },
                        clsuterMarker3 = {
                            content: markerContent,
                            size: N.Size(60, 60),
                            anchor: N.Point(30, 30)
                        },
                        clsuterMarker4 = {
                            content: markerContent,
                            size: N.Size(60, 60),
                            anchor: N.Point(30, 30)
                        },
                        clsuterMarker5 = {
                            content: markerContent,
                            size: N.Size(60, 60),
                            anchor: N.Point(30, 30)
                        };




                    markerClustering = new MarkerClustering({
                        minClusterSize: 8, //최소그룹
                        maxZoom: 16, // 클러스터링 표시 지도 수준
                        map: mapDiv,
                        markers: markers,
                        disableClickZoom: true,
                        gridSize: 120,
                        icons: [clusterMarker0, clsuterMarker1, clsuterMarker2, clsuterMarker3, clsuterMarker4, clsuterMarker5],
                        indexGenerator: [5, 10, 20, 50, 100],
                        stylingFunction: function (clusterMarker, clusterMember, count) {
                            //console.log(clusterMarker);

                            var markerContent = '+' + count + '';
                            markerContent += '<ul class="" >';

                            for (var i = 0; i < clusterMember.length; i++) {
                                var item = clusterMember[i].getElement();
                                var id = $(item).find('div:first-child').data('id');
                                var icon_url = $(item).find(".img img").attr("src");
                                var name = $(item).find(".segment p:first-child").text();
                                var tags = $(item).find(".segment p:nth-child(2)").text();

                                markerContent += '<li onclick="markerItemSelected(' + id + ', true);">';
                                markerContent += '<img src="' + icon_url + '" width="18">';
                                markerContent += '<div>';
                                markerContent += '<p>' + name + '</p>';
                                markerContent += '<p>' + tags + '</p>';
                                markerContent += '</div>';
                                markerContent += '</li>';
                            }
                            markerContent += '</ul>';

                            var clusterItem = $(clusterMarker.getElement()).find('div:first-child');
                            clusterItem.html(markerContent);

                            //클릭 이벤트
                            clusterItem.on('click', function (e) {
                                //다른 열린 리스트는 닫고
                                $('.container.map .more_marker ul').removeClass('view');

                                //현재 클릭한 리스트만 오픈한다.
                                $(this).find('ul').toggleClass('view');
                                e.stopPropagation();
                            });


                            //스크롤 이벤트
                            clusterItem.find('ul').bind('mousewheel', function (e, d) {
                                // 마우스 스크롤 이벤트 전파 방지
                                e.stopPropagation();
                            });
                            //$(clusterMarker.getElement()).find('div:first-child ul.view').scroll(function (e) {

                            //    console.log('scroll');
                            //    //e.stopPropagation();
                            //});
                            //$(this).find('ul.view').scroll(function (e) { console.log('view'); e.stopPropagation(); });


                            //$('.container.map .more_marker').click(function (e) {
                            //    $(this).find('ul').toggleClass('view');
                            //    e.stopPropagation();
                            //});

                        }
                    });


                },
                error: function (request, status, error) {
                    //console.log("Map/GetADPanList/" + error);
                }

            });

        }

        /// showSearchMessage
        /// message: 메시지
        /// level: info, warning, error
        function showSearchMessage(message, level) {
            if (message == "") {
                return;
            }

            $(".search_summary").removeClass("info");
            $(".search_summary").removeClass("warning");
            $(".search_summary").removeClass("error");

            if (level == "warning") {
                $(".search_summary").addClass("warning");
            }
            else if (level == "error") {
                $(".search_summary").addClass("error");
            } else {
                $(".search_summary").addClass("info");
            }

            $(".search_summary .message").text(message);
            $(".search_summary").slideDown();
            setTimeout(() => {
                $(".search_summary").slideUp();
            }, "3000")


        }

        //id로 marker 얻기
        function getMarker(idx) {
            var marker = null;
            for (var i = 0; i < markers.length; i++) {

                if (convertMarkerToADItem(markers[i]).idx == idx) {
                    marker = markers[i];
                    break;
                }
            }

            return marker;
        }

        // 아이템을 클릭했을 때(지도, 리스트 모두 해당)
        function markerItemSelected(idx, isClusterMemberClicked, isDirectAccess, imageIndex, panoPosition) {
            var marker = getMarker(idx);
            var m = marker.getPosition();
            var found = false;

            if (isDirectAccess) {
                mapDiv.morph(marker.getPosition(), 18, "easeInCubic");
            }
            else if (mapDiv.getZoom() < 16 && markerClustering) {
                // 클러스터링 된 상태인지 체크해서 해당되면, 확대한다.

                //markerClustering.isInBounds(marker.latlng);
                var clusters = markerClustering._clusters;
                for (var i = 0; i < clusters.length; i++) {
                    if (clusters[i]._isMember(marker)) {
                        //alert("member!!");
                    }

                    if (!found && clusters[i].isInBounds(m)) {
                        //alert('[' + i + ']in_bounds');
                        var marker_list_in_cluster = clusters[i].getClusterMember();


                        for (var j = 0; j < marker_list_in_cluster.length; j++) {
                            var item = marker_list_in_cluster[j].getPosition();

                            if (item.x == m.x && item.y == m.y) {
                                found = true;
                                //alert(found);
                                //markerClustering.setMarkers(marker_list);
                                mapDiv.morph(marker.getPosition(), 16, "easeInCubic");
                                //marker_list_in_cluster.splice(i, 1);

                                //markerClustering._redraw();
                                break;

                            } else {
                                //console.log('false');
                            }
                        }
                        //setTimeout(mapDiv.setZoom(16), 0);

                    }
                }
            }

            normalizeAllMarkers(false); //모든 지도 위 아이콘 초기화
            showItemView(idx, isClusterMemberClicked, marker, imageIndex); // 선택한 마커 보이기
            selected_marker = marker; // 현재 마커를 저장
            highlightMarker(marker); // 선택한 마커 컬러화
            scrollSelctedItemUp(idx); // 맨 위로 스크롤
            displayRoadViewByItem(idx, false, panoPosition); //로드뷰가 켜져있을 경우 자동으로 이동;

            showMobileItem(idx);

            if (!$('html').hasClass('active') ||
                ($('#ad_item_detail_panel').hasClass('view') && !$('.btn_fold').hasClass('active'))) {
                $('.btn_fold').click();
            }

        }

        function showMobileItem(idx) {

            $('.m_list').removeClass('active');

            var detail_item = null;
            if (current_ad_list != null || current_ad_list !== "undefined") {
                for (var i = 0; i < current_ad_list.length; i++) {
                    if (current_ad_list[i].idx.toString() === idx.toString()) {
                        detail_item = current_ad_list[i];
                        break;
                    }
                }
            }

            if (detail_item == null) {
                console.log(idx + " " + "매체 정보 없음 확인");
                return;
            }

            var mItem = {
                //representname = detail_item.representname
            };
            var mItemhtml = '';
            mItemhtml += '    <div class="img">';

            var photo_file_list = (detail_item.representphoto).split("|");
            var photo_file_uri = "";
            var current_file = photo_file_list[0];
            if (current_file && current_file.length > 0) {
                var firstChar = current_file.slice(0, 1);
                if (!firstChar || firstChar != "/") {
                    current_file = "/" + current_file;
                }
                photo_file_uri = detail_item.photourl.replace(/\/+$/, '') + current_file;

                // small 경로 추가
                var newDir = 'xs';
                var filePathArray = photo_file_uri.split('/');
                filePathArray.splice(filePathArray.length - 1, 0, newDir);
                photo_file_uri = filePathArray.join('/');

                mItemhtml += '    <img src="' + photo_file_uri + '" onerror="this.src =\'/Assets/images/no-image.png\'" alt="" style="min-height:100%"></div>';
            } else {
                mItemhtml += '    <img src="/Assets/images/no-image.png"  onerror="this.src =\'/Assets/images/no-image.png\'" alt="" style="min-height:100%"></div>';
            }

            mItemhtml += '        <div class="segment">';
            var comapny_name = (detail_item.representcompanyname != null && detail_item.representcompanyname != 'undefined') ? detail_item.representcompanyname : detail_item.representname;

            mItemhtml += '            <h4>' + comapny_name + '</h4>';
            if ("False" == "True") {
            mItemhtml += '            <p>' + detail_item.addressinfo + '</p>';
        }
            mItemhtml += '            <ul class="ad_list">';
            //tag list
            var tag_arrary = [];
            if (detail_item.key1 != null) tag_arrary.push(detail_item.key1);
            if (detail_item.key2 != null) tag_arrary.push(detail_item.key2);
            if (detail_item.key3 != null) tag_arrary.push(detail_item.key3);
            //if (detail_item.key4 != null) tag_arrary.push(detail_item.key4);
            //if (detail_item.key5 != null) tag_arrary.push(detail_item.key5);

            if (tag_arrary.length > 0) {
                for (var j = 0; j < tag_arrary.length; j++) {
                    if (tag_arrary[j].length === 0)
                        continue;
                    mItemhtml += "        <li>" + tag_arrary[j].trim() + "</li>";
                }
            }

            mItemhtml += '            </ul>';
            mItemhtml += '        </div>';

            $('.m_list').html(mItemhtml);
            $('.m_list').addClass('active');

        }

        // 현재 지도 위의 Marker들만 화면에 추가한다.
        function updateMarkers(map, markers) {
            var mapBounds = map.getBounds();
            var marker, position;
            var show_marker_num = 0;

            emptyADandMakerList();
            for (var i = 0; i < markers.length; i++) {

                marker = markers[i]
                position = marker.getPosition();

                if (is_search) {
                    //검색결과는 지도 위 뿐만 아니라, 전부 보여준다
                    showMarker(map, marker, ++show_marker_num);
                    current_ad_list.push(convertMarkerToADItem(marker));
                    current_marker_list.push(marker);

                } else {
                    if (mapBounds.hasLatLng(position)) {
                        // 지도 위에 있는 경우
                        showMarker(map, marker, ++show_marker_num);

                        current_ad_list.push(convertMarkerToADItem(marker));
                        current_marker_list.push(marker);
                    } else {
                        //console.log('hide: ' + position);
                        hideMarker(map, marker);
                    }
                }

            }

            // 검색결과 리스트 창에 표시한다.
            adSearchList.updateList(current_ad_list);

            updateMakerByZoomLevel();
        }

        function updateRamdomMarkers(map, markers) {
            var mapBounds = map.getBounds();
            var marker, position;
            var show_marker_num = 0;

            emptyADandMakerList();
            for (var i = 0; i < markers.length; i++) {

                marker = markers[i]
                position = marker.getPosition();

                //
                // 0~3의 확률로 선택하여 보여준다 ***
                //
                if (mapBounds.hasLatLng(position) && Math.floor(Math.random() * 10) < 3) {
                    // 지도 위에 있는 경우
                    showMarker(map, marker, ++show_marker_num);

                    current_ad_list.push(convertMarkerToADItem(marker));
                    current_marker_list.push(marker);
                } else {
                    //console.log('hide: ' + position);
                    hideMarker(map, marker);
                }
            }

            // 검색결과 리스트 창에 표시한다.
            adSearchList.updateList(current_ad_list);
        }

        // Point 지점으로 Pan 이동
        function panToLocation(idx) {
            for (var i = 0; i < current_ad_list.length; i++) {
                if (current_ad_list[i].idx == idx) {
                    mapDiv.panTo(new naver.maps.LatLng(current_ad_list[i].latitude, current_ad_list[i].longitude));
                    break;
                }
            }
        }

        // 아이콘에 마우스 오버
        function onMouseOver(e) {
            let marker = e.overlay;
            let marker_content = $(marker.getIcon().content);
            normalizeAllMarkers(marker);
            highlightMarker(marker);

            if (mapDiv.getZoom() < maker_zoom_level) {
                $(marker_content).removeClass("min");
            }

        }
        // 아이콘에 마우스 아웃
        function onMouseOut(e) {
            let marker = e.overlay;
            let marker_content = $(marker.getIcon().content);

            // 클릭한 아이템이 아닌 경우에만 초기화 한다.
            //console.log(marker);
            //console.log(selected_marker);
            if (marker != null && selected_marker != null && selected_marker != marker) {
                normalizeMarker(marker);
            }
            if (mapDiv.getZoom() < maker_zoom_level) {
                $(marker_content).addClass("min");
            }
        }

        // Marker를 컬러로 표시한다
        function highlightMarker(marker) {

            let marker_content = $(marker.getIcon().content);
            marker.setZIndex(200);//앞으로 가져오기
            marker_content.css('background-color', '#12368C');
            marker_content.find(".segment p").css('color', 'white');
            marker_content.find(".img").css('background-color', 'white');
            marker_content.addClass("mouseover");

        }

        function hoverMarker(marker) {
            let marker_content = $(marker.getIcon().content);
            marker.setZIndex(200);//앞으로 가져오기
        }

        // Marker를 정상으로 되돌린다
        function normalizeMarker(marker) {

            //for (var i = 0; i < current_marker_list.length; i++) {
            //    var item = current_marker_list[i];
            //    if (item.getAnimation() !== null) {
            //        item.setAnimation(null);
            //    }
            //}
            //marker.setAnimation(naver.maps.Animation.NONE);

            let marker_content = $(marker.getIcon().content);
            marker.setZIndex(100);
            marker_content.css('background-color', 'white');
            marker_content.find(".segment p").css('color', '#12368c');
            marker_content.find(".img").css('background-color', 'rgb(87 125 163 / 0.10)');
            marker_content.removeClass("mouseover");

        }

        // 모든 Marker를 처음 상태로 표시되도록 한다.
        function normalizeAllMarkers(exceptSelectedMarker) {

            for (var i = 0; i < current_marker_list.length; i++) {
                var item = current_marker_list[i];

                if (exceptSelectedMarker && item != null && selected_marker != null && selected_marker == item) {
                    continue;
                }
                else {
                    let marker_content = $(item.getIcon().content);
                    item.setZIndex(100);
                    marker_content.css('background-color', 'white');
                    marker_content.find(".segment p").css('color', '#12368C');
                    marker_content.find(".img").css('background-color', 'rgb(87 125 163 / 0.20)');
                    marker_content.removeClass("mouseover");

                    if (item.getAnimation() !== null) {
                        item.setAnimation(null);
                    }

                    item.setAnimation(naver.maps.Animation.NONE);
                }

            }

        }


        function createMarkerElement(marker, num) {

            /*<div class="marker marker1 bottom">
            <div class="img"><img src="/Assets/images/icon1.png" alt="전광판광고" width="18"></div>
            <div class="segment">
            <p>광화문 전광판</p>
            <p>벽면, 대형, LED전광판</p>
            </div>
            </div>
            */
            var item = convertMarkerToADItem(marker);

            //방향
            //left
            //right
            //top
            //top_right
            //top_left
            //bottom
            //bottom_left
            //bottom_right
            var direction = '';
            if (item.direction != null && item.direction != 'undefined') {
                direction = item.direction;
            }

            switch (direction) {
                case "1":
                    direction = 'top';
                    break;
                case "2":
                    direction = 'top_right';
                    break;
                case "3":
                    direction = 'right';
                    break;
                case "4":
                    direction = 'bottom_right';
                    break;
                case "5":
                    direction = 'bottom';
                    break;
                case "6":
                    direction = 'bottom_left';
                    break;
                case "7":
                    direction = 'left';
                    break;
                case "8":
                    direction = 'top_left';
                    break;
                default:
                    direction = 'none';
                    break;
            }

            var divMarker = document.createElement("div");
            divMarker.setAttribute("data-id", item.idx);
            divMarker.setAttribute("data-index", num);
            divMarker.setAttribute("data-period", item.periodcategory);
            divMarker.setAttribute("data-cost", item.costcategory);
            divMarker.setAttribute("class", "marker marker1 min " + direction);


            var divImg = document.createElement("div");
            divImg.setAttribute("class", "img");

            // 대표 이미지 만들기
            var img = document.createElement("img");


            var represent_image = "";
            var photo_file_list = (item.representphoto).split("|");
            var current_file = photo_file_list[photo_file_list.length - 1];
            if (current_file && current_file.length > 0) {
                var firstChar = current_file.slice(0, 1);
                if (!firstChar || firstChar != "/") {
                    current_file = "/" + current_file;
                }

                // xs 경로 추가
                var newDir = 'xs';
                var filePathArray = current_file.split('/');
                filePathArray.splice(filePathArray.length - 1, 0, newDir);
                current_file = filePathArray.join('/');

                represent_image = item.photourl.replace(/\/+$/, '') + current_file;

                img.setAttribute("onerror", "'this.src =\"/Assets/images/no-image.png\"'");
                img.setAttribute("width", "100%");
                img.setAttribute("height", "100%");

            } else {
                represent_image = "/Assets/images/icon1.png";
                img.setAttribute("onerror", "'this.src =\"/Assets/images/no-image.png\"'");
                img.setAttribute("width", "18");
            }

            img.setAttribute("src", represent_image);
            divImg.appendChild(img);

            var divSegment = document.createElement("div");
            divSegment.setAttribute("class", "segment");
            var comapny_name = (item.representcompanyname != null && item.representcompanyname != 'undefined') ? item.representcompanyname : item.representname;
            divSegment.innerHTML = "<p>" + comapny_name + "</p>";
            divSegment.innerHTML += "<p> " + item.tname + "</p > ";
            divMarker.append(divImg, divSegment);

            console.log("[" + num + "]" + item.idx + " / " + comapny_name + ": " + item.periodcategory + " / " + item.costcategory);

            return divMarker;

        }

        function showMarker(map, marker, num) {
            var marker_html = createMarkerElement(marker, num);
            //var n = 4; //1 = 45도
            //var m = 4;

            ////direction 데이터 임시
            //var min = Math.ceil(1);
            //var max = Math.floor(9);
            //var rand = Math.floor(Math.random() * (max - min)) + min; //최댓값은 제외, 최솟값은 포함

            //var circleDirection = $(marker_html).find('.circle')[0];
            //$(circleDirection).circleProgress({
            //    startAngle: (Math.PI / 4 * (6 + rand)),
            //    value: 0.125 * m, //0.125 = 45도
            //    lineCap: 'round',
            //    animation: false,
            //    thickness: 12,
            //    size: 100,
            //    reverse: false,
            //    //fill: { color: '#000000' },
            //    fill: { gradient: ['#ff1e41', '#ff9f8e'] },
            //    emptyFill: "rgba(0,0,0,0.0)",

            //});
            marker.setIcon({
                content: marker_html,
                size: new naver.maps.Size(22, 35),
                anchor: new naver.maps.Point(11, 35)
            });

            if (!marker.getMap()) {
                marker.setMap(map);
            }

        }

        function hideMarker(map, marker) {

            if (!marker.getMap()) return;
            marker.setMap(null);
        }

        function emptyADandMakerList() {
            current_ad_list = [];
            current_marker_list = [];
        }

        function convertMarkerToADItem(marker) {
            var item = null;
            if (!marker || !marker.getPosition()) return item;

            var position = marker.getPosition();
            var ad_Item;
            for (var i = 0; i < ad_list.length; i++) {
                ad_Item = ad_list[i];
                if (marker.idx == ad_Item.idx && position.lat() == ad_Item.latitude && position.lng() == ad_Item.longitude) {
                    item = ad_Item;
                    break;
                }
            }

            return item;

        }

        function convertADItemToMaker(adItem) {
            var marker = null;
            var position = null;
            var current_marker = null;

            for (var i = 0; i < markers.length; i++) {
                current_marker = markers[i];
                position = current_marker.getPosition();
                if (adItem.idx == current_marker.idx && position.lat() == adItem.latitude && position.lng() == adItem.longitude) {
                    marker = markers[i];
                    break;
                }
            }

            return marker;

        }

        //교통량 지도 제어
        var traffic_map = null;
        $('#switch_traffic').click(function () {
            var switch_on = $("input:checkbox[id='switch_traffic']").is(":checked");

            if (switch_on) {
                $.ajax({
                    //url: '/Scripts/traffic_data_weighted.json',
                    url: '/Map/GetDongPopulation',
                    dataType: 'json',
                    success: function (data) {

                        //console.log(data.coordinates.length);

                        traffic_map = new naver.maps.visualization.HeatMap({
                            map: mapDiv,
                            data: data.coordinates,
                            radius: 100,
                            opacity: 0.5
                        });
                    }
                });
            } else {
                if (traffic_map !== "undefined") {
                    traffic_map.setMap(null);
                }
            }


        });

        //유동인구 메뉴

        var dong_populationMap = [];
        $('#btn_population').click(function () {
            getPopulationList();

            //var switch_on = $("input:checkbox[id='switch_population']").is(":checked");
            //if (switch_on) {
            //    getPopulationList();
            //} else {
            //    removeHeatMap();
            //}
        });


        //열지도 가져오기(유동인구)
        function getPopulationList() {
            //var switch_on = $("input:checkbox[id='switch_population']").is(":checked");

            //if (!switch_on) {
            //    return false;
            //}
            $("#btn_population").html('로딩중...');
            $.ajax({
                //url: 'https://navermaps.github.io/maps.js/docs/data/earthquake_weight.json',  //'/Map/GetPopulationList',
                url: '/Map/GetPopulationList',
                dataType: 'json',
                success: function (data) {
                    //Example: 열지도 가중치 사용하기
                    //https://navermaps.github.io/maps.js/docs/tutorial-4-visualization-heatmap-w.example.html

                    startHeatMap(data);
                },
                complete: function () {
                    $("#btn_population").html('유동인구 조회');
                }
            });
        }

        var heatmap = null;
        function startHeatMap(data) {
            heatmap = new naver.maps.visualization.HeatMap({
                map: mapDiv,
                // 데이터 구조
                // {"weight":2.7 "location": [127.93,35.92]}
                data: data.coordinates,
                colorMap: naver.maps.visualization.SpectrumStyle.RAINBOW

            });
        }

        $('#btn_close_population').click(function () {
            removeHeatMap();
        });

        function removeHeatMap() {
            if (heatmap != null) {
                heatmap.setMap(null);
                heatmap = null;
            }
        }

        $(".btn-filter").click(function () {
            $(this).toggleClass("active");
        });

        $(".filter_icon").click(function () {
            var switch_on = $("input:checkbox[id='switch_population']").is(":checked");

            if (!switch_on) {
                return false;
            }

            removeHeatMap();
            getPopulationList();

            //$(".filterbar").toggleClass("d-none");
        });



        $('.ad_type').click(function () {
            $(this).toggleClass('active');
        });



        ///
        /// 실시간 교통 정보
        ///

        var trafficLayer = new naver.maps.TrafficLayer({
            interval: 60000 // 60초마다 새로고침
        });


        $('#btn_traffic').click(function () {

            if (trafficLayer.getMap()) {
                //Off
                trafficLayer.setMap(null);
            } else {
                //On
                trafficLayer.setMap(mapDiv);
            }

        });

        ///
        /// 자전거 도로
        ///

        var bicycleLayer = new naver.maps.BicycleLayer();
        $('#btn_bycicle').click(function () {

            if (bicycleLayer.getMap()) {
                bicycleLayer.setMap(null);
            } else {
                bicycleLayer.setMap(mapDiv);
            }

        });

        ///
        /// 지도 유형 변경
        ///
        function SetMapType(mapTypeId) {
            if (mapDiv.getMapTypeId() !== naver.maps.MapTypeId[mapTypeId]) {
                mapDiv.setMapTypeId(naver.maps.MapTypeId[mapTypeId]); // 지도 유형 변경하기
            }

        }

        ///
        /// 최근 본 매체 비교하기
        ///
        var compareItems = {
            prefix: "recent_item_",

            //체크박스 확인
            checkCheckbox: function () {

                var checkedItems = $("#recently_viewed_items label input:checkbox[name='id']:checked");

                if (checkedItems.length >= 2) {
                    $('#btnCompare').attr('disabled', false);
                    $('#btnCompare').addClass('active');
                }

                if (checkedItems.length < 2) {
                    $('#btnCompare').attr('disabled', true);
                    $('#btnCompare').removeClass('active');

                }

            },
            // 추가
            add: function (bommId) {
                var addItem = null;

                // 중복처리 체크
                function ItemExisted() {
                    var exist = false;
                    $("#recently_viewed_items label input:checkbox[name='id']").each(function () {
                        if (this.value == bommId) {
                            exist = true;
                        }
                    });

                    return exist;
                };


                if (!ItemExisted()) {

                    for (var i = 0; i < ad_list.length; i++) {
                        if (ad_list[i].idx == bommId) {
                            addItem = ad_list[i];
                            break;
                        }
                    }

                    var add_html = "<label id='" + this.prefix + bommId + "'><input type='checkbox' checked name='id' value='" + bommId + "' onclick='compareItems.checkCheckbox()' >";
                    var comapny_name = (addItem.representcompanyname != null && addItem.representcompanyname != 'undefined') ? addItem.representcompanyname : addItem.representname;
                    var photo_file_list = (addItem.representphoto).split("|");
                    var photo_file_uri = "";
                    if (photo_file_list[0]) {
                        photo_file_uri = addItem.photourl.replace(/\/+$/, '') + photo_file_list[0];
                        add_html += "<div><img src='" + photo_file_uri + "' onerror='this.src =\"/Assets/images/no-image.png\"' alt=''><br />" + comapny_name + "</div></label>";
                    } else {
                        add_html += "<div><img src='/Assets/images/no-image.png' onerror='this.src =\"/Assets/images/no-image.png\"' alt=''><br/>" + comapny_name + "</div></label>";
                    }


                    var items = $("#recently_viewed_items label");

                    var max_length = (is_mobile_view) ? 4 : 4;
                    if (items.length >= max_length) {
                        //최대 초과 시 목록에서 삭제
                        items.last().remove();

                    }

                    // 최종 추가
                    $('#recently_viewed_items').prepend(add_html);

                    // '최근 본 매체가 없습니다' 메시지 삭제
                    $('#no_recent_items_box').css('display', 'none');

                    this.updateCount();
                    this.checkCheckbox();

                }

            },

            // 삭제
            del: function () {
                $("#recently_viewed_items label input:checked").each(function () {
                    $(this).parent().remove();
                });

                this.updateCount();
                this.checkCheckbox();

                var items = $("#recently_viewed_items label");
                if (items.length == 0) {
                    // '최근 본 매체가 없습니다' 메시지 표시
                    $('#no_recent_items_box').css('display', 'flex');
                }

            },
            // 개수 업데이트
            updateCount: function () {
                var items = $("#recently_viewed_items label");
                var itemCount = items ? items.length : 0;
                $('#recently_viewed_items_count').text(itemCount);

            },
            //비교
            compare: function () {

                var frm = $("#compare_form");
                var param = frm.serialize();
                //var width = 100;// 150 + (200 * (param.split('&').length)) + 60;
                var compareWindow = window.open("/Map/GetCompareView?" + param, "compare_window", "width=" + 100 + ",height=" + 100 + ",location=no,status=no,scrollbars=yes, resizable=no");
                compareWindow.focus();

            }

        }



        ///////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////

        var panoramaDiv = null;
        var pano_marker = null;
        naver.maps.onJSContentLoaded = function () {
            // 아이디 혹은 지도 좌표로 파노라마를 표시할 수 있습니다.
            panoramaDiv = new naver.maps.Panorama("panoDiv", {
                position: new naver.maps.LatLng(37.3599605, 127.1058814),
                pov: {
                    pan: -133,
                    tilt: 0,
                    fov: 100
                },
                visible: true,
                minScale: 0,
                maxScale: 10,
                minZoom: 0,
                maxZoom: 4,
                flightSpot: true,
                logoControl: false,
                logoControlOptions: {
                    position: naver.maps.Position.BOTTOM_RIGHT
                },
                zoomControl: false,
                zoomControlOptions: {
                    position: naver.maps.Position.BOTTOM_RIGHT,
                    style: naver.maps.ZoomControlStyle.SMALL
                },
                aroundControl: false,
                aroundControlOptions: {
                    position: naver.maps.Position.TOP_RIGHT
                }

            });

            // 파노라마 위치가 갱신되었을 때 발생하는 이벤트를 받아 지도의 중심 위치를 갱신합니다.
            naver.maps.Event.addListener(panoramaDiv, 'pano_changed', function () {
                var latlng = mapDiv.getPosition();

                if (!latlng.equals(mapDiv.getCenter())) {
                    panoramaDiv.setCenter(latlng);

                }
            });

            naver.maps.Event.addListener(panoramaDiv, "pov_changed", function () {
                var position = panoramaDiv.getPosition();
                var pan = panoramaDiv.getPov().pan;
                var tilt = panoramaDiv.getPov().tilt;
                var fov = panoramaDiv.getPov().fov;
                console.log("[lat, lng, pan, tilt, fov] = [" + position._lat + "," + position._lng + "," + + pan + "," + tilt + "," + fov + "]");

            });
        };


        // 거리뷰 레이어를 생성합니다.
        var streetLayer = new naver.maps.StreetLayer();
        var default_panorama_window_size = 0;
        var panorama_window_size = default_panorama_window_size;
        naver.maps.Event.once(mapDiv, 'init', function () {
            //streetLayer.setMap(mapDiv);
        });

        $('.map_toolbar .bottom_tool>ul>li:first-child').click(function (e) {
            e.preventDefault();

            var is_active = $(this).hasClass('active');

            if (!is_active) {
                streetLayer.setMap(mapDiv);
                $(this).addClass('active');

            } else {
                panoramaViewOnOff(false);
            }

        });

        //파노라마 뷰 On/Off
        function panoramaViewOnOff(on, min_mid_max) {

            var pano_button = $('.map_toolbar .bottom_tool>ul>li:first-child');

            if (on == true) {
                //로드뷰 ON 켜기
                streetLayer.setMap(mapDiv);

                if ($(".resizer").css('display') == 'none') {
                    min_mid_max = 0; // 초기화
                }

                if (min_mid_max != 'undefined') {
                    $('#naverMap').height(min_mid_max + '%');
                    $('#panoDiv').css('display', 'block');
                    $('#panoDiv').css('min-height', '300px');
                } else {

                }

                $(".resizer").css('display', 'block');
                $(".btn_tool").css('display', 'none');

                if (!$('html').hasClass('active') && $('#ad_item_detail_panel').hasClass('view')) {
                    $('.btn_fold').click();
                }

                pano_button.addClass('active');

            } else {
                //로드뷰 OFF 하기
                $('.container.map').height('calc(100vh - 60px)');
                $('#naverMap').height('calc(100vh - 60px)');
                streetLayer.setMap(null);
                $('#panoDiv').css('display', 'none');
                if (pano_marker) { pano_marker.setMap(null); pano_marker = null; }
                if (!is_mobile_view) {
                    $(".btn_tool").css('display', 'block');
                }
                pano_button.removeClass('active');
                $(".resizer").css('display', 'none');

            }

            //삭제금지 - 지도크기가 변할 때 resize 이벤트를 주어야민 변경된 크기가 자동 계산됨

            window.dispatchEvent(new Event('resize'));

        }


        // 거리뷰 레이어가 변경되면 발생하는 이벤트를 지도로부터 받아 버튼의 상태를 변경합니다.
        naver.maps.Event.addListener(mapDiv, 'streetLayer_changed', function (streetLayer) {
            if (streetLayer) {
                //$('.map_toolbar .bottom_tool>ul>li:first-child').addClass('active');


            } else {
                //$('.map_toolbar .bottom_tool>ul>li:first-child').removeClass('active');
                //btn.removeClass('control-on');
            }
        });

        // 지도를 클릭했을 때 발생하는 이벤트를 받아 파노라마 위치를 갱신합니다. 이때 거리뷰 레이어가 있을 때만 갱신하도록 합니다.
        naver.maps.Event.addListener(mapDiv, 'click', function (e) {

            var is_active = $('.map_toolbar .bottom_tool>ul>li:first-child').hasClass('active');

            if (is_active) {
                if (panorama_window_size == 100) {
                    panorama_window_size = default_panorama_window_size; // 초기화
                }
                displayRoadViewItemByPosition(e.coord, null);
            }
        });


        /// 선택한 아이템 로드뷰 표시
        function displayRoadViewByItem(idx, force_view, pano_position) {
            var clicked_item = $('.map_toolbar .bottom_tool>ul>li:first-child');
            var is_active = clicked_item.hasClass('active');

            var marker = getMarker(idx);
            if (!is_active) {
                //강제로 로드뷰 표시?
                if (force_view) {
                    clicked_item.click();
                    displayRoadViewItemByPosition(marker, pano_position);
                }

            }
            //로드뷰가 켜져 있는 경우, 곧바로 이동
            else {
                displayRoadViewItemByPosition(marker, pano_position);

            }

            if (is_mobile_view) {
                $('.map_btn').click();
            }

        }

        ///좌표로 로드뷰 표시
        var infowindow = new naver.maps.InfoWindow({
            maxWidth: 400,
            borderColor: "#12368c",
            borderWidth: 3
        });

        function displayRoadViewItemByPosition(item, pano_position) {

            if (streetLayer.getMap()) {

                panoramaViewOnOff(true);

                if (pano_position) {
                    if (pano_marker) { pano_marker.setMap(null); pano_marker = null; }

                    pano_data = pano_position.replace("\'", "").split(',');
                    var pano_lat = pano_data[0];
                    var pano_lng = pano_data[1];
                    var pano_pan = pano_data[2];
                    var pano_tilt = pano_data[3];
                    var pano_pov = pano_data[4];


                    var coord = item.getPosition();
                    var adItem = convertMarkerToADItem(item);

                    ////////////////////////////////
                    // 지도 위에 상세정보판 보여주기
                    // https://navermaps.github.io/maps.js/docs/naver.maps.InfoWindow.html
                    ////////////////////////////////
                    var comapny_name = (adItem.representcompanyname != null && adItem.representcompanyname != 'undefined') ? adItem.representcompanyname : adItem.representname;
                    var type = '';
                    switch (adItem.categoryid) {
                        case 1: type = "전광판"; break;
                        case 2: type = "빌보드"; break;
                        case 3: type = "야립"; break;
                        case 4: type = "교통"; break;
                        case 99: type = "기타"; break;

                    }
                    type = type + " / ";
                    switch (adItem.wallAdType) {
                        case 1: type += "벽면형"; break;
                        case 2: type += "옥상형"; break;
                        case 3: type += "지주형"; break;
                        case 99: type += "기타"; break;
                        default: type += "기타"; break;
                    }

        var contentString = ''
        if ("False" == "True"){
            contentString = [
            '<div class="pano_info_window">',
            //'   <div class="tool"><a href="javascript:infowindow.close();" class=close" title="닫기"><img src="/Assets/images/close2.png"></a></div>',
            '   <h2>' + comapny_name + '</h2>',
            '   <p class="address">' + adItem.addressinfo + '<p />',
            '<div class="info" style="display:block">',
            '<div>',
            '<p>규격</p>',
            '        <p>' + adItem.psize + '</p>',
            '    </div>',
            '    <div>',
            '        <p>유형</p>',
            '        <p>' + type + '</p>',
            '    </div>',
            '</div>',
            '</div>'
            ].join('');
            } else {
            contentString = [
            '<div class="pano_info_window">',
            //'   <div class="tool"><a href="javascript:infowindow.close();" class=close" title="닫기"><img src="/Assets/images/close2.png"></a></div>',
            '   <h2>' + comapny_name + '</h2>',
            '</div>'
            ].join('');
        }



                    panoramaDiv = new naver.maps.Panorama("panoDiv", {
                        position: new naver.maps.LatLng(pano_lat, pano_lng),
                        //pov: {
                        //    pan: pano_pan,
                        //    tilt: pano_tilt,
                        //    fov: pano_pov
                        //},
                        logoControl: false
                    });


                    var info_marker = new naver.maps.Marker({
                        position: new naver.maps.LatLng(coord._lat, coord._lng),
                        icon: { // 레티나 디스플레이 대응 마커 아이콘
                            url: "/Assets/images/pin_default.png", // 110x72 크기의 원본 이미지
                            //size: new naver.maps.Size(100, 36),
                            //anchor: new naver.maps.Point(28, 36),
                            //origin: new naver.maps.Point(0, 0),
                            //scaledSize: new naver.maps.Size(55, 36)
                        },
                        zIndex: 1500
                    });

                    naver.maps.Event.addListener(panoramaDiv, "init", function () {
                        info_marker.setMap(panoramaDiv);

                        var proj = panoramaDiv.getProjection();
                        var lookAtPov = proj.fromCoordToPov(info_marker.getPosition());
                        if (lookAtPov) {
                            panoramaDiv.setPov(lookAtPov);
                        }

                        infowindow.setContent(contentString);
                        naver.maps.Event.addListener(info_marker, "click", function (e) {
                            if (infowindow.getMap()) {
                                infowindow.close();
                            } else {
                                infowindow.open(panoramaDiv, info_marker);
                            }
                        });
                        infowindow.open(panoramaDiv, info_marker);
                    });



                    ////////////////////////////////
                    // 지도 위에 상세정보판 보여주기 끝
                    ////////////////////////////////


                } else {
                    // 파노라마의 setPosition()은 해당 위치에서 가장 가까운 파노라마(검색 반경 300미터)를 자동으로 설정합니다.
                    panoramaDiv.setPosition(item);

                }


                if (!pano_marker) {
                    pano_marker = new naver.maps.Marker({
                        position: new naver.maps.LatLng(item._lat, item._lng),
                        icon: { // 레티나 디스플레이 대응 마커 아이콘
                            url: "/Assets/images/pin_default.png", // 110x72 크기의 원본 이미지
                            //size: new naver.maps.Size(100, 36),
                            //anchor: new naver.maps.Point(28, 36),
                            //origin: new naver.maps.Point(0, 0),
                            //scaledSize: new naver.maps.Size(55, 36)
                        },
                        map: mapDiv
                    });
                } else {
                    pano_marker.setPosition(item);
                }

            }
            else {

                console.log("파노라마 지도 초기화 실패");
            }


        }
        ///////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////////////


    </script>


    <!-- LOGGER(TM) TRACKING SCRIPT V.40 FOR logger.co.kr / 111362 : COMBINE TYPE / DO NOT ALTER THIS SCRIPT. -->
    <script type="text/javascript">var _TRK_LID = "111362"; var _L_TD = "ssl.logger.co.kr"; var _TRK_CDMN = ".k-goplay.com";</script>
    <script type="text/javascript">
        var _CDN_DOMAIN = location.protocol == "https:" ? "https://fs.bizspring.net" : "http://fs.bizspring.net";
        (function (b, s) { var f = b.getElementsByTagName(s)[0], j = b.createElement(s); j.async = true; j.src = '//fs.bizspring.net/fs4/bstrk.1.js'; f.parentNode.insertBefore(j, f); })(document, 'script');
    </script>
    <noscript><img alt="Logger Script" width="1" height="1" src="http://ssl.logger.co.kr/tracker.1.tsp?u=111362&amp;js=N" /></noscript>
    <!-- END OF LOGGER TRACKING SCRIPT -->
    <!--채널톡-->
    <script>
        (function () { var w = window; if (w.ChannelIO) { return w.console.error("ChannelIO script included twice."); } var ch = function () { ch.c(arguments); }; ch.q = []; ch.c = function (args) { ch.q.push(args); }; w.ChannelIO = ch; function l() { if (w.ChannelIOInitialized) { return; } w.ChannelIOInitialized = true; var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = "https://cdn.channel.io/plugin/ch-plugin-web.js"; var x = document.getElementsByTagName("script")[0]; if (x.parentNode) { x.parentNode.insertBefore(s, x); } } if (document.readyState === "complete") { l(); } else { w.addEventListener("DOMContentLoaded", l); w.addEventListener("load", l); } })();

        const userObject = {
            language: 'ko',
            tags: ['a', 'b'],
            profile: {
                email: 'customer@email.com',
                mobileNumber: '010-1234-5678',
                name: "고객(정보를 입력해 주세요)",
            },
            profileOnce: {
                customerType: 'vip',
                registeredAt: '2022-11-22'
            },
            unsubscribeEmail: false,
            unsubscribeTexting: true
        };


        ChannelIO('boot', {
            "pluginKey": "8d4b8d80-71f2-495b-8ef6-4ad2f2dadffe",
            //"customLauncherSelector": ".custom-button-1, #custom-button-2",
            "hideChannelButtonOnBoot": false
        });

        ChannelIO('onChatCreated', function onChatCreated() {
            console.log('New Chat is created.');
            NA_CONV('custom003');
        });

        ChannelIO('onBadgeChanged', function onBadgeChanged(unreadCount) {
            console.log(` ${unreadCount}개의 읽지 않은 채팅 메시지가 있습니다`);
        });


        ChannelIO('updateUser', userObject, function onUpdateUser(error, user) {
            if (error) {
                console.log(error);
            } else {
                //console.log('updateUser success', user);
            }
        });
    </script>
    <!-- MR Script Ver 2.0 -->
    <script async="true" src="//log1.toup.net/mirae_log_chat_common.js?adkey=srsgk" charset="UTF-8"></script>
    <!-- MR Script END Ver 2.0 -->
    <!-- NAVER 공통 SCRIPT -->
    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
        if (!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "s_1a878bbb4839";
        if (window.wcs) {
            wcs.inflow("k-goplay.com");
        }
        wcs_do();
    </script>

</body>


</html>
