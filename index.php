<?php

ini_set("display_error", true);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="style/style.css">
    <script src="js/smooth-scroll.polyfills.min.js"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            header: "#nav-header"
        }); 

    </script>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-main-blue fixed-top" id="nav-header">
        <img src="img/ikirie.jpg" class="profile-img mr-2" alt="">
        <a class="navbar-brand" href="#">KYRIE's Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#1">#1 <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#2">#2 <span class="sr-only"></span></a>
                </li>
            
                <li class="nav-item active">
                    <a class="nav-link" href="#3">#3 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#4">#4 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#5">#5 <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#6">#6 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#8">#8 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#9">#9 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#10">#10 <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#11">#11-12 <span class="sr-only"></span></a>
                </li>
                
            </ul>
        </div>
    </nav>


    <div class="jumbotron text-center header-img">
        <h1 class="display-5 mt-5">KYRIE's Portfolio</h1>
        <p class="lead">美術教育事例研究2020 最終成果物</p>
        <hr class="my-4">
        <p>教育学専攻M1 宮島 衣瑛 @kiriem_</p>
    </div>

    <div class="container-fluid">
        <div class="row bg-main-white p-4">
            <div class="col-md-8 offset-md-2">
            
                <h1 class="main-title text-center mt-4"><span class="main-span-main-white">コンセプト</span></h1>
                <p class="text my-5">前回このポートフォリオを作ったのは、学部2年生のときだ。当時のポートフォリオを見ると、「テクノロジーを使ったあたらしい表現」をテーマにPagesを使って作成している。今回、このポートフォリオを超えるためにはどのような
                工夫をしたらよいだろうかと考えていた。1つは、この3年間のうちに上達したDTPスキルを駆使して、再度同じようにポートフォリオを作成することである。しかし、Covid-19下においてますます需要が高まっているインターネット上での表現に最適化された形で表現したほうが、時代性にあっているといえるだろう。<br>
                私の研究テーマは、コンピュータを使った表現を子どもたちに体験してもらうことでもある。子どもたちは、紙やペンなどの固定化されたメディアだけでなく、コンピュータという強力な新しいメディアを通した表現活動をしてほしいと願っている。そんな私自身がまずは率先してWebポートフォリオという形を取ってみたい。</p>

            </div>

        </div>

        <div class="row bg-white mt-5" id="1">

            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第一講</span></h1>
                <p class="text-center">自分の経験から、図工、美術教育について振り返り、考えてみる</p>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                １．私が今まで受けてきた図工、美術の授業のよいところ、悪いところ
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4 class="title-left">①：小学校</h4>
                                <p class="text">4年生から図工の専科の先生が授業をしていた。先生がとてもいい人で、図工の時間がすごく楽しみだったのを覚えている。作品を作りながらも友達と相談したりすることが楽しかった。いま思えば協働的な学びをしていたように思う。悪かった点は、少なくとも私が受けてきた授業ではあまり思いつかないが、強いて言うならば作品を持ち帰る前に壊れたり破れたりしてしまったことが多かったので、写真に撮って保存するなどをしたかった。</p>
                                <h4 class="title-left">②：中学校、高等学校</h4>
                                <p class="text">急に縛りが強くなり、教科としての美術という側面が強くなったように思う。自画像を書いたり模写をするのはあまり好きではなかった。これは個人的な好みの問題だが、私は絵画より造形のほうが好きなので、そういった授業が少なかったのは大変残念だった。<br>
                                また、絵を描くということについても中学生くらいになると得意不得意の差がかなり出てきており、その軸のもと評価されると途端に成績が悪くなったことも覚えている。高校では工芸の授業があり、それはとても楽しかった。自分で木を削ってペーパーナイフを作ったりした。</p>

                                <h4 class="title-left">③：大学</h4>
                                <p class="text">大学での図工の授業は、小学校の教師という目線で見てはいるものの、自分たちが心の底から作品を作る楽しさを味わったように思う。どのような授業が良い授業か、というわけではなく、何をしたらものを作る楽しさを味わえるかという視点に変わった。私の研究にもかなりダイレクトに関係してくる領域なので、毎回とても興味深く多くのことを学べたように思う。</p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ２．どんな図工、美術教育がよいと思うか？
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            <p class="text">図工・美術の究極的な目的は、アート志向を育むことだと思う。物事をアートとして楽しみ、アートとして考えることができれば、子どもたちの成長の礎になるような気がする。そのためには、まずは作ること、そして見ることを大切にしたい。子どもたちは作ることで学ぶ。学ぶことは作ることでもある。この両方を行き来できるような授業であってほしい。</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ３．教師の役割とは何か？
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text">まずは教師が楽しむことが第一である。やり方やゴールを強制されることは楽しいわけがない。授業として達成したい目標がある中で、どれだけ制限をかけないようにして余白が作れるかが教師としての勝負だと思われる。</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ４．コロナ禍を経験して、どのように教育は変わっていくと思うか？また、図工・美術教育は、どのようになっていくと思うか？
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text">Covid-19に煽られて、社会のあらゆるところでデジタル化が進んでいる。DXは喫緊の課題として教育だけではなく社会全体の問題として考えていくべきだが、当然教育もその影響を受けている。<br>こと教育について考えてみると、私たちはある意味で無目的的にデジタル化をすればいいと思っている節がある。デジタル化することが目的となり、内容や方法論についての議論が疎かになってしまう可能性が拭えない。この問題を解決するためには、学問的に解決する必要がある。現状、情報教育の領域では手法論の話しかされておらず、その下に本来置かれるべき教育哲学や思想があまりにも空洞化しすぎている。<br>図工教育はだからこそ、デジタル以外の選択肢を忘れないでほしいと個人的には思う。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row bg-white mt-5" id="2">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第ニ講</span></h1>
                <p class="text-center">身の回りのいろいろなものを生かして「造形遊び」をしよう</p>
            </div>

            <div class="col-md-8 offset-md-2">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                            $images = ["02-01.jpg", "02-02.jpg", "02-03.jpg"];

                            for($i=0; $i<count($images); $i++){
                                if($i==0){
                                    $isActive="active";
                                }else{
                                    $isActive = "";
                                }
                                print<<<EOF
                                    <div class="carousel-item {$isActive}">
                                        <img src="img/{$images[$i]}" class="w-100">
                                    </div>
                                EOF;
                            }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                

                
            </div>

            <div class="col-md-8 offset-md-2 my-4">
                <h4 class="text-center font-bold">クリッピーの戦い</h4>
                <p class="text">本作品は、深夜まで続いたZoomミーティング中に何の気無しにクリップを出して作り出したものである。造形あそびの本質は、「なんとなく」から始まるのではないだろうか。製作中はZoomミーティングに半分、こちらの製作に半分ずつ意識を配分していた。指先を動かすことは脳の覚醒につながるが、実際製作をすすめていくとこちらに集中してしまった。<br>私たちは、「ヒト型」をどのように判別しているのだろう。人工知能研究で言うところの特徴量についてである。例えば、クリッピーを見て、ヒト型だと思う人は多いだろう。手足があって2足歩行であればヒト型なのか。また、手の角度によってそこに物語をつくることができる。人間の想像力は無限だ。</p>
            </div>

        </div>
        
        <div class="row bg-white mt-5" id="3">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第三講</span></h1>
                <p class="text-center">NHK <a href="https://www2.nhk.or.jp/school/movie/bangumi.cgi?das_id=D0005210001_00000" target="blank_">「君なら何つくる？」 <i class="fas fa-external-link-alt"></i></a> を見て、教科や題材について考える</p>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="accordion" id="accordion3">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse03-01" aria-expanded="true" aria-controls="collapseOne">
                                １．番組を見て気づいたこと
                                </button>
                            </h5>
                        </div>

                        <div id="collapse03-01" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion3">
                            <div class="card-body">
                                <p class="text">
                                    ・子どもが陥りやすいポイントを押さえている（例：花の色や形を正確に描こうとしている, 「失敗」を失敗と思わないなど）<br>
                                    ・「優しい」というイメージを色で表すことがおもしろい<br>
                                    ・「優しい」というイメージを色で表すことがおもしろい<br>
                                    ・いろいろな解釈があって良いということがわかる<br>
                                    ・方法論も紹介されている（筆の使い方）<br>
                                </p>
                        
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse03-02" aria-expanded="false" aria-controls="collapseTwo">
                            ２．本題材は、何をねらいにして、設定された題材か。
                            </button>
                        </h5>
                        </div>
                        <div id="collapse03-02" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion3">
                            <div class="card-body">
                                <p class="text">
                                    ・「自由」という感覚を子どもたちのなかに育むこと<br>
                                    ・筆使いやバランス<br>
                                    ・色の濃淡や水気などの方法論<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse03-03" aria-expanded="false" aria-controls="collapseThree">
                            ３．指導するにあたって、配慮されていることは何か
                            </button>
                        </h5>
                        </div>
                        <div id="collapse03-03" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                            <div class="card-body">
                                <p class="text">
                                    ・子どもは他の人と違うことを「失敗」というが、そうではないということを教師役が示している<br>
                                    ・ぱっと見たときに整っている描き方を説明している（方法論を一緒に教えている）
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse03-04" aria-expanded="false" aria-controls="collapseThree">
                            ４．自分が授業で行うとしたら、どんな風に設定し、何に配慮して授業化するか。
                            </button>
                        </h5>
                        </div>
                        <div id="collapse03-04" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                            <div class="card-body">
                                <p class="text">
                                    ・子どもたちに「自由」に描くことを体験させる。子どもが思う「失敗」は「失敗」ではないことや、「自由」に描くことを中心に声をかける。<br>
                                    ・筆の使い方や絵の具の水の量など、子どもたちに体験させながら紹介する。（初回は活動中にさらっと伝える。2回目は、初回で話したことをおさらいしながらその点に注目させて活動する。）


                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse03-05" aria-expanded="false" aria-controls="collapseThree">
                                ５．実際につくってこの題材を検証してみる
                                </button>
                            </h5>
                        </div>
                        <div id="collapse03-05" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                            <div class="card-body">
                                <img src="img/03-01.PNG" class="w-100" alt="">
                                <p class="my-4 text-center">顕微鏡から見える花<br>
                                    iPad Pro + Apple Pencil Gen2 で作成
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row bg-white mt-5" id="4">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第四講</span></h1>
                <p class="text-center">身近にあるモノやヒトやコトを新鮮な眼差しで見つめ、自分なりの意味を見つける</p>
            </div>

            <?php
                $items = [
                    0 => [
                        0 => [
                            "img" => "04-01.JPG",
                            "title" => "集まり"
                        ],
                        1 => [
                            "img" => "04-02.jpg",
                            "title" => "白黒はっきり"    
                        ],
                    ],
                    1 => [
                        
                        0 => [
                            "img" => "04-03.jpeg",
                            "title" => "朽"
                        ],
                        1 => [
                            "img" => "04-04.jpeg",
                            "title" => "白黒はっきり"    
                        ],
                        2 => [
                            "img" => "04-05.jpg",
                            "title" => "集まり"
                        ],
                        3 => [
                            "img" => "04-06.JPG",
                            "title" => "白黒はっきり"    
                        ],
                        4 => [
                            "img" => "04-07.JPG",
                            "title" => "白黒はっきり"    
                        ],
                        5 => [
                            "img" => "04-08.jpeg",
                            "title" => "白黒はっきり"    
                        ]

                    ],

                    2 => [
                        0 => [
                            "img" => "04-09.jpg",
                            "title" => "人工物"
                        ],

                        1 => [
                            "img" => "04-10.jpg",
                            "title" => "人工物"
                        ],

                        2 => [
                            "img" => "04-11.jpg",
                            "title" => "人工物"
                        ]
                    ]
                ];

                for($i=0; $i<count($items); $i++){
print<<<EOF
<div class="col-md-4 p-5 text-center">
<div id="carousel-{$i}" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
EOF;
                        for($j=0; $j<count($items[$i]); $j++){
                            if($j == 0){
                                $isActive = "active";
                            }else{
                                $isActive = "";
                            }
print<<<EOF
<div class="carousel-item {$isActive}">
<img src="img/{$items[$i][$j]['img']}" class="img-square" alt="">
<p class="text my-4">{$items[$i][$j]["title"]}</p>
</div>
EOF;
                        }
                    
                        print("</div>");
print<<<EOF
<a class="carousel-control-prev" href="#carousel-{$i}" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-{$i}" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div></div>
EOF;

                }
            
            ?>

            <div class="col-md-8 offset-md-2 my-4">
            
                <p class="text">2018年頃から写真にはまり始めた。ファインダー越しに見える街の景色は、普段何気なく通り過ぎる場と同じとは思えないほど、魅力にあふれている。私はその中でも、人工的に作られたものが朽ち果てていく様子や、自然と人工物が共生している姿に心惹かれた。<br>このような活動は、心にゆとりがないとできない。普段の私は仕事が忙しく、写真を撮りながら街を歩くことに時間が割けない。できるだけそういったゆとりを持ちたいものだ。</p>

            </div>

            

        </div>

        <div class="row bg-white mt-5" id="5">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第五講</span></h1>
                <p class="text-center">「生の芸術」の世界①</p>
            </div>

            <div class="col-md-6 offset-md-3 p-5 text-center">
                
                <o class="text my-4">絵をじっくり見て、気づいたことを書いてください。</p>

                <img src="img/05-01.png" height="500px" alt="">

            </div>

            <div class="col-md-8 offset-md-2 p-5">
                
                <p class="text">
                    全体的にノスタルジックな印象を受ける。壁や天井が白色で、木造だからだろうか。はたまた、描かれているテレビや電気などが古いタイプのものだからだろうか。また、生活感をとても感じる。テレビの上に無造作に置かれているものや床に散らばっている丸い座布団のようなものが、その雰囲気を発している。真ん中においてある箱はなんだろう。これまで見たことがない。<br>
                    作者はこの画を通して何を伝えたかったのだろう。物が少ないからきれいに見えるが、これを心情風景として捉えることもできる。つまり、全体としての思いはそこまで多くないが、雑多な置かれ方をしている、そんな心情だ。あるいは、筆者の子どものころに住んでいた実際の家が原風景として描かれているのかもしれない。
                    <br>
                    私がこの作品を描くとしたら、まず畳から描く。畳の大きさを決めたら次は壁、天井、障子の順に進める。その後に奥の部屋の様子を書いてから、最後に手前の部屋を描く。しかし、この作者は上から描いたのではないだろうかと想像する。なぜなら、ふすまのサイズ感に若干の違和感があるからだ。
                </p>

            </div>

        </div>

        <div class="row bg-white mt-5" id="6">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第六講</span></h1>
                <p class="text-center">生の芸術</p>
            </div>

            <div class="col-md-8 offset-md-2">
            
                <p class="text">
                    　アール・ブリュットの作品をたくさん見て、私たちのもつ色眼鏡の強さを改めて感じた。例えば、色使い1つをとってもたくさんの表現方法がある。そこにこの色は合わない、「現実」とは異なるなどの言い方は、すでに形作られている概念によって生まれている。しかし、そもそもそういった概念を持たない人たちが描く画には、私たちが見ている世界とはまた別の世界、その人にしか見ることができない世界が広がっている。<br><br>
                    　美しい尾の牝牛（1954）を見たとき、以前読んだC・G・ユングの曼荼羅の世界を思い出した。ユングは精神病者が自由に描いた曼荼羅から、患者がどんなことを訴えようとしているのかを学問的に見出そうとしていた。しかし、それは患者たちが描いた「生の芸術」を、私たち自身の既成概念に当てはめて解釈しようとする行為にほかならない。心理学として考えたときにはそのアプローチも有効なのかもしれないが、芸術として見たときにはあえて何かに当てはめて考えるのは微妙なのかもしれない。<br><br>
                    　絵画は、自分にしか見えていない「世界」を他者に伝えることにとても適した表現メディアだ。人は文字情報よりも画像情報のほうが多くの情報量を得ることができる。ただし、既成概念に合わないものを見るとそれを「ノイズ」と解釈しがちである。そのノイズこそが「下手」につながるのだろう。もし仮に、その人が本気で描いている絵画に対してノイズを感じてしまうのであれば、それはその人と自分の価値観の間に齟齬があるということだ。ノイズをノイズとして処理するか、それとも新しいものとして自分の中に取り込むか。学校教育ではぜひ後者を積極的進めていきたいと感じる。なぜなら、多様性に満ちあふれているこの世界では、様々なところで「ノイズ」が発生しているからだ。今回は絵画というカタチで「ノイズ」が表出したが、聴覚的ノイズ、嗅覚的ノイズ、味覚的ノイズなど、我々の感覚器官は絶えずノイズを検出している。<br><br>
                    　最近はノイズをキャンセルしていくための新しいデジタルテクノロジーが登場している。ノイズキャンセリングヘッドホンなどはその典型例だ。雑然としたノイズを消しさり、自分が聞きたいもの"だけ"を聞く。とても効率的だし、私もよく愛用している。しかし、それと同時に無性に雑音が欲しくなるときがある。あえてノイズを耳に取り込み、世界が動いている実感を得る。つまり、それは文字通り生きている実感、生の芸術につながるのだろう。
                </p>

            </div>

        </div>

        <div class="row bg-white mt-5" id="7">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第七講</span></h1>
                <p class="text-center">Zoomでのオンライン授業</p>
            </div>

        </div>

        <div class="row bg-white mt-5" id="8">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第八講</span></h1>
                <p class="text-center">アートの広がりと可能性</p>
            </div>

            <div class="col-md-8 offset-md-2">
            
                <h5 class="title-left">参加作品をみて、どの作品に興味をもったか？その理由は？</h5>

                <p class="text">【作品名】：<a href="https://smahpproject.wixsite.com/website-1/%E3%81%BF%E3%82%89%E3%81%84" target="blank_"><i class="fas fa-external-link-alt"></i> みらい The Future</a></p>
                <p class="text">【選んだ理由】<br>
                    > 以前はピアノを弾くのが好きでしたが、筋力低下により弾くのが難しくなり、しばらく音楽から遠ざかっていました。しかし、PCを使えば自由に作曲できて、ソフトに歌ってもらうことができると知り、自分もやってみようかなと思いました。<br><br>
                    これまで自由にできていたことが、SMAによってできなくなってしまった。しかし、コンピュータやiPadなどのデジタル・テクノロジーを使うことで、自分がやりたいことに近づくことができている。この作者の背景に心が動きました。<br>
                    音楽を作るだけでなく、iPadで絵を描いてそれを動画にするところまでやっているのは素晴らしいです。しかも、それが1台のデバイスでできてしまうのが、現代のいいところです。<br>
                    私は常々テクノロジーは弱い人の味方になるんだということを主張しています。健常者に対して障害者という存在があるのであれば、テクノロジーはその溝を埋めることができます。
                
                </p>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/e-TjaG63m5s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            </div>

            <div class="col-md-8 offset-md-2 mt-5">
            
                <h5 class="title-left">自分の専門も踏まえて、こうした活動には、どんなことが可能だと思うか？</h5>

                <p class="text">
                
                まず、このコンテストにデジタル作品が応募可能なところにすごく可能性を感じている。往々にして絵画コンクールなどになりがちだが、映像作品や写真、造形、音楽など、様々なメディア表現を受け付けているのは素晴らしい。審査事務局からすると、募集フォーマットが増えれば増えるほど作業が増えて面倒になるが、それを踏まえた上でもこの決断に至れているプロセスに興味がある。<br>
                次に考えるべきは、芸術作品に対して序列をつけるのかどうか、という点である。これはコンテストを開催するときに必ず議論になることだと思うが、私自身も未だに答えを出しづらい問題だ。2020年12月に、<a href="https://dojocon2020.coderdojo.jp/contest" target="blank_">DojoCon Japan 2020</a>という全国にあるプログラミングクラブの全国大会がオンラインで開催された。私が実行委員長を務め、コンテストについても色々と議論を重ねたが、やはり序列化することに意味があると考えている人が一定数いる。序列化されたことによって子どもたちは何を得られるのだろうか。コンテストが激化すると、子どもたちは大人ウケの良い作品（例えば、完成度が高かったり最先端の技術を使ったりなど）ばかり作り始めてしまう。この問題は回を重ねれば重ねるほど顕著に現れてしまいそうだ。<br>
                ひとつの解決策として、私は作品発表会という形式を提案したい。自分の言葉で発表するのが難しければ、プロのクリエイターや作家たちから直接フィードバックを得られる機会があればそれでいいのではないだろうか。これは鑑賞の学びにもつながる。他の人が作った作品をどうやって観るか、考えるきっかけとしても使えるのではないだろうか？
                </p>


            </div>


        </div>

        <div class="row bg-white mt-5" id="9">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第九講</span></h1>
                <p class="text-center">映画『絵を描く子どもたち』を見て考える</p>
            </div>

            <div class="col-md-8 offset-md-2 mb-4 text-center">
                <iframe width="400" height="300" src="https://www.youtube.com/embed/HDslIUYAKiY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

            </div>

            <div class="col-md-8 offset-md-2 ">

                <h4 class="title-left">1. 映画を見て気づいたこと、感じたこと</h4>

                <p class="text my-4">
                    子どもたちの精神状態が描く画に如実に現れることに気づいた。入学当初に子どもたちが描いた絵はどれも線が細く、不安の現れでもある紫色が使われたりしていた。また、細かい描写をするのも不安の現れだという。時間が立ち子どもたち同士の関係や教師との関係ができてくると、線は太くなり、力強く生き生きとした絵を書く子どもが増えた。<br>
                    子どもたちは、絵に自分の置かれている状態を素直に表すのだろう。劇中で「おばけなどを絵に表したら怖くなくなる」と言われていたが、恐怖の対象から興味の対象へと移り変わったことで、ディティールを考えはじめ、それを表現することができるようになったのだ。<br>
                    このような精神面の変化を捉えるには、図工は教科として優れているといえるだろう。劇中でも、児童画の時間で育まれた新しいものへの好奇心や探究心が他の教科・活動で発揮されているところが紹介されていた。
                </p>

                <h4 class="title-left">2. この映画に出てくる教師は、どんなことを大切にして教育していますか？</h4>

                <p class="text my-4">

                    この教師は、表現するときに子どもたちが抱く恐怖をできるだけなくそうと考えて行動している。表現する勇気をもたせるために、子どもがどんなことをやってもまずは1度それを励ましている。例えば、冒頭で紹介されていた絵を描けなかった子どもにも、描けている他の子どもと同じようにタイムスタンプを押していた。これは、子どもがやったことを1度励ますという意図があってのことではないだろうか。<br>
                    子どもたちが表現したことをしっかりと受け止めるのは簡単ではない。自分の中にある色眼鏡やものさしでは図ることができないことを頭では理解していても、行動で示すことは難しい。しかし、この教師は子どもがやったことをつぶさに観察する審美眼を持っている。そして、その審美眼を通して見られた子どもたちは、皆キラキラと輝いている。<br>
                    また、身体的成長によって生まれる大きな力を発散させるために、大きな黒板に自由に絵を描く時間を設けたり、全身を使って対象とぶつかるために川遊びの時間を作ったりしていた。この教師にとって児童画の授業とは、絵画にとどまらず、全身を使って得られた感覚を自由に表現することが目指している姿なのではないか。<br>

                </p>

                <h4 class="title-left">3. この映画では、どんな図画工作が目指されていますか？</h4>
                <p class="text my-4">
                    
                    全身から得た感覚を自由に表現すること, 表現することを恐れないことを目指していると思われる。創造的な活動とは、自分の一部をさらけ出すことになる。そこには当然恐怖が生まれる。しかし、教師の声掛けや場作りによって子どもたちは表現する勇気を手に入れるのだろう。<br>


                </p>

            </div>

        </div>

        <div class="row bg-white mt-5" id="10">
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第十講</span></h1>
                <p class="text-center">児童画の歴史を学んで</p>
            </div>

            <div class="col-md-8 offset-md-2 text-center">

                <img src="img/10-01.png" width="500px" alt="">
            </div>

            <div class="col-md-8 offset-md-2 mt-5">

                <h4 class="title-left">「児童画の歴史」を学んで、気づいたこと、考えたこと</h4>
                
                <p class="text my-4">

                    音楽の授業で歴史を学んだとき、芸術教育は戦争の影響を受けやすいことを知った。しかし、ここで描かれている子どもたちの絵は、プロパガンダ的ではなく自分たちの原風景をただ起こしたものであった。音楽との決定的な違いは、自分で作ることの容易さだと考えた。音楽は美術で言うところの臨画に近い。お手本と同じように歌う（描く）ことがよいとされている価値観が根底にあるのだろう。クラシック音楽などはまさにその典型である。アレンジというよりは、同じ曲をどれだけ上手に・丁寧に演奏することができるかが重視される。<br>
                    反面、創造主義に基づく美術教育では、子どもたちの内に秘めたる想いや考えを、身体全体で味わいながら表現することが目的となっている。過去に比べて今ではたくさんの素材や対象、題材がある。多様から生まれるカオスを子どもたち自身が楽しむことができるかは大切なポイントのように思う。

                </p>

                <h4 class="title-left my-5">
                これまでの、歴史を踏まえて、これからの時代の変化に対応して、造形教育は、何を大切にしたらよいと思うか？
                </h4>

                <p class="text">
                    私の基本的な学習観は、Creative Learning と呼ばれる理論を基底に構築されている。子どもたちはなにかを作る過程で様々なことを学び得る、というこの考え方は、マサチューセッツ工科大学のシーモア・パパート, アラン・ケイ, ミッチェル・レズニックらが代表的な構築主義と呼ばれる理論背景を持つ。構築主義的な学びは教示主義の対局にあり、その点では創造主義とかなり近い。しかし、これまでみてきた美術教育における創造主義と構築主義の中で決定的に異なることは、構築主義では最終的に教科書的な知識につながることまで考えられているのに対し、創造主義では子どもが生み出したものであればそこに無理に知識と関連付けることはしなくてもいいのではないかという点だろう。私は、創造的な活動からすべての学びが始まればそれでよいと考えていたが、美術の時間では創造主義的なアプローチを大切にするのもいいのではないかと思う。<br>
                    創造的な活動はメディアの変化によって進化する。これからの造形教育では、確実にコンピュータなどのデジタルデバイスが活動の中心になってくるだろう。しかし、コンピュータの画面に閉じこもるのではなく、フィジカルな体験と繋げていくことが大切だと考える。そして、そのときにはプログラミングは必須スキルになる。美術教育こそプログラミングを最も有効活用できる教科だと思う。
                </p>

                参考 <a href="https://valed.press/_ct/17274428">https://valed.press/_ct/17274428</a>

            </div>

        </div>

        <div class="row bg-white mt-5 mb-5" id="11"> 
            <div class="col-12 p-4">
                <h1 class="main-title"><span class="main-span-white">第十一, 十二講</span></h1>
                <p class="text-center">造形ワークショップ</p>
            </div>

            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="text-center">micro:bit を使ったゲームコントローラづくりをしよう！</h2>
                <iframe src="https://scratch.mit.edu/projects/368670723/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen class="mt-4"></iframe>

                    <div class="text-center">
                <a href="https://scratch.mit.edu/projects/368670723/">https://scratch.mit.edu/projects/368670723/</a>
                </div>
            </div>

            <div class="col-md-8 offset-md-2">

                <h4 class="title-left">ねらい</h4>
                <p class="text">
                　2020年から小学校でスタートした学習指導要領では、新たな学習内容のひとつとしてプログラミングが導入された。プログラミングは新しい教科として始まるのではなく、カリキュラム・マネジメント等を通じて行われることになっている。それは図工においても例外でなく、例えば文部科学省・経済産業省・総務省が協力して組織している「小学校を中心としたプログラミング教育ポータル」では図工でのプログラミング教育事例が2件掲載されている。そのうち1つは、プログラミングソフトを使って図形を描く実践であり、算数の内容も含みつつ教科横断型の学習をしている。2件目は、本格的に図工の内容に沿っている実践であり、センサーやモーターなどのハードウェアと紙やダンボールなどの素材を組み合わせて工作をしている。<br>
                　そもそも、プログラミングは創造的な営みであり、常にアート的側面を持ち合わせている。よって、図工との親和性はとても高い。しかし、それはプログラミングの創造的な側面を発揮した場合にのみ言える話である。宮島(2019）で指摘している通り、教示主義的なプログラミング教育では子どもたちの創造性は発揮されない。構築主義的なアプローチ（作ることで学ぶ）に基づいたプログラミング教育が求められている。<br>
                　さらに言えば、プログラミングとはソフトウェアとハードウェアの両方の分野を併せ持っている。先に上げた例で言えば、前者はソフトウェアに特化した実践、後者はハードウェアに特化した実践である。その両方をあわせたプログラミング教育の実践を構築主義的なアプローチで行うためには、図工が最も適しているといえるだろう。今回は、ソフトウェアとハードウェアの両方を作るプログラミング教育を用いた図工的ワークショップを提案する。


                </p>

                <h4 class="title-left">材料・用具</h4>
                <p class="text">
                    ・Scratch 3.0 <br>
                    ・micro:bit <br>
                    ・ダンボール, 紙筒, 折り紙, はさみ, のり, 装飾できるもの（スパンコールやモールなど）
                </p>

                <h4 class="title-left">対象学年</h4>
                <p class="text">小学校5-6年生</p>

                <h4 class="title-left">活動のコンセプト</h4>

                <img src="img/11-01.png" width="300px" alt="">

                <p class="text">
                　micro:bit（図1）はイギリスのBBCが開発した教育用のマイコンボードである。5x5のLEDマトリクス、2つのボタン、温度センサー、加速度センサー、コンパス、無線通信機能が単体で利用できる。また、デジタル/アナログの入出力端子もついているため、様々な外部機器と連携することも可能である。1つ3000円程度で購入できるため、世界中の教育機関で使われている。<br>
                　今回は、加速度センサーの機能を使ってシューティングゲームのコントローラを作る。画面上部にいる虫を下部にいるキャラクタから発射される弾（ここでは卵）を使って倒すゲームで、プログラムとしては中級レベルといえる。<br>
                　自機キャラクタはmicro:bitの加速度センサに反応し、micro:bitを左に傾けたら左に動き、右に傾けたら右に動く。また、どちらかのボタンをクリックすると弾が発射される。敵の攻撃を受けると micro:bit のLEDマトリクスにハートマークが表示される。<br>
                <img src="img/11-02.png" class="my-3" width="300" alt=""><br>
                　さて、以上紹介してきたプログラムは micro:bit 単体で完結することもできる。しかし、これだけではコントローラとして味気ない。そこで、フィジカルな素材を使って子どもたちなりのコントローラを作る活動を行う。コントローラはゲームをする上でコンピュータとの接点になる重要なインターフェスである。コントローラの使いやすさや親しみやすさで作品のクオリティは変わる。<br>
                　ここで重要なことは、フィジカルな素材の選び方であろう。例えば本計画では紙筒やダンボールなどを用意しているが、ある程度形が決まったものを用意してしまうと発想が固定化されてしまう可能性がある。ある程度素材として自由なものを選びたい。

                </p>

                <h4 class="title-left">活動の展開</h4>

                <ol>
                    <li class="text">Scratch でシューティングゲームを作成する。</li>
                    <ul>
                        <li><a href="https://scratch.mit.edu/projects/368670723/">https://scratch.mit.edu/projects/368670723/</a> を参考に。</li>
                    </ul>
                    <li class="text">micro:bit と Scratch をつなぐ。</li>
                    <li class="text">コントローラを作る。素材を選んでプロトタイプを作成する。</li>
                    <ul>
                        <li class="text">声掛けポイント：コントローラを使ってゲームがしやすいか？（握りやすさ、持ちやすさなど）</li>

                    </ul>
                    <li class="text">シューティングゲームの改造をする。例えば、コントローラを前に振ると弾がでる、などの工夫の余地がある。チャレンジカードのようなものを予め用意し、それぞれを子どもたち自身が取り組めるようにしておく。</li>
                    <li class="text">チャレンジカードのようなものを予め用意し、それぞれを子どもたち自身が取り組めるようにしておく。</li>
                    <li class="text">作品共有会をする。他の子の作品で遊び、フィードバックをする。</li>
                    <li class="text">フィードバックをもとに、次の改善点を考える。</li>
                </ol>

            </div>

        </div>

        <div class="row bg-main-white p-5">

            <div class="col-12">
                <h1 class="main-title"><span class="main-span-main-white">結び</span></h1>
            </div>

            <div class="col-md-8 offset-md-2">
                <p class="text my-5">

                今回課題ポートフォリオを作成する際にこだわった点としては、「デジタルで完結させる」ということだった。ポートフォリオそのもののデジタル化はもちろん、例えば絵を描く課題では、iPad Pro + Apple Pencil を使ってやってみたり、写真やその他の作品もすべて埋め込むことができた。デジタルとアナログは、お互いそれだけで完結していればかなり心地がよいのである。<br>
                デジタル化というと、すぐにPDFにすればよい、WordやExcelで提出すれば良いと思われがちだが、デバイスを選ばずもっともユニバーサルに使えるのはWeb技術だ。このポートフォリオサイトはどのデバイスからでも見ることができる。また、ソースコードは<a href="https://github.com/kiriem/art-portfolio-2020">GitHub</a>にて公開されている。<br>
                授業全体を通して、美術教育を取り巻く創造性の諸概念について学ぶことができた。創造性とは何を指すか、なにをもって創造性を獲得したというかは研究者の長年の問いである。ぜひその点についてもいつか先生と議論したい。

                </p>

                <p class="text text-center my-5">2021年1月15日（金）<br>教育学専攻M1 宮島衣瑛</p>

            </div>
                
            </div>

        </div>
    </div>




</body>
</html>